<?php

ini_set('display_errors', '1');

require_once __DIR__ . '/../vendor/autoload.php';

$config = include __DIR__ . '/../config/main.php';

$app = Aigletter\Framework\Application::getApp($config);
try {
    $app->run();
} catch (Exception $exception) {
    if ($exception->getCode() < 500) {
        echo 'CATHCED: ' . $exception->getMessage();
    } else {
        trigger_error("500", E_USER_ERROR);
    }
}


