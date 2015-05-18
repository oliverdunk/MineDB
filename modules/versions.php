<?php
//Creates version lookup (by id)
$app->get('/version/id/:id', function ($id) {
    $start = time();
    $versions = $_SESSION["mongo"]->mineDB->versions;
    $cursor = $versions->find(array('name'=>$id));
    $result = $cursor->getNext();
    $response = null;
    if($result != null){
      $generated = array('name' => $result['name'], 'type' => $result['type'], 'date' => $result['date'], 'description' => $result['description']);
      $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => $id, 'response' => $generated);
    }else $response = array('status' => 'EMPTY_RESULT', 'time' => (time() - $start), 'query' => $name);
    echo json_encode($response);
});

//Creates version lookup (by type)
$app->get('/version/type/:type', function ($type) {
    $start = time();
    $versions = $_SESSION["mongo"]->mineDB->versions;
    $cursor = $versions->find(array('type'=>strtoupper($type)));
    if($cursor->count() != 0){
      $versionlist = array();
      foreach($cursor as $result){
        $generated = array('name' => $result['name'], 'type' => $result['type'], 'date' => $result['date'], 'description' => $result['description']);
        array_push($versionlist, $generated);
      }
      $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => $type, 'response' => $versionlist);
    }else $response = array('status' => 'EMPTY_RESULT', 'time' => (time() - $start), 'query' => $type);
    echo json_encode($response);
});

//Creates version lookup (by date)
$app->get('/version/date/:date', function ($date) {
    $start = time();
    $versions = $_SESSION["mongo"]->mineDB->versions;
    $cursor = $versions->find(array('date'=>strtoupper($date)));
    if($cursor->count() != 0){
      $versionlist = array();
      foreach($cursor as $result){
        $generated = array('name' => $result['name'], 'type' => $result['type'], 'date' => $result['date'], 'description' => $result['description']);
        array_push($versionlist, $generated);
      }
      $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => $date, 'response' => $versionlist);
    }else $response = array('status' => 'EMPTY_RESULT', 'time' => (time() - $start), 'query' => $date);
    echo json_encode($response);
});


?>
