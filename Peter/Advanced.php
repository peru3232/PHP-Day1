<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Day 1 Advanced</title>
    <link href="styles/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
    //Step 1:
    $aa_characters = ["cartoon" => "Donald Duck", "anime" => "Om nom", "game" => "Nameless"];
    echo "A cartoon hero was: ".$aa_characters['cartoon'];
    echo "<br>The name of a game hero was: ".$aa_characters["game"]."<br>";

    //Step 2 (Expand to multidimensional):
    $obj_characters = array(
        "cartoon" => array(
            "name" => "Donald Duck",
            "kind" => "duck"
        ),
        "anime" => array(
            "name" => "Om nom",
            "kind" => "phantasy"
        ),
        "game" => array(
            "name" => "Nameless",
            "kind" => "human"
        )
        );

    echo "<br><h3>Discription of the choosen character: His name was ".$obj_characters["cartoon"]["name"]." and he is a ".$obj_characters["cartoon"]["kind"].".</h3>";

?>
</body>
</html>