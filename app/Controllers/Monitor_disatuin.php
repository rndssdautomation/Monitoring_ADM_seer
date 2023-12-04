<?php

namespace App\Controllers;

class Monitor extends BaseController
{
    public function index()
    {
        return view('Basecore/index');
    }

  
    // DELIVERY FAILED
    public function get_api_data_delivery_failed()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 5;
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

    // DELIVERY SUCCESS
    public function get_api_data_delivery_success()
    {
        
        $config = config('Identity');
        $IP = $config->IP;
        $api_url = "http://" . $IP . ":8080/api/queryWindTask";
        $kill = 5;
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

    // HISTORY TASK
    public function get_api_data_history_task()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 5;
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
            $dataapiqueue = json_decode($response, true);
            $queues = $dataapiqueue["data"]["pageList"];
            $response_data = [];
            foreach ($queues as $queue) {
                switch ($queue["status"]) {
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
                $response_data[] = [
                    "task" => $queue["defLabel"],
                    "status" => $status,
                    "robot" => $queue["agvId"],
                    "creat" => $queue["createdOn"],
                    "end" => $queue["endedOn"],
                ];
            }
            echo json_encode(["data" => $response_data]);
        }
        curl_close($ch);
    }

    // DATA ROBOT
    public function get_api_data_status_robot()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $api_url = "http://" . $IP . ":8088/robotsStatus";
        $headers = ["Content-Type: application/json"];
        $kill = 5;
        $ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_TIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
    
        $response = curl_exec($ch);
    
        if ($response === false) {
            echo "Error: " . curl_error($ch);
        } else {
            $raw_data = json_decode($response, true);
    
            $robot_data = [];
    
            foreach ($raw_data["report"] as $robot) {
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
            echo json_encode(["data" => $robot_data]);
        }
    
        curl_close($ch);
    }
    

    // QUEUE ROBOT 1
    public function get_api_data_queue_robot1()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 5;
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
            $dataapiqueue = json_decode($response, true);
            $queues = $dataapiqueue["data"]["pageList"];

            $response_data_ongoing = [];
            $response_data_finished = [];
            $response_data_waiting = [];

            $allowed_tasks = [
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
                if (in_array($queue["defLabel"], $allowed_tasks)) {
                    switch ($queue["status"]) {
                        case 1000:
                            $status = "running";
                            $robot = $queue["agvId"];
                            if (empty($robot)) {
                                $status = "waiting";
                                $response_data_waiting[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status,
                                    "robot" => $queue["agvId"],
                                    "creat" => $queue["createdOn"],
                                    "end" => $queue["endedOn"],
                                ];
                            } else {
                                $response_data_ongoing[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status,
                                    "robot" => $robot,
                                    "end" => $queue["endedOn"],
                                    "creat" => $queue["createdOn"],
                            ];
                        }
                            break;
                        case 1003:
                        case 1004:
                            $status = "finished";
                            $response_data_finished[] = [
                                "task" => $queue["defLabel"],
                                "status" => $status,
                                "robot" => $queue["agvId"],
                                "creat" => $queue["createdOn"],
                                "end" => $queue["endedOn"],
                            ];
                            break;
                        default:
                            $status = "unknown";
                            break;
                    }
                }
            }
            $response_data_last_finished = array_slice($response_data_finished, 0, 3);
            $combined_data = array_merge($response_data_ongoing, $response_data_waiting, $response_data_last_finished);
            $destination = "";
            $next_task = "";
            $queue = count($response_data_waiting);        
            $statusnya = "StandBy"; 

            foreach ($response_data_ongoing as $data) {
                if ($data["status"] === "running") {
                    $destination = $data["task"];
                    $statusnya = "Running";
                    break;
                }
            }

            if ($queue > 0) {
            usort($response_data_waiting, function ($a, $b) {
                return strtotime($a["creat"]) - strtotime($b["creat"]);
                });
                if (!empty($response_data_waiting)) {
                    $next_task = $response_data_waiting[0]["task"];
                }
            }     
            if ($destination === "") {
                $destination = "No Destination Yet";
            }
            if ($next_task === "") {
                $next_task = "No Upcoming Tasks";
            }
            if ($queue === 0) {
                $queue = "No Remaining Queue";
            }

