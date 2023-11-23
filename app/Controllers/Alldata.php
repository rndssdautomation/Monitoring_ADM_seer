<?php

namespace App\Controllers;

class Alldata extends BaseController
{
    public function index()
    {
        return view('Basecore/all');
    }

    // LIST TASK
    public function get_api_list_task()
    {
        $config = config('Identity');
        $IP = $config->IP;
        $data = [
            "start" => "",
            "end" => "",
        ];
        $api_url ="http://" . $IP . ":8080/api/stat/agvTaskSuccessList";
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

    // DELIVERY FAILED
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

    // HISTORY TASK
    public function get_api_data_history_task()
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
    $kill = 1;
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
            $data_location_curent = $robot["area_resources_occupied"][0]["path_occupied"][0]["end_id"];
            $data_info_robot = $robot["vehicle_id"];
            $data_status_batterylevel = $robot["rbk_report"]["battery_level"] * 100 . "%";
            $data_status_charging = $robot["rbk_report"]["charging"];
            $data_status_emergency = $robot["rbk_report"]["emergency"];
            $data_status_last_station = $robot["rbk_report"]["last_station"];
            $data_status_blocked = $robot["rbk_report"]["blocked"];
            $data_status_low_battery = $robot["undispatchable_reason"]["low_battery"];
            $data_status_map = $robot["basic_info"]["current_map"];
            $data_status_group_agv = $robot["basic_info"]["current_group"];

            $curent_task = "No Task Yet";
            $curent_task_before = "No Upcoming Tasks";
            $remaining = "No Remaining Queue";
            $data_curent_task = "Robot Standby";

            $current_order = $robot["current_order"];
            if ($current_order != null) {
                $robot_target = $current_order["blocks"];
                $data_location_target = $robot_target[0]["location"];

                $kill = 1;
                $ch = curl_init();
                $api_url_task = "http://" . $IP . ":8080/api/queryWindTask";
                curl_setopt($ch, CURLOPT_URL, $api_url_task);
                curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type: application/json",]);
                curl_setopt($ch, CURLOPT_TIMEOUT, $kill);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $kill);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS,
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
                $response_task = curl_exec($ch);
                $dataapiqueue = json_decode($response_task, true);
                $queues = $dataapiqueue["data"]["pageList"];
                $response_data_ongoing = [];
                foreach ($queues as $queue) {
                    switch ($queue["status"]) {
                        case 1000:
                            $status = "running";
                            $response_data_ongoing[] = [
                                "task" => $queue["defLabel"],
                                "status" => $status,
                                "robot" => $queue["agvId"],
                            ];
                            break;
                        default:
                            $status = "unknown";
                            break;
                    }
                }

                if (!empty($response_data_ongoing)) {
                    $response_data_last_finished = array_slice($response_data_ongoing, -1);
                    $short_status = $response_data_last_finished[0]['status'];
                    $short_robot = $response_data_last_finished[0]['robot'];
                    if (strcasecmp($data_curent_task, $short_status) == 0 && $short_robot == $data_info_robot) {
                        $curent_task = $response_data_last_finished[0]['task'];
                    }
                } else {
                    $curent_task = "No Task Yet";
                    $curent_task_before = "No Upcoming Tasks";
                    $remaining = "No Remaining Queue";
                    $data_curent_task = "Robot Standby";
                }

                if (!empty($response_data_ongoing)) {
                    $response_data_before_last = array_slice($response_data_ongoing, 0, -1);
                    $response_data_before = array_slice($response_data_before_last, -1)[0];
                    $short_status_before = $response_data_before['status'];
                    $short_robot_before = $response_data_before['robot'];
                    if (strcasecmp($data_curent_task, $short_status_before) == 0 && $short_robot_before == $data_info_robot) {
                        $curent_task_before = $response_data_before['task'];
                    }
                } else {
                    $curent_task = "No Task Yet";
                    $curent_task_before = "No Upcoming Tasks";
                    $remaining = "No Remaining Queue";
                    $data_curent_task = "Robot Standby";
                }

                if (!empty($response_data_ongoing)) {
                    $length = count($response_data_ongoing);
                    $remaining = $length - 1;
                } else {
                    $curent_task = "No Task Yet";
                    $curent_task_before = "No Upcoming Tasks";
                    $remaining = "No Remaining Queue";
                    $data_curent_task = "Robot Standby";
                }
            } else {
                $data_location_target = "No Destinantion Yet";
            }

            $robot_data[] = [
                "location_curent" => $data_location_curent,
                "location_target" => $data_location_target,
                "info_robot" => $data_info_robot,
                "status_batterylevel" => $data_status_batterylevel,
                "status_charging" => $data_status_charging,
                "status_emergency" => $data_status_emergency,
                "status_blocked" => $data_status_blocked,
                "status_last_station" => $data_status_last_station,
                "status_low_battery" => $data_status_low_battery,
                "status_group_agv" => $data_status_group_agv,
                "status_status_map" => $data_status_map,
                "curent_task" => $curent_task,
                "curent_task_before" => $curent_task_before,
                "remaining" => $remaining,
                "data_curent_task" => $data_curent_task,
            ];
        }

        echo json_encode(["data" => $robot_data]);
    }
   
}
      

    // QUEUE ROBOT 1
    public function get_api_data_queue_robot1()
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
                            $response_data_ongoing[] = [
                                "task" => $queue["defLabel"],
                                "status" => $status,
                                "robot" => $queue["agvId"],
                                "end" => $queue["endedOn"],
                                "creat" => $queue["createdOn"],
                            ];
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

            // Ambil maksimal 3 item finished
            $response_data_last_finished = array_slice($response_data_finished, 0, 3);

            // Gabungkan data ongoing dengan data finished
            $combined_data = array_merge($response_data_ongoing, $response_data_last_finished);

            echo json_encode([
                "data" => $combined_data,
            ]);
        }

        curl_close($ch);
    }


    // QUEUE ROBOT 2
    public function get_api_data_queue_robot2()
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
                            $response_data_ongoing[] = [
                                "task" => $queue["defLabel"],
                                "status" => $status,
                                "robot" => $queue["agvId"],
                                "end" => $queue["endedOn"],
                                "creat" => $queue["createdOn"],
                            ];
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
            $combined_data = array_merge($response_data_ongoing, $response_data_last_finished);

            echo json_encode([
                "data" => $combined_data,
            ]);
        }

        curl_close($ch);
    }
}