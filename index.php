<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$app->contentType('application/json');

require("modules/mongo.php");

//Creates simple 404 error JSON response
$app->notFound(function () {
  $start = time();
  $response = array('status' => 'METHOD_NOT_FOUND', 'time' => (time() - $start));
  echo json_encode($response);
});

//Creates root 403 error JSON response
$app->get('/', function () {
    $start = time();
    $response = array('status' => 'SUCCESS', 'time' => (time() - $start));
    echo json_encode($response);
});

require("modules/items.php");
require("modules/versions.php");

//Launches app
$app->run();
?>
