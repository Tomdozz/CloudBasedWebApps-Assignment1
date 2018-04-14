<link rel="stylesheet" type="text/css" href="background.css">
<?php
require("vendor/autoload.php");
use GuzzleHttp\Client;
// Skapa en HTTP-client
$client = new Client();
// Anropa URL: http://unicorns.idioti.se/
$res = $client->request('GET', 'http://unicorns.idioti.se/',
['headers' =>['Accept'=> 'application/json']]);

//echo $res->getBody();
$data = json_decode($res->getBody());
//$myJson = json_encode($data);
print_r($data);
//echo $data[0]->name;
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Assigmen 1</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Enhörningar</h1>
    <hr>
    <form class="" action="get.php" method="get">
      <div class="form-group">
        <input type="text" name="search" class="form-control">
      </div>
      <div class="form-group">
        <input type="submit" name="searchBtn" class="btn btn-success" value="Visa Enhörning!">
        <input type="submit" name="searchBtn" class="btn btn-primary" value="Visa alla enhörningar!">
      </div>
    </form>
      <ul class="unicorn-list">
        <?php
          for($i = 0; $i <= sizeof($data)-2; $i++){
            echo "<li>". $data[$i]->name . "</li>". "<hr>";
          }
        ?>
      </ul>
  </body>
</html>
