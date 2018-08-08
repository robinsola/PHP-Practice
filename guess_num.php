<?php
    $guess = $_GET["user_guess"];
    $favorite_num = rand(1, 20);
    $message = checkGuess($guess, $favorite_num);

    function checkGuess($guessed_num, $winning_num) {
        if ($guessed_num == $winning_num) {
            return "Congrats! You guessed it!";
        } elseif ($guessed_num < $winning_num) {
            return "Too low! Sorry, you lose!";
        } else {
            return "Too high! Sorry, you lose!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Guess My Number</title>
  </head>
  <body>
    <div class="container">
      <h4>Your number: <?php echo $guess ?></h4>
      <h4>Favorite number: <?php echo $favorite_num ?></h4>
      <h1><?php echo $message ?></h1>
    </div>
  </body>
</html>
