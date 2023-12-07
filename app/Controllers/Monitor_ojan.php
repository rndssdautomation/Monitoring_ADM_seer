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

         $dataapiqueue = json_decode($response, true);
            $queues = $dataapiqueue["data"]["pageList"];

            $response_data_ongoing_a = [];
            $response_data_finished_a = [];
            $response_data_waiting_a = [];

            $response_data_ongoing_b = [];
            $response_data_finished_b = [];
            $response_data_waiting_b = [];

            $allowed_tasks_a = [
                "ProductBV1",
                "ProductBV2",
                "ProductRUV",
                "ProductCTCB2",
                "ProductBLV",
                "ProductT5",
                "ProductCTCB1",
                "ProductBUV"
            ];
            foreach ($queues as $queue) {
                if (in_array($queue["defLabel"], $allowed_tasks_a)) {
                    switch ($queue["status"]) {
                        case 1000:
                            $status_a = "running";
                            $robot_a = $queue["agvId"];
                            if (empty($robot_a)) {
                                $status_a = "waiting";
                                $response_data_waiting_a[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status_a,
                                    "robot" => $queue["agvId"],
                                    "creat" => $queue["createdOn"],
                                    "end" => $queue["endedOn"],
                                ];
                            } else {
                                $response_data_ongoing_a[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status_a,
                                    "robot" => $robot_a,
                                    "end" => $queue["endedOn"],
                                    "creat" => $queue["createdOn"],
                            ];
                        }
                            break;
                        case 1003:
                        case 1004:
                            $status_a = "finished";
                            $response_data_finished_a[] = [
                                "task" => $queue["defLabel"],
                                "status" => $status_a,
                                "robot" => $queue["agvId"],
                                "creat" => $queue["createdOn"],
                                "end" => $queue["endedOn"],
                            ];
                            break;
                        default:
                            $status_a = "unknown";
                            break;
                    }
                }
            }
            $response_data_last_finished_a = array_slice($response_data_finished_a, 0, 3);
            $combined_data_a = array_merge($response_data_ongoing_a, $response_data_waiting_a, $response_data_last_finished_a);
            $destination_a = "";
            $next_task_a = "";
            $queue_a = count($response_data_waiting_a);        
            $statusnya_a = "StandBy"; 

            foreach ($response_data_ongoing_a as $data_a) {
                if ($data_a["status"] === "running") {
                    $destination_a = $data_a["task"];
                    $statusnya_a = "Running";
                    break;
                }
            }

            if ($queue_a > 0) {
            usort($response_data_waiting_a, function ($a_a, $b_a) {
                return strtotime($a_a["creat"]) - strtotime($b_a["creat"]);
                });
                if (!empty($response_data_waiting_a)) {
                    $next_task_a = $response_data_waiting_a[0]["task"];
                }
            }     
            if ($destination_a === "") {
                $destination_a = "-";
            }
            if ($next_task_a === "") {
                $next_task_a = "-";
            }
            if ($queue_a === 0) {
                $queue_a = "-";
            }

            $allowed_tasks_b = [
                "ScrapBV1A",
                "ScrapBV2A",
                "ScrapCTM2",
                "ScrapCTCA"
            ];
            foreach ($queues as $queue) {
                if (in_array($queue["defLabel"], $allowed_tasks_b)) {
                    switch ($queue["status"]) {
                        case 1000:
                            $status_b = "running";
                            $robot_b = $queue["agvId"];
                            if (empty($robot_b)) {
                                $status_b = "waiting";
                                $response_data_waiting_b[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status_b,
                                    "robot" => $queue["agvId"],
                                    "creat" => $queue["createdOn"],
                                    "end" => $queue["endedOn"],
                                ];
                            } else {
                                $response_data_ongoing_b[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status_b,
                                    "robot" => $robot_b,
                                    "end" => $queue["endedOn"],
                                    "creat" => $queue["createdOn"],
                            ];
                        }
                            break;
                        case 1003:
                        case 1004:
                            $status_b = "finished";
                            $response_data_finished_b[] = [
                                "task" => $queue["defLabel"],
                                "status" => $status_b,
                                "robot" => $queue["agvId"],
                                "creat" => $queue["createdOn"],
                                "end" => $queue["endedOn"],
                            ];
                            break;
                        default:
                            $status_b = "unknown";
                            break;
                    }
                }
            }
            $response_data_last_finished_b = array_slice($response_data_finished_b, 0, 3);
            $combined_data_b = array_merge($response_data_ongoing_b, $response_data_waiting_b, $response_data_last_finished_b);
            $destination_b = "";
            $next_task_b = "";
            $queue_b = count($response_data_waiting_b);
            $statusnya_b = "StandBy"; 

            foreach ($response_data_ongoing_b as $data_b) {
                if ($data_b["status"] === "running") {
                    $destination_b = $data_b["task"];
                    $statusnya_b = "Running";

                    break;
                }
            }

            if ($queue_b > 0) {
            usort($response_data_waiting_b, function ($a_b, $b_b) {
                return strtotime($a_b["creat"]) - strtotime($b_b["creat"]);
                });
                if (!empty($response_data_waiting_b)) {
                    $next_task_b = $response_data_waiting_b[0]["task"];
                }
            }     
            if ($destination_b === "") {
                $destination_b = "-";
            }
            if ($next_task_b === "") {
                $next_task_b = "-";
            }
            if ($queue_b === 0) {
                $queue_b = "-";
            }

            $responseData["datarobotB"][]=[
                "data_b" => $combined_data_b,
                "destination_b" => $destination_b,
                "next_task_b" => $next_task_b,
                "queue_b" => $queue_b,
                "statusnya_b" => $statusnya_b,
            ];
            $responseData["datarobotA"][]=[
                "data_a" => $combined_data_a,
                "destination_a" => $destination_a,
                "next_task_a" => $next_task_a,
                "queue_a" => $queue_a,
                "statusnya_a" => $statusnya_a,
            ];
// dd($responseData);
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