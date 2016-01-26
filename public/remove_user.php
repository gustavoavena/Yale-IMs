<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if(empty($_SESSION["id"]) || $_SESSION["master"] == 0) {
        apologize("You don't have the proper authorization to access this page...");
       
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && empty($_GET["user_id"]))
    {
        $users = CS50::query("SELECT * FROM users");
        
        render("remove_user_view.php", ["title" => "Input Scores", "users" => $users]);
    }
    else if($_SERVER["REQUEST_METHOD"] == "GET") {
        if(CS50::query("DELETE FROM users WHERE id = ?", $_GET["user_id"]) == 0) {
            apologize("Error deleting user from database");
        }
        
        render("user_removed.php", ["title" => "Success"]);
    }

    


?>

