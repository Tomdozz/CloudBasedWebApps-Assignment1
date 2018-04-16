<?php
function getSpecific($id){
  require("vendor/autoload.php");
  use GuzzleHttp\Client;
  $client1 = new Client();
  $specific = $client1->request('GET', 'http://unicorns.idioti.se/',
  ['headers' =>['Accept'=> 'application/json']]);
  echo "in i funktion" . $id;
  print_r($specific);
}
?>
