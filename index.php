<?php
require("vendor/autoload.php");
use GuzzleHttp\Client;
require("log.php");
require("bluePrint.php");
$client = new Client();
$res = $client->request('GET', 'http://unicorns.idioti.se/',
['headers' =>['Accept'=> 'application/json']]);
$data = json_decode($res->getBody());
$log->debug('Requested info about all unicorns');
//print_r($data);
?>

<!DOCTYPE html>
<html>
  <body>
      <ul class="unicorn-list">
        <?php
          for($i = 0; $i <= sizeof($data); $i++){
            if ($data[$i]->name == "") {
              break;
            }
            echo "<li><form action='specific.php'method='get'>"
            . $data[$i]->name .
            "<button type = 'submit' name='search' class='btn-info'
            value='". $data[$i]->id
            ."'>Läs mer!</button></form><hr></li>";
          }
        ?>
      </ul>
  </body>
</html>