            echo json_encode([
                "data" => $combined_data,
                "destination" => $destination,
                "next_task" => $next_task,
                "queue" => $queue,
                "statusnya" => $statusnya,
            ]);
        }

        curl_close($ch);
    }


    // QUEUE ROBOT 2
    public function get_api_data_queue_robot2()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 5;
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
            $dataapiqueue = json_decode($response, true);
            $queues = $dataapiqueue["data"]["pageList"];

            $response_data_ongoing = [];
            $response_data_finished = [];
            $response_data_waiting = [];

            $allowed_tasks = [
                "ScrapBV1A",
                "ScrapBV2A",
                "ScrapCTM2",
                "ScrapCTCA"
            ];
                foreach ($queues as $queue) {
                    if (in_array($queue["defLabel"], $allowed_tasks)) {
                        switch ($queue["status"]) {
                            case 1000:
                                $status = "running";
                                $robot = $queue["agvId"];
                                if (empty($robot)) {
                                    $status = "waiting";
                                    $response_data_waiting[] = [
                                        "task" => $queue["defLabel"],
                                        "status" => $status,
                                        "robot" => $queue["agvId"],
                                        "creat" => $queue["createdOn"],
                                        "end" => $queue["endedOn"],
                                    ];
                                } else {
                                    $response_data_ongoing[] = [
                                        "task" => $queue["defLabel"],
                                        "status" => $status,
                                        "robot" => $robot,
                                        "end" => $queue["endedOn"],
                                        "creat" => $queue["createdOn"],
                                ];
                            }
                                break;
                            case 1003:
                            case 1004:
                                $status = "finished";
                                $response_data_finished[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status,
                                    "robot" => $queue["agvId"],
                                    "creat" => $queue["createdOn"],
                                    "end" => $queue["endedOn"],
                                ];
                                break;
                            default:
                                $status = "unknown";
                                break;
                        }
                    }
                }
                $response_data_last_finished = array_slice($response_data_finished, 0, 3);
                $combined_data = array_merge($response_data_ongoing, $response_data_waiting, $response_data_last_finished);
                $destination = "";
                $next_task = "";
                $queue = count($response_data_waiting);
                $statusnya = "StandBy"; 

                foreach ($response_data_ongoing as $data) {
                    if ($data["status"] === "running") {
                        $destination = $data["task"];
                        $statusnya = "Running";

                        break;
                    }
                }

                if ($queue > 0) {
                usort($response_data_waiting, function ($a, $b) {
                    return strtotime($a["creat"]) - strtotime($b["creat"]);
                    });
                    if (!empty($response_data_waiting)) {
                        $next_task = $response_data_waiting[0]["task"];
                    }
                }     
                if ($destination === "") {
                    $destination = "No Destination Yet";
                }
                if ($next_task === "") {
                    $next_task = "No Upcoming Tasks";
                }
                if ($queue === 0) {
                    $queue = "No Remaining Queue";
                }

                echo json_encode([
                    "data" => $combined_data,
                    "destination" => $destination,
                    "next_task" => $next_task,
                    "queue" => $queue,
                    "statusnya" => $statusnya,
                ]);
            }
        curl_close($ch);
    }

    // QUEUE ROBOT ALL
    public function get_api_data_queue_robot_all()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 5;
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
            $dataapiqueue = json_decode($response, true);
            $queues = $dataapiqueue["data"]["pageList"];

            $response_data_ongoing = [];
            $response_data_finished = [];
            $response_data_waiting = [];

                foreach ($queues as $queue) {
                        switch ($queue["status"]) {
                            case 1000:
                                $status = "running";
                                $robot = $queue["agvId"];
                                if (empty($robot)) {
                                    $status = "waiting";
                                    $response_data_waiting[] = [
                                        "task" => $queue["defLabel"],
                                        "status" => $status,
                                        "robot" => $queue["agvId"],
                                        "creat" => $queue["createdOn"],
                                        "end" => $queue["endedOn"],
                                    ];
                                } else {
                                    $response_data_ongoing[] = [
                                        "task" => $queue["defLabel"],
                                        "status" => $status,
                                        "robot" => $robot,
                                        "end" => $queue["endedOn"],
                                        "creat" => $queue["createdOn"],
                                ];
                            }
                                break;
                            case 1003:
                            case 1004:
                                $status = "finished";
                                $response_data_finished[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status,
                                    "robot" => $queue["agvId"],
                                    "creat" => $queue["createdOn"],
                                    "end" => $queue["endedOn"],
                                ];
                                break;
                            default:
                                $status = "unknown";
                                break;
                        }
                    
                }
                $response_data_last_finished = array_slice($response_data_finished, 0, 3);
                $combined_data = array_merge($response_data_ongoing, $response_data_waiting, $response_data_last_finished);
              
                echo json_encode([
                    "data" => $combined_data,
                ]);
            }
        curl_close($ch);
    }

    // QUEUE ROBOT 
    public function get_api_data_queue_robot()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $kill = 5;
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
            $dataapiqueue = json_decode($response, true);
            $queues = $dataapiqueue["data"]["pageList"];

            $response_data_ongoing = [];
            $response_data_finished = [];
            $response_data_waiting = [];
            $response_data_ongoing_robot1 = [];
            $response_data_finished_robot1 = [];
            $response_data_waiting_robot1= [];
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

                foreach ($queues as $queue) {
                        switch ($queue["status"]) {
                            case 1000:
                                $status = "running";
                                $robot = $queue["agvId"];
                                if (empty($robot)) {
                                    $status = "waiting";
                                    $response_data_waiting[] = [
                                        "task" => $queue["defLabel"],
                                        "status" => $status,
                                        "robot" => $queue["agvId"],
                                        "creat" => $queue["createdOn"],
                                        "end" => $queue["endedOn"],
                                    ];
                                } else {
                                    $response_data_ongoing[] = [
                                        "task" => $queue["defLabel"],
                                        "status" => $status,
                                        "robot" => $robot,
                                        "end" => $queue["endedOn"],
                                        "creat" => $queue["createdOn"],
                                ];
                            }
                                break;
                            case 1003:
                            case 1004:
                                $status = "finished";
                                $response_data_finished[] = [
                                    "task" => $queue["defLabel"],
                                    "status" => $status,
                                    "robot" => $queue["agvId"],
                                    "creat" => $queue["createdOn"],
                                    "end" => $queue["endedOn"],
                                ];
                                break;
                            default:
                                $status = "unknown";
                                break;
                        }
                    
                }
                foreach ($queues as $queue_robot1) {
                    if (in_array($queue_robot1["defLabel"], $allowed_tasks_robot1)) {
                        switch ($queue_robot1["status"]) {
                            case 1000:
                                $status_robot1 = "running";
                                $robot1 = $queue_robot1["agvId"];
                                if (empty($robot1)) {
                                    $status_robot1 = "waiting";
                                    $response_data_waiting_robot1[] = [
                                        "task" => $queue_robot1["defLabel"],
                                        "status" => $status_robot1,
                                        "robot" => $queue_robot1["agvId"],
                                        "creat" => $queue_robot1["createdOn"],
                                        "end" => $queue_robot1["endedOn"],
                                    ];
                                } else {
                                    $response_data_ongoing_robot1[] = [
                                        "task" => $queue_robot1["defLabel"],
                                        "status" => $status_robot1,
                                        "robot" => $robot1,
                                        "end" => $queue_robot1["endedOn"],
                                        "creat" => $queue_robot1["createdOn"],
                                ];
                            }
                                break;
                            case 1003:
                            case 1004:
                                $status_robot1 = "finished";
                                $response_data_finished_robot1[] = [
                                    "task" => $queue_robot1["defLabel"],
                                    "status" => $status_robot1,
                                    "robot" => $queue_robot1["agvId"],
                                    "creat" => $queue_robot1["createdOn"],
                                    "end" => $queue_robot1["endedOn"],
                                ];
                                break;
                            default:
                                $status_robot1 = "unknown";
                                break;
                        }
                    }
                }
                //all
                $response_data_last_finished = array_slice($response_data_finished, 0, 3);
                $combined_data = array_merge($response_data_ongoing, $response_data_waiting, $response_data_last_finished);
                //robot1
                $response_data_last_finished_robot1 = array_slice($response_data_finished_robot1, 0, 3);
                $combined_data_robot1 = array_merge($response_data_ongoing_robot1, $response_data_waiting_robot1, $response_data_last_finished_robot1);
                $destination_robot1 = "";
                $next_task_robot1 = "";
                $queue_robot1 = count($response_data_waiting_robot1);        
                $statusnya_robot1 = "StandBy"; 
                foreach ($response_data_ongoing_robot1 as $data_robot1) {
                    if ($data_robot1["status"] === "running") {
                        $destination_robot1 = $data_robot1["task"];
                        $statusnya_robot1 = "Running";
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
                if ($destination_robot1 === "") {
                    $destination_robot1 = "No Destination Yet";
                }
                if ($next_task_robot1 === "") {
                    $next_task_robot1 = "No Upcoming Tasks";
                }
                if ($queue_robot1 === 0) {
                    $queue_robot1 = "No Remaining Queue";
                }



                echo json_encode([
                    "data" => $combined_data,
                    "data_robot1" => $combined_data_robot1,
                    "destination_robot1" => $destination_robot1,
                    "next_task_robot1" => $next_task_robot1,
                    "queue_robot1" => $queue_robot1,
                    "statusnya_robot1" => $statusnya_robot1,
                ]);
            }
        curl_close($ch);
    }
}