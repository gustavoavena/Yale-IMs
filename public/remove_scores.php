<?php

    // configuration
    require("../includes/config.php");
    
    // if user reached page via GET (as by clicking a link or via redirect)
    if(empty($_SESSION["id"])) {
        apologize("You don't have the proper authorization to access this page...");
       
    }
   
  
    
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && empty($_GET["match_id"]))
    {
        $matches = CS50::query("SELECT * FROM matches");
        
        render("remove_scores_view.php", ["title" => "Remove Scores", "matches" => $matches, "sport_map" => $sport_map]);
    }
    else if($_SERVER["REQUEST_METHOD"] == "GET") {
        $remove = CS50::query("SELECT * FROM matches WHERE id = ?", $_GET["match_id"]);
        if($remove == false) {
            apologize("No match found.");
        }
        
        $college_names = "BK, BR, CC, DC, ES, JE, MC, PC, SM, SY, TC, TD";
        
        foreach($remove[0] as $key => $value) {
            if(strpos($college_names, $key) !== false) {
                CS50::query("UPDATE stats SET total = total - ?,". $remove[0]["sport"] .  " = " . $remove[0]["sport"] .  " - ? WHERE college = ?", $value, $value, $key);
            }
            
        }   
        if(CS50::query("DELETE FROM matches WHERE id = ?", $_GET["match_id"]) == false) {
            apologize("Error deleting match from database");
        }
        render("score_removed.php", ["title" => "Success"]);
    }



?>

