<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["username"])) {
            apologize("You must provide username");
        }
        else if(empty($_POST["password"])) {
            apologize("You must provide password");
        }
        else if(empty($_POST["confirmation"])) {
            apologize("You must provide password confirmation");
        }
        else if(empty($_POST["name"])) {
            apologize("You must provide a full name");
        }
        else if(empty($_POST["college"])) {
            apologize("You must provide a residential college");
        }
        else if($_POST["password"] !== $_POST["confirmation"]) {
            apologize("Password doesn't match confirmation");
        }
       
    }
    
    if(CS50::query("INSERT INTO users (username, hash, name, college, master) VALUES(?, ?, ?, ?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT), $_POST["name"], $_POST["college"], $_POST["master"]) == false ) {
        apologize("Error inserting new user");
    }
    else {
     
        redirect("/");
    }
    
?>

