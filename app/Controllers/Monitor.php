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
            //QUEUE ROBOT 1
            $response_data_ongoing_robot1 = [];
            $response_data_finished_robot1 = [];
            $response_data_waiting_robot1 = [];
            $statusall_robot1 = [];

            $allowed_tasks_robot1 = [
                "ProductBV1",
                "ProductBV2",
                "ProductRUV",
                "ProductCTCB2",
                "ProductBLV",
                "ProductT5",
                "ProductCTCB1",
                "ProductBUV"
            ];

            //QUEUE ROBOT 2
            $response_data_ongoing_robot2 = [];
            $response_data_finished_robot2 = [];
            $response_data_waiting_robot2 = [];
            $statusall_robot2 = [];

            $allowed_tasks_robot2 = [
                "ScrapBV1A",
                "ScrapBV2A",
                "ScrapCTM2",
                "ScrapCTCA"
            ];

            //QUEUE ROBOT ALL
            $response_data_ongoing_robotall = [];
            $response_data_finished_robotall = [];
            $response_data_waiting_robotall = [];

            foreach ($rawData as $data) {
                switch ($data["status"]) {
                    case 1000:
                        $status = "running";
                        $robot = $data["agvId"];
                        if (empty($robot)) {
                            $status = "waiting";
                            $response_data_waiting_robotall[] = [
                                "task" => $data["defLabel"],
                                "status" => $status,
                                "robot" => $data["agvId"],
                                "creat" => $data["createdOn"],
                                "end" => $data["endedOn"],
                            ];
                        } else {
                            $response_data_ongoing_robotall[] = [
                                "task" => $data["defLabel"],
                                "status" => $status,
                                "robot" => $robot,
                                "end" => $data["endedOn"],
                                "creat" => $data["createdOn"],
                        ];
                    }
                        break;
                    case 1001:
                        $status = "terminated";
                        break;
                    case 1002:
                        $status = "suspended";
                        break;
                    case 1003:
                        $status = "finished";  
                        $response_data_finished_robotall[] = [
                            "task" => $data["defLabel"],
                            "status" => $status,
                            "robot" => $data["agvId"],
                            "creat" => $data["createdOn"],
                            "end" => $data["endedOn"],
                        ];                      
                        break;
                    case 1004:
                        $status = "exception";                        
                        break;
                    case 1005:
                        $status = "restart exception";                        
                        break;
                    case 1006:
                        $status = "abnormally interrupted";                        
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

                if ($data["status"] == 1001 || $data["status"] == 1002 || $data["status"] == 1004 || $data["status"] == 1005 || $data["status"] == 1006) {
                    $responseData["failed"][] = [
                        "task_failed"   => $data["defLabel"],
                        "robot_failed"  => $data["agvId"],
                        "status_failed" => $status,
                        "creat_failed"  => $data["createdOn"],
                        "end_failed"    => $data["endedOn"],
                    ];
                }

                if ($data["status"] == 1003) {
                    $responseData["success"][] = [
                        "task_success"   => $data["defLabel"],
                        "robot_success"  => $data["agvId"],
                        "status_success" => $status,
                        "creat_success"  => $data["createdOn"],
                        "end_success"    => $data["endedOn"],
                    ];
                }
                if (in_array($data["defLabel"], $allowed_tasks_robot1)) {
                    switch ($data["status"]) {
                        case 1000:
                            $status_robot1 = "running";
                            $robot = $data["agvId"];
                            if (empty($robot)) {
                                $status_robot1 = "waiting";
                                $response_data_waiting_robot1[] = [
                                    "task" => $data["defLabel"],
                                    "status" => $status_robot1,
                                    "robot" => $data["agvId"],
                                    "creat" => $data["createdOn"],
                                    "end" => $data["endedOn"],
                                ];
                            } else {
                                $response_data_ongoing_robot1[] = [
                                    "task" => $data["defLabel"],
                                    "status" => $status_robot1,
                                    "robot" => $robot,
                                    "end" => $data["endedOn"],
                                    "creat" => $data["createdOn"],
                            ];
                        }
                            break;
                        case 1003:
                            $status_robot1 = "finished";
                            $response_data_finished_robot1[] = [
                                "task" => $data["defLabel"],
                                "status" => $status_robot1,
                                "robot" => $data["agvId"],
                                "creat" => $data["createdOn"],
                                "end" => $data["endedOn"],
                            ];
                            break;
                        default:
                            $status_robot1 = "unknown";
                            break;
                    }
                }
                if (in_array($data["defLabel"], $allowed_tasks_robot2)) {
                    switch ($data["status"]) {
                        case 1000:
                            $status_robot2 = "running";
                            $robot2 = $data["agvId"];
                            if (empty($robot2)) {
                                $status_robot2 = "waiting";
                                $response_data_waiting_robot2[] = [
                                    "task" => $data["defLabel"],
                                    "status" => $status_robot2,
                                    "robot" => $data["agvId"],
                                    "creat" => $data["createdOn"],
                                    "end" => $data["endedOn"],
                                ];
                            } else {
                                $response_data_ongoing_robot2[] = [
                                    "task" => $data["defLabel"],
                                    "status" => $status_robot2,
                                    "robot" => $robot2,
                                    "end" => $data["endedOn"],
                                    "creat" => $data["createdOn"],
                            ];
                        }
                            break;
                        case 1003:
                            $status_robot2 = "finished";
                            $response_data_finished_robot2[] = [
                                "task" => $data["defLabel"],
                                "status" => $status_robot2,
                                "robot" => $data["agvId"],
                                "creat" => $data["createdOn"],
                                "end" => $data["endedOn"],
                            ];                          
                            break;
                        default:
                            $status_robot2 = "unknown";
                            break;
                    }
                }
            }
            $response_data_last_finished_robotall = array_slice($response_data_finished_robotall, 0, 3);
            $combined_data_robotall = array_merge($response_data_ongoing_robotall, $response_data_waiting_robotall, $response_data_last_finished_robotall);
            $response_data_robotall[] = ["queue_robotall" => $combined_data_robotall ];
              
            $response_data_last_finished_robot1 = array_slice($response_data_finished_robot1, 0, 3);
            $response_data_last_finished_robot2 = array_slice($response_data_finished_robot2, 0, 3);
            $combined_data_robot1 = array_merge($response_data_ongoing_robot1, $response_data_waiting_robot1, $response_data_last_finished_robot1);
            $combined_data_robot2 = array_merge($response_data_ongoing_robot2, $response_data_waiting_robot2, $response_data_last_finished_robot2);
            $response_data_robot1[] = ["queue_robot1" => $combined_data_robot1];
            $response_data_robot2[] = ["queue_robot2" => $combined_data_robot2];
            $destination_robot1 = "";
            $destination_robot2 = "";
            $next_task_robot1 = "";
            $next_task_robot2 = "";
            $queue_robot1 = count($response_data_waiting_robot1);
            $queue_robot2 = count($response_data_waiting_robot2);
            $statusnya_robot1 = "StandBy";
            $statusnya_robot2 = "StandBy";

            
            foreach ($response_data_ongoing_robot1 as $data_robot1) {
                if ($data_robot1["status"] === "running") {
                    $destination_robot1 = $data_robot1["task"];
                    $statusnya_robot1 = "Running";
                    break;
                }
            }
            foreach ($response_data_ongoing_robot2 as $data_robot2) {
                if ($data_robot2["status"] === "running") {
                    $destination_robot2 = $data_robot2["task"];
                    $statusnya_robot2 = "Running";
                    break;
                }
            }

            if ($queue_robot1 > 0) {
                usort($response_data_waiting_robot1, function ($a_robot1, $b_robot1) {
                    return strtotime($a_robot1["creat"]) - strtotime($b_robot1["creat"]);
                });
                if (!empty($response_data_waiting_robot1)) {
                    $next_task_robot1 = $response_data_waiting_robot1[0]["task"];
                }
            }
            if ($queue_robot2 > 0) {
                usort($response_data_waiting_robot2, function ($a_robot2, $b_robot2) {
                    return strtotime($a_robot2["creat"]) - strtotime($b_robot2["creat"]);
                });
                if (!empty($response_data_waiting_robot2)) {
                    $next_task_robot2 = $response_data_waiting_robot2[0]["task"];
                }
            }
            
            if ($destination_robot1 === "") {
                $destination_robot1 = "-";
            }
            if ($next_task_robot1 === "") {
                $next_task_robot1 = "-";
            }
            if ($queue_robot1 === 0) {
                $queue_robot1 = "-";
            }
            if ($destination_robot2 === "") {
                $destination_robot2 = "-";
            }
            if ($next_task_robot2 === "") {
                $next_task_robot2 = "-";
            }
            if ($queue_robot2 === 0) {
                $queue_robot2 = "-";
            }
            
            $statusall_robot2[] = [
                "destination" => $destination_robot2,
                "next_task"   => $next_task_robot2,
                "queue"       => $queue_robot2,
                "statusnya"   => $statusnya_robot2,
            ];
            $statusall_robot1[] = [
                "destination" => $destination_robot1,
                "next_task"   => $next_task_robot1,
                "queue"       => $queue_robot1,
                "statusnya"   => $statusnya_robot1,
            ];
            
            $responseDataAll = array_merge($responseData, $response_data_robot1, $statusall_robot1, $response_data_robot2, $statusall_robot2, $response_data_robotall );
            
            echo "data: " . json_encode($responseDataAll) . "\n\n";
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