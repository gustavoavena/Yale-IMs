<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("input_scores_form.php", ["title" => "Input Scores", "sport_map" => $sport_map]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(empty($_POST["sport"])) {
            apologize("You must provide a sport");
        }
        else if(empty($_POST["month"]) || empty($_POST["day"]) || empty($_POST["year"])) {
            apologize("You must provide a valid date");
        }
        
        $date = $_POST["year"] . "-" . $_POST["month"] . "-" . $_POST["day"];
        
        $college_names = "BK, BR, CC, DC, ES, JE, MC, PC, SM, SY, TC, TD";
        
        $query = "INSERT INTO matches (sport, date, BK, BR, CC, DC, ES, JE, MC, PC, SM, SY, TC, TD) VALUES( ?, ? ";
        

        foreach($_POST as $key => $value) {
            if(strpos($college_names, $key) !== false) {
                if(empty($value)) {
                    $value = 0;
                }
                else if(ctype_digit($value) ==  false) {
                    apologize("Please enter valid scores.");
                }
                else
                {
                    if(intval($value) < 0) {
                        apologize("Please enter valid scores.");
                    }
                }
                $query = $query . ", " . strval($value);
                CS50::query("UPDATE stats SET total = total + ?,". $_POST["sport"] .  " = " . $_POST["sport"] .  " + ? WHERE college = ?", $value, $value, $key);
            }
            
        }
        
        $query = $query . ")";
        
        if(CS50::query($query, $_POST["sport"], $date) == false ) {
            apologize("Error inputting scores!");
        }
        else{
            redirect("/");
        }
    }
?>

