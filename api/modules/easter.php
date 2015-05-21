<?php
$app->get('/dib', function () {
  $start = time();
  $dib = array('weight' => '500KG', 'bamboo_consumption' => '42', 'eye_color' => 'blue', 'blood_type' => 'always_negative', 'fur_softeness' => 'Great Mate, 8/8');
  $response = array('status' => 'SUCCESS', 'time' => (time() - $start), 'query' => 'dib', 'response' => $dib);
  echo json_encode($response);
});
?>
