<?php

namespace App\Controllers;

class Robottask1 extends BaseController
{
    public function queue_task()
    {
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        echo "data: " . json_encode($data) . "\n\n";
        ob_flush();
        flush();
    }
}