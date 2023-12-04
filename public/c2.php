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
    $destination = "-";
    }
    if ($next_task === "") {
    $next_task = "-";
    }
    if ($queue === 0) {
    $queue = "-";
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