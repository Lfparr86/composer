<?php

include __DIR__ . "/vendor/autoload.php";
use Monolog\Handler\StreamHandler;
use Monolog\Logger;


$log = new Logger("MiLogger");
$log->pushHandler(new StreamHandler("log/milog.log", Logger::DEBUG));

$log->debug("esto es un bug");
?>