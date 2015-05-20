<?php

function findone($table, $key, $value){
  $start = time();
  $table = $_SESSION["mongo"]->mineDB->$table;
  $cursor = $table->find(array($key=>$value));
  $result = $cursor->getNext();
  $response = null;
  if($result != null){
    array_shift($result);
    $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => $value, 'response' => $result);
  }else{
    $response = array('status' => 'EMPTY_RESULT', 'time' => (time() - $start), 'query' => $value);
  }
  return $response;
}

function findmultiple($table, $key, $value){
  $start = time();
  $table = $_SESSION["mongo"]->mineDB->$table;
  $cursor = $table->find(array($key=>$value));
  if($cursor->count() != 0){
    $results = array();
    $size = 0;
    foreach($cursor as $result){
      $size++;
      array_shift($result);
      array_push($results, $result);
    }
    $return = array('size' => $size, 'values' => $results);
    $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => $value, 'response' => $return);
  }else{
    $response = array('status' => 'EMPTY_RESULT', 'time' => (time() - $start), 'query' => $value);
  }
  return $response;
}

function listall($table){
  $start = time();
  $table = $_SESSION["mongo"]->mineDB->$table;
  $cursor = $table->find();
  if($cursor->count() != 0){
    $results = array();
    $size = 0;
    foreach($cursor as $result){
      $size++;
      array_shift($result);
      array_push($results, $result);
    }
    $return = array('size' => $size, 'values' => $results);
    $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => "all", 'response' => $return);
  }else{
    $response = array('status' => 'EMPTY_RESULT', 'time' => (time() - $start), 'query' => "all");
  }
  return $response;
}

?>
