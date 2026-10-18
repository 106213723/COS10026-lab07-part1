<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="Rohirrim tour booking confirmation">
  <meta name="keywords" content="PHP, form, POST">
  <meta name="author" content="Abdullah Al Shafayet Sporsho">
  <title>Booking Confirmation</title>
</head>
<body>
  <h1>Rohirrim Tour Booking Confirmation</h1>
  <?php
    function field($name) {
      if (isset($_POST[$name])) {
        return htmlspecialchars(trim($_POST[$name]));
      }
      return "";
    }

    $firstname = field("firstname");
    $lastname = field("lastname");
    $age = field("age");
    $species = field("species");
    $food = field("food");
    $bookday = field("bookday");
    $partysize = field("partysize");

    $tours = array();
    if (isset($_POST["accom"])) {
      $tours[] = "Accommodation";
    }
    if (isset($_POST["4day"])) {
      $tours[] = "4 Day Tour";
    }
    if (isset($_POST["10day"])) {
      $tours[] = "10 Day Tour";
    }

    if ($firstname == "" || $lastname == "") {
      echo "<p>Please enter your first name and last name on the <a href=\"register.html\">booking form</a>.</p>";
    } else {
      echo "<p>Thank you, $firstname $lastname. Your booking details are below.</p>";
      echo "<ul>";
      echo "<li>Age: $age</li>";
      echo "<li>Species: $species</li>";
      echo "<li>Booking: " . (count($tours) > 0 ? implode(", ", $tours) : "None selected") . "</li>";
      echo "<li>Menu preference: $food</li>";
      echo "<li>Date: $bookday</li>";
      echo "<li>Number of travellers: $partysize</li>";
      echo "</ul>";
    }
  ?>
</body>
</html>
