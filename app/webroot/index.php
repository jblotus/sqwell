<?php
/**
 * Load up slim
 */
require '../../vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function () {
    echo "Welcome to sqwell";
});

$app->run();