<?php

class Log
{
    public $filename;

    public function logMessage($logLevel, $message)
    {
        $this->nameFile();
        $handle = fopen($this->filename, "a");
        $messageDisplayed = date("Y-m-d TH:i:s") . $logLevel . $message;
        fwrite($handle, $messageDisplayed . PHP_EOL);
        fclose($handle);
    }

    public function info($message)
    {
        $this->logMessage(" Info: ", $message);
    }

    public function error($message)
    {
        $this->logMessage(" Error: ", $message);
    }

    public function nameFile()
    {
        $todayDate = date('Y-m-d');
        $this->filename = 'log-{$todayDate}.log';
    }
}

?>