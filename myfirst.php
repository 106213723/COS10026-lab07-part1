<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="description" content="PHP variables, arrays and if statements">
  <meta name="keywords" content="PHP, arrays, variables">
  <meta name="author" content="Abdullah Al Shafayet Sporsho">
  <title>My First PHP</title>
</head>
<body>
  <h1>PHP Variables, Arrays and If Statements</h1>
  <?php
    $marks = array(85, 85, 95);
    $marks[1] = 90;
    $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;
    if ($ave >= 50) {
      $status = "PASSED";
    } else {
      $status = "FAILED";
    }
    echo "<p>The average score is $ave. You $status.</p>";
  ?>
</body>
</html>