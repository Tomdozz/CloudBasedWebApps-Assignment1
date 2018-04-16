<?php
require("vendor/autoload.php");
use GuzzleHttp\Client;
$client = new Client();
$res = $client->request('GET', 'http://unicorns.idioti.se/' . $_GET["search"],
['headers' =>['Accept'=> 'application/json']]);

$data = json_decode($res->getBody());
//print_r($data);
?>

<!DOCTYPE html>
<html>
  <head>
      <title>Assigmen 1</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Enhörningar</h1>
    <hr>
    <form class="" action="specific.php" method="get">
      <div class="form-group">
        <h4>Id på enhörning<h5>
        <input type="text" name="search" class="form-control">
        <input type="submit" name="searchBtn" class="btn btn-success" value="Visa Enhörning!">
      </div>
    </form>
    <form class="" action="index.php" method="post">
      <div class="form-group">
        <input type="submit" name="searchBtn" class="btn btn-primary" value="Visa alla enhörningar!">
      </div>
    </form>
    <div>
      <?php
        echo "<h2>". $data->name . "</h2>"
          . "<i>" . $data->spottedWhen . "</i>"
          . "<p>" . $data->description . "<p>"
          . "<img  src=" . $data->image . ">";
      ?>
      </div>
  </body>
</html>
