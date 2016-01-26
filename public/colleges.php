<?php

    require("../includes/config.php"); 
    
    if(empty($_GET["college"])) 
    {
        apologize("College was not found...");
    } 

    $rows = CS50::query("SELECT * FROM stats WHERE college = ?", $_GET["college"]);
    
    if(count($rows) != 1) {
        apologize("Error loading {$_GET["college"]}'s page");
    }
    $stats = $rows[0];
    $stats = array_slice($stats, 0);
    
   
    
    render("colleges_view.php", ["title" => $_GET["college"], "stats" => $stats, "name" => $name[$_GET["college"]], "sport_map" => $sport_map]);

?>
