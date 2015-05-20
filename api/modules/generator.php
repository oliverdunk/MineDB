<?php
$app->get('/versiongen', function () {
    $db = $_SESSION["mongo"]->mineDB;
    $version_data = json_decode(file_get_contents("http://s3.amazonaws.com/Minecraft.Download/versions/versions.json"));
    $versions = $version_data->versions;
    foreach($versions as $version){
      $date = preg_split("/T/", $version->time)[0];
      $date = $date[8].$date[9].'-'.$date[5].$date[6].'-'.$date[2].$date[3];
      $document = array('name' => $version->id, 'type' => strtoupper($version->type), 'date' => $date);
      $db->versions->insert($document);
      echo json_encode("Success");
    }
});
$app->get('/addversion/:type/:id/:date', function ($type, $id, $date) {
    $db = $_SESSION["mongo"]->mineDB;
    $document = array('name' => $id, 'type' => strtoupper($type), 'date' => $date);
    echo json_encode($document);
    $db->versions->insert($document);
});
?>
