<?php

//Creates version lookup (by id)
$app->get('/version/id/:id', function ($id) {
  require("utils.php");
  echo json_encode(findone("versions", "name", $id));
});

//Creates version lookup (by type)
$app->get('/version/type/:type', function ($type) {
  require("utils.php");
  echo json_encode(findmultiple("versions", "type", strtoupper($type)));
});

//Creates version lookup (list all)
$app->get('/version', function () {
  require("utils.php");
  echo json_encode(listall("versions"));
});

//Creates version lookup (by date)
$app->get('/version/date/:date', function ($date) {
  require("utils.php");
  echo json_encode(findmultiple("versions", "date", strtoupper($date)));
});

?>
