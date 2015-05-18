<?php
$mongoDetails = json_decode(file_get_contents("config.json"));
$user = $mongoDetails->username;
$pass = $mongoDetails->password;
$host = $mongoDetails->host;
$db = $mongoDetails->db;
$_SESSION["mongo"] = new MongoClient('mongodb://'.$user.':'.$pass.'@'.$host.'/'.$db);
?>
