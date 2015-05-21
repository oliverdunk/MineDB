<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();
$_SESSION['app'] = $app;
$app->contentType('application/json');

require("modules/mongo.php");

//Creates simple 404 error JSON response
$app->notFound(function () {
  $start = time();
  $response = array('status' => 'METHOD_NOT_FOUND', 'time' => (time() - $start));
  echo json_encode($response);
});

//Creates root success JSON response
$app->get('/', function () {
  $start = time();
  $response = array('status' => 'SUCCESS', 'time' => (time() - $start));
  echo json_encode($response);
});

require("modules/items.php");
require("modules/versions.php");
require("modules/easter.php");

//Launches app
$app->run();
?>
