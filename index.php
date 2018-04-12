<link rel="stylesheet" type="text/css" href="background.css">
<?php
  require 'vendor/autoload.php';

  use Monolog\Logger;
  use Monolog\Handler\StreamHandler;

  $log = new Logger('Laboration 1');
  $log->pushHandler(new StreamHandler('greetings.log', Logger::INFO));
  $log->info("Emil är ful");

  $name = $_GET['name'];
  $log->info($name);
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
        <input type="text" name="search">
      </div>
      <div class="form-group">
        <input type="submit" name="searchBtn" class="btn btn-succsess" value="Visa Enhörning!">
      </div>
    </form>

      <input type="submit" name="searchBtn" class="btn" value="Visa alla enhörningar!">

  </body>
</html>
