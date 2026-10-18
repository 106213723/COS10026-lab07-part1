<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="PHP arrays: days of the week">
  <meta name="keywords" content="PHP, arrays">
  <meta name="author" content="Abdullah Al Shafayet Sporsho">
  <title>Days of the Week</title>
</head>
<body>
  <h1>Days of the Week</h1>
  <?php
    $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are: ";
    for ($i = 0; $i < count($days); $i++) {
      echo $days[$i];
      if ($i < count($days) - 1) {
        echo ", ";
      }
    }
    echo ".</p>";
  ?>
</body>
</html>
