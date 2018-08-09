<?php
    $number = $_GET["number"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>PHP Ping-Pong</title>
  </head>
  <body>
    <ul>
    <?php
      for ($i=0; $i<=$number; $i++) {
        if ($i == 0) {
          echo "<li>" . "0" . "</li>";
        } elseif ($i % 3 == 0 && $i % 5 == 0) {
          echo "<li>" . "PING-PONG" . "</li>";
        } elseif ($i % 5 == 0) {
          echo "<li>" . "PONG" . "</li>";
        } elseif ($i % 3 == 0) {
          echo "<li>" . "PING" . "</li>";
        } else {
          echo "<li>" . $i . "</li>";
        }
      }
    ?>
  </ul>
  </body>
</html>
