<?php

namespace App\Controllers;

class Monitor extends BaseController
{
    public function index()
    {
        return view('Basecore/index');
    }

    // DELIVERY
    public function get_api_data_delivery()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        $config = config('Identity');
        $IP = $config->IP;
        $timeout = 5;

        $apiUrl = "http://{$IP}:8080/api/queryWindTask";

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $apiUrl,
            CURLOPT_HTTPHEADER     => ["Content-Type: application/json"],
            CURLOPT_TIMEOUT        => $timeout,
            CURLOPT_CONNECTTIMEOUT => $timeout,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => json_encode([
                "currentPage" => 1,
                "pageSize"    => 500,
                "queryParam"  => [
                    "taskId"        => "",
                    "defLabel"      => "",
                    "taskRecordId"  => "",
                    "status"        => null,
                    "agvId"         => "",
                    "startDate"     => "",
                    "endDate"       => "",
                    "isOrderDesc"   => false,
                ],
            ]),
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "data: " . json_encode(["error" => curl_error($ch)]) . "\n\n";
        } else {
            $rawDataJson = json_decode($response, true);
            $rawData = $rawDataJson["data"]["pageList"];
            $responseData = ["failed" => [], "success" => [], "history" => []];

            foreach ($rawData as $data) {
                switch ($data["status"]) {
                    case 1000:
                        $status = "running";
                        break;
                    case 1001:
                        $status = "terminated";
                        break;
                    case 1002:
                        $status = "suspended";
                        break;
                    case 1003:
                        $status = "finished";
                        break;
                    case 1004:
                        $status = "abnormally finished";
                        break;
                    default:
                        $status = "unknown";
                        break;
                }

                $responseData["history"][] = [
                    "task"   => $data["defLabel"],
                    "status" => $status,
                    "robot"  => $data["agvId"],
                    "creat"  => $data["createdOn"],
                    "end"    => $data["endedOn"],
                ];

                if ($data["status"] == 1001 || $data["status"] == 1002) {
                    $responseData["failed"][] = [
                        "task_failed"   => $data["defLabel"],
                        "robot_failed"  => $data["agvId"],
                        "status_failed" => $status,
                        "creat_failed"  => $data["createdOn"],
                        "end_failed"    => $data["endedOn"],
                    ];
                }

                if ($data["status"] == 1003 || $data["status"] == 1004) {
                    $responseData["success"][] = [
                        "task_success"   => $data["defLabel"],
                        "robot_success"  => $data["agvId"],
                        "status_success" => $status,
                        "creat_success"  => $data["createdOn"],
                        "end_success"    => $data["endedOn"],
                    ];
                }
            }

            echo "data: " . json_encode($responseData) . "\n\n";
            ob_flush();
            flush();
        }

        curl_close($ch);
    }

    // DATA ROBOT
    public function get_api_data_status_robot()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        $config = config('Identity');
        $IP = $config->IP;
        $timeout = 5;

        $apiUrl = "http://{$IP}:8088/robotsStatus";

        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL            => $apiUrl,
            CURLOPT_HTTPHEADER     => ["Content-Type: application/json"],
            CURLOPT_TIMEOUT        => $timeout,
            CURLOPT_CONNECTTIMEOUT => $timeout,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPGET        => true,
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            echo "data: " . json_encode(["error" => curl_error($ch)]) . "\n\n";
        } else {
            $rawDataJson = json_decode($response, true);
            $rawData = $rawDataJson["report"];
            // $responseData = ["failed" => [], "success" => [], "history" => []];
            $robot_data = [];

            foreach ($rawData as $robot) {
                $info_robot = $robot["vehicle_id"];
                $location_curent = $robot["rbk_report"]["current_station"];
                $status_batterylevel = $robot["rbk_report"]["battery_level"];
                $status_charging = $robot["rbk_report"]["charging"];
    
                $robot_data[] = [
                    "info_robot" => $info_robot,
                    "location_curent" => $location_curent,
                    "status_batterylevel" => ($status_batterylevel * 100) . "%",
                    "status_charging" => $status_charging,
                ];
                

            }

            echo "data: " . json_encode($robot_data) . "\n\n";
            ob_flush();
            flush();
        }

        curl_close($ch);
    }

}