<?php

    // configuration
    require("../includes/config.php"); 

    $rows = CS50::query("SELECT college, img_URL, total FROM stats");

    function mySort($array)
    {
    	$sorted = [];
    	$length = count($array);
    	
    	for($i = 0; $i < $length; $i++)
    	{
    		$highest = 0;
    	    
    	    for($j = 0; $j < $length; $j++)
    	    {
    	    	if($array[$j]["total"] > $array[$highest]["total"]) {
    	    		$highest = $j;
    	    	}
    	    }
			array_push($sorted, $array[$highest]);
			$array[$highest]["total"] = -1;
    	}
    	
    	return $sorted;
    }
    
    $sorted = mySort($rows);
    
    // apologize("Sorry about that!");
    render("home.php", ["title" => "Home", "sorted" => $sorted, "col_names" => $name]);

?>
