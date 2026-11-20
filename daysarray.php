<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>PHP Variables, Arrays and Operators</h1>
  <?php
  $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
  echo "<p>The days of the week in English are: <p>";
  for ($i = 0; $i < 6; $i++) {
    echo "$days[$i], ";
  }
  echo "$days[6].";

  $days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

  echo "<p>The days of the week in French are: <p>";
  for ($i = 0; $i < 6; $i++) {
    echo "$days[$i], ";
  }
  echo "$days[6].";
  ?>
</body>

</html>