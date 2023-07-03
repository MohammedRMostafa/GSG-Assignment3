<?php

namespace Log;

trait Log
{
    static function add_log($msg)
    {
        date_default_timezone_set("Asia/Gaza");
        $handle = fopen(__DIR__ . "\log.txt", "a");
        fwrite($handle, date("M-d h:i:s") . " $msg\r\n");
        fclose($handle);
    }
}
