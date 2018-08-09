<?php

    class Contact {
        public $name;
        public $phone;
        public $address;
        public $image_path;
    }

    $hendrix = new Contact();
    $hendrix->name = "Jimi Hendrix";
    $hendrix->phone = "503-826-9371";
    $hendrix->address = "208 SW 5th st. Portland, OR 97204";
    $hendrix->image_path = "https://i.pinimg.com/736x/c5/c3/16/c5c316a7b8af4bb538488c468a89c0de--jimi-hendricks-my-happy-place.jpg";

    $elvis = new Contact();
    $elvis->name = "Elvis Presley";
    $elvis->phone = "617-356-3571";
    $elvis->address = "Graceland";
    $elvis->image_path = "https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/3-elvis-presley-everett.jpg";

    $einstein = new Contact();
    $einstein->name = "Albert Einstein";
    $einstein->phone = "415-738-4935";
    $einstein->address = "3718 MLK blvd. Oakland, CA 94609";
    $einstein->image_path = "http://www.lajme.al/wp-content/uploads/2016/11/Albert_Einstein_Full_Color_by_Pyrlo1.jpg";

    $address_book = array($hendrix, $elvis, $einstein);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <meta charset="utf-8">
    <title>Address Book</title>
  </head>
  <body>
    <div class="container">
      <h1>Address Book</h1>
      <ul>
          <?php
              foreach ($address_book as $contact) {
                  echo "<li class='name-styles'>";
                  echo $contact->name;
                  echo "</li>";
                  echo "<ul>";
                  echo "<li> <img src='$contact->image_path'> </li>";
                  echo "<li> $contact->phone </li>";
                  echo "<li> $contact->address </li>";
                  echo "</ul>";
              }
          ?>
      </ul>
    </div>
  </body>
</html>
