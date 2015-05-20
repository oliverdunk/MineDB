<?php

//Creates item lookup (by id)
$app->get('/item/id/:id', function ($id) {
  require("utils.php");
  echo json_encode(findone("items", "id", intval($id)));
});

//Creates item lookup (list all)
$app->get('/item', function () {
  require("utils.php");
  echo json_encode(listall("items"));
});

//Creates item lookup (by material name)
$app->get('/item/name/:name', function ($name) {
  require("utils.php");
  echo json_encode(findone("items", "name", strtoupper($name)));
});

//Creates item lookup (by stacksize)
$app->get('/item/stacksize/:size', function ($size) {
  require("utils.php");
  echo json_encode(findmultiple("items", "stack", intval($size)));
});

//Creates item lookup (by durability)
$app->get('/item/durability/:durability', function ($durability) {
  require("utils.php");
  echo json_encode(findmultiple("items", "stack", intval($durability)));
});

//Creates item lookup (by transparent)
$app->get('/item/transparent/:transparent', function ($transparent) {
  require("utils.php");
  echo json_encode(findmultiple("items", "transparent", filter_var($transparent, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by gravity)
$app->get('/item/hasgravity/:gravity', function ($gravity) {
  require("utils.php");
  echo json_encode(findmultiple("items", "gravity", filter_var($gravity, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by block)
$app->get('/item/isblock/:block', function ($block) {
  require("utils.php");
  echo json_encode(findmultiple("items", "block", filter_var($block, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by burnable)
$app->get('/item/burnable/:burnable', function ($burnable) {
  require("utils.php");
  echo json_encode(findmultiple("items", "burnable", filter_var($burnable, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by edible)
$app->get('/item/edible/:edible', function ($edible) {
  require("utils.php");
  echo json_encode(findmultiple("items", "edible", filter_var($edible, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by record)
$app->get('/item/isrecord/:record', function ($record) {
  require("utils.php");
  echo json_encode(findmultiple("items", "record", filter_var($record, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by flammable)
$app->get('/item/flammable/:flammable', function ($flammable) {
  require("utils.php");
  echo json_encode(findmultiple("items", "flammable", filter_var($flammable, FILTER_VALIDATE_BOOLEAN)));
});

//Creates item lookup (by occluding)
$app->get('/item/occluding/:occluding', function ($occluding) {
  require("utils.php");
  echo json_encode(findmultiple("items", "occluding", filter_var($occluding, FILTER_VALIDATE_BOOLEAN)));
});

?>
