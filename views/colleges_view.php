<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="/img/colleges_pics/<?= htmlspecialchars($title)?>.jpg" class="center-block img-responsive" style="width:800px;height:500px;">
        <h1><?= htmlspecialchars($name) ?></h1>
        <p>
            <?php require("../views/colleges_description/{$title}.php");?>
        </p>
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-condensed table-hover">
          <thead>
            <tr>
              <th style="text-align:center">Sport</th>
              <th style="text-align:center">Score</th>
            </tr>
          </thead>
          
          <tbody>
            <?php 
              print("<tr><td align=center> Total </td><td align=center> " . $stats["total"]. "</td></tr>" );
      
              foreach(array_slice($stats, 4) as $key => $value)
              {
                  print("<tr><td align=center>" . $sport_map[$key] . "</td><td align=center> " . $value. "</td></tr>" );
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<div align="center" id="chart_div">
    
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
        var stats = <?php echo json_encode($stats, JSON_PRETTY_PRINT) ?>;
        var sport_map = <?php echo json_encode($sport_map, JSON_PRETTY_PRINT) ?>;
        console.log(stats);
        delete stats["total"];
        
        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sport');
        data.addColumn('number', 'Score');
        for(i in stats) {
            console.log(i, stats[i]);
            data.addRows([[sport_map[i], parseInt(stats[i])]]);
        }
       

        // Set chart options
        var options = {'title':'Score percentage for each Sport',
                       'titleTextStyle':{'fontName':'arial'},
                       'width':"100%",
                       'height':"100%",
                       'is3D' : true,
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

    <!--Div that will hold the pie chart-->
    <!--<div id="chart_div"></div>-->
</div>