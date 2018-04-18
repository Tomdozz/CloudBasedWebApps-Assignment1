<?php
require_once 'vendor/autoload.php';
use \Monolog\Logger;
use \Monolog\Formatter\LineFormatter;
use \Monolog\Handler\StreamHandler;
$log = new Logger('files');
$formatter = new LineFormatter(null, null, false, true);
$debugHandler = new StreamHandler('unicorns.debug.INFO', Logger::DEBUG);
$debugHandler->setFormatter($formatter);
$log->pushHandler($debugHandler);
?>
