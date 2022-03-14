<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Day 1 Basics</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    // Exercise 1
    $str_firstName = "Peter";
    $str_lastName = "Wochinger";
    echo "<h1>$str_firstName $str_lastName</h1>";

    // Exercise 2
    $int_age = 46;
    $str_jobTitle = "Freelancer";
    echo "<p>Hi, my name is $str_firstName, I am $int_age years old and i work as a $str_jobTitle.</p>";

    // Exercise 3
    echo "<br>";
    $a_players = ["Mark","John","Georg","Lisa"];
    echo "<p>The third player in the team is $a_players[2]</p>";
?>
</body>
</html>