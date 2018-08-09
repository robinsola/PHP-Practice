<?php
    $person1_name = $_GET["person1_name"];
    $person1_address = $_GET["person1_address"];
    $person2_name = $_GET["person2_name"];
    $person2_address = $_GET["person2_address"];
    $person3_name = $_GET["person3_name"];
    $person3_address = $_GET["person3_address"];

    $address_book[$person1_name] = $person1_address;
    $address_book[$person2_name] = $person2_address;
    $address_book[$person3_name] = $person3_address;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <meta charset="utf-8">
    <title>Address Book</title>
  </head>
  <body>
    <div class="container">
      <h1>Address Book</h1>
      <ul>
        <?php
            foreach ($address_book as $name => $address) {
                if ($name && $address) {
                  echo "<li>" . "$name: $address" . "</li>";
                }
            }
        ?>
      </ul>
    </div>
  </body>
</html>
