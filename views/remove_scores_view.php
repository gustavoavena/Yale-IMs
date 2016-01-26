<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Remove Scores</h1>
                <p align="center">The scores for each match follow the guidelines stated in the <a href="http://www.yale.edu/intramurals/Rules/Tyng%20Cup%20Point%20System.pdf"><u><b>Yale Intramurals Regulations</u></b></a>.</p>
                <p align="center">The values represent the points that each college should receive in the tournment for that specific match (e.g. in a soccer match, the winner
                receives X points).</p>
                <p align="center">The scores for a match can be removed by clicking the match number on the left column.</p>
            </div>
        </div>
    </div>
</div>

<div>
    <table class="table table-bordered table-condensed table-hover">
        <thead>
            <tr>
                <th>Match Number</th>
                <th>Sport</th>
                <th>Date (YYYY-MM-DD)</th>
                
                <th>BK</th>
                <th>BR</th>
                <th>CC</th>
                <th>DC</th>
                <th>ES</th>
                <th>JE</th>
                <th>MC</th>
                <th>PC</th>
                <th>SM</th>
                <th>SY</th>
                <th>TC</th>
                <th>TD</th>
            </tr>
        </thead>
        
        <!--<form action="colleges.php" method="get">-->
        
        <tbody id="tablebody">
        
        <!--print the college's shields in a table in decrescent order according to their total points-->
        <?php $i = 1;?>
        <?php foreach($matches as $row)
        {
                print("<tr><td><a onclick=\"return removeScoresCheck(this);\"href=remove_scores.php?match_id=" . $row["id"] . " >Match #" . $i++ . "</a></td><td>" . $sport_map[$row["sport"]] . "</td><td>" . $row["date"] ."</td>");
            
                print("<td>{$row["BK"]}</td><td>{$row["BR"]}</td><td>{$row["CC"]}</td><td>{$row["DC"]}</td><td>{$row["ES"]}</td><td>{$row["JE"]}</td>");
                print("<td>{$row["MC"]}</td><td>{$row["PC"]}</td><td>{$row["SM"]}</td><td>{$row["SY"]}</td><td>{$row["TC"]}</td><td>{$row["TD"]}</td>");
                print("</tr>");
        }
        ?>
        
    </table>
</div>
