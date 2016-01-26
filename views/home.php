
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="/img/Screen Shot 2015-12-08 at 11.34.19 PM.png" class="img-responsive">
      </div>
      <div class="col-md-6">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h1>The Yale Intramurals</h1>
        <h3>The competition for the Tyng Cup</h3>
        <p>The Tyng Cup, a gift from George Addee, Sheldon Rose and Malcolm 
        Aldrich is annually awarded for overall excellence to the college 
        accumulating the greatest number of points. Presented in 1933 and 
        awarded first to the Wright Group, it continues to spawn competitive 
        rivalries among the colleges and encourage participation. It is the 
        most coveted of all intramural awards.</p>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12 text-center">
        <hr>
      </div>

<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">The Podium</h1>
        <p class="text-center">The top 3 colleges in the competition</p>
      </div>
    </div>
    <div class="row">
      
          <!--print the symbols, the names and the positions of the 3 colleges with the most points in the competition-->
          <?php 
                for($i = 0; $i < 3; $i++)
                {
                    print("<div class=" . "col-md-4" . "><img src=" . $sorted[$i]["img_URL"] . " style=" . "width:250px;height:250px;" . " class=" . "center-block img-circle img-responsive" . ">". "<h3 class=" . "text-center" . ">". $col_names[$sorted[$i]["college"]] . "</h3>". "<p class=" . "text-center" . ">". "#" . ($i + 1) . "</p></div>");
                }
            
          ?>
    </div>
  </div>
</div>

 <div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">The Ranking</h1>
        <p class="text-center">Click on your college's symbol to go to their page</p>
      </div>
    </div>
  </div>
<div class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-condensed table-hover">
          <thead>
            <tr>
              <th style="text-align:center">Ranking</th>
              <th style="text-align:center">College</th>
              <th style="text-align:center">Total Score</th>
            </tr>
          </thead>
          <tbody align="center">
           
           <!--print the symbol and the total score of each college in the table from the first-->
           <?php
             $i = 1;
             foreach($sorted as $col)
              {
                print("<tr><td><a>#" . $i . "</a></td><td><a href=colleges.php?college=" . $col["college"] . " ></><img src=" . $col["img_URL"] . " style=" . "width:70px;height:70px;" . "id=" . "button></a></td><td align=\"center\">" . $col["total"] . "</td></tr>");
                $i++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>



