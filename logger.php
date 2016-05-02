<?php

function logMessage($logLevel, $message)
{
    $currentDate = date('Y-m-d');
    $messageDisplayed = date('Y-m-d TH:i:s') . $logLevel . $message;
    $filename = 'log-{$currentDate}.log';
    $handle = fopen($filename, 'a');
    fwrite($handle, $messageDisplayed . PHP_EOL);
    fclose($handle);
}
function logInfo($message)
{
    logMessage(" INFO", $message);
}
function logError($message)
{
    logMessage(" ERROR", $message);
}
logInfo(" This is an info message.");
logError(" This is an error message.");

