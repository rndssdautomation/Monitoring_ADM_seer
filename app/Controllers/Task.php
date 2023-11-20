<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function task()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        $ip_address = "192.168.5.204";
        $kill = 5;
        $ch = curl_init();
        $api_url = "http://" . $ip_address . ":8080/api/queryWindTask";
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json",
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $kill);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch,CURLOPT_POSTFIELDS,
        json_encode([
                "currentPage" => "",
                "pageSize" => "500",
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
            $task_raw = json_decode($response, true);
            $tasks = $task_raw["data"]["pageList"];
            
            $data = [];
            foreach ($tasks as $task) {
                $status = "";
                    if ($task['status'] === 1000 ){
                        $status = "Running";
                    } elseif ($task['status'] === 1001 ){
                        $status = "Terminate";
                    }
                    elseif ($task['status'] === 1002 ){
                        $status = "Pause";
                    }
                    elseif ($task['status'] === 1003 ){
                        $status = "Finished";
                    }
                    elseif ($task['status'] === 1004 ){
                        $status = "Exceptional End";
                    }
                    elseif ($task['status'] === 1005 ){
                        $status = "Restart exception";
                    }
                    elseif ($task['status'] === 1006 ){
                        $status = "Abnormal Interruption";
                    }
                    elseif ($task['status'] === 1007 ){
                        $status = "End Manually";
                    }
                $data[] = [
                    
                    'status' => $status,
                    'agvId' => $task['agvId'],
                    'defLabel' => $task['defLabel'],
                    'createdOn' => $task['createdOn'],
                    'endedOn' => $task['endedOn'],
                    'firstExecutorTime' => $task['firstExecutorTime'],
                    'executorTime' => $task['executorTime'],
                ];
            }
        echo "data: " . json_encode($data) . "\n\n";
        ob_flush();
        flush();

        curl_close($ch);
        }
    }
}