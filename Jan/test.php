<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
       <?php
       $name = "Jan Fiedler";
       $age = 24;
       $job_title = "without a job.";
       $players = array("Mark","John","George","Lisa");

       echo"<h1>$name</h1><br>"; 

       echo "Hi, my name is " . $name . ", I am " . $age . " years old and currently " .$job_title . "<br>";
       
       echo "The third player in the team is " .$players[2] . "<br>";

       $pokemon = array(
           "Groudon" => array
           (
               "Type" => "Ground",
               "Weakness" => "Water",
               "Shiny" => "Gold"
           ),
           "Zacian" => array
           (
               "Type" => "Fairy//Steel",
               "Weakness" => "Ground",
               "Shiny" => "Blue" 
           ),
           "Grimmsnarl" => array
           (
               "Type" => "Dark//Fairy",
               "Weakness" => "Steel",
               "Shiny" => "White"
           ) 

        );
        echo "Groudons type: ";
        echo $pokemon["Groudon"]["Type"] . "<br/>" ;
        echo "Zacians shiny is ";
        echo $pokemon["Zacian"]["Shiny"] . "<br/>";
        echo "Grimmsnarls weakness: ";
        echo $pokemon["Grimmsnarl"]["Weakness"] . "<br/>";
       ?>

    
   </body>
</html>