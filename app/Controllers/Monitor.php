<?php

namespace App\Controllers;

class Monitor extends BaseController
{
    public function index()
    {
        return view('Basecore/index');
    }
    public function get_api_list_task()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $data = [
            "start" => "",
            "end" => "",
        ];
        $api_url ="http://" . $IP . ":8080/api/stat/agvTaskSuccessList";
        // $api_url ="http://" . API_IP_ADDRESS . ":8080/api/stat/agvTaskSuccessList";
        $headers = ["Content-Type: application/json"];
        $kill = 1;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $response = curl_exec($ch);
        if ($response === false) {
            echo "Error: " . curl_error($ch);
        } else {
            $raw_data = json_decode($response, true);
            $data = $raw_data["data"][0]["tasks"];
            $tasks = array_keys($data);
            $count = count($tasks);
            $response_data = [];
            foreach ($tasks as $task) {
                $response_data[] = [
                    "task" => $task,
                ];
            }
            echo json_encode(["data" => $response_data]);
        }
        curl_close($ch);
    }
    public function get_api_data_delivery_failed()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 1;
        $ch = curl_init();
        $api_url = "http://" . $IP . ":8080/api/queryWindTask";
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            json_encode([
                "currentPage" => 1,
                "pageSize" => 100,
                "queryParam" => [
                    "taskId" => "",
                    "defLabel" => "",
                    "taskRecordId" => "",
                    "status" => null,
                    "agvId" => "",
                    "startDate" => "",
                    "endDate" => "",
                    "isOrderDesc" => false,
                ],
            ])
        );
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "Error: " . curl_error($ch);
        } else {
            $dataapifailed = json_decode($response, true);
            $faileds = $dataapifailed["data"]["pageList"];
            $response_data = [];
            foreach ($faileds as $failed) {
                switch ($failed["status"]) {
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
                if ($failed["status"] == 1001 || $failed["status"] == 1002) {
                    $response_data[] = [
                        "task_failed" => $failed["defLabel"],
                        "robot_failed" => $failed["agvId"],
                        "status_failed" => $status,
                        "creat_failed" => $failed["createdOn"],
                        "end_failed" => $failed["endedOn"],
                    ];
                }
            }
            echo json_encode(["data" => $response_data]);
        }
        curl_close($ch);
    }
    public function get_api_data_delivery_success()
    {
        
        $config = config('Identity');
        $IP = $config->IP;
        $api_url = "http://" . $IP . ":8080/api/queryWindTask";
        $kill = 1;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt(
            $ch,
            CURLOPT_POSTFIELDS,
            json_encode([
                "currentPage" => 1,
                "pageSize" => 500,
                "queryParam" => [
                    "taskId" => "",
                    "defLabel" => "",
                    "taskRecordId" => "",
                    "status" => null,
                    "agvId" => "",
                    "startDate" => "",
                    "endDate" => "",
                    "isOrderDesc" => false,
                ],
            ])
        );
        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            echo "Error: " . curl_error($ch);
        } else {
            $dataapisuccess = json_decode($response, true);
            $success = $dataapisuccess["data"]["pageList"];
            $response_data = [];
            foreach ($success as $succes) {
                switch ($succes["status"]) {
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
                if ($succes["status"] == 1003 || $succes["status"] == 1004) {
                    $response_data[] = [
                        "task_success" => $succes["defLabel"],
                        "robot_success" => $succes["agvId"],
                        "status_success" => $status,
                        "creat_success" => $succes["createdOn"],
                        "end_success" => $succes["endedOn"],
                    ];
                }
            }
            echo json_encode(["data" => $response_data]);
        }
        curl_close($ch);
    }
}