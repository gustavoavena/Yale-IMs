<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>Input Scores</h1>
                <p>Input the sport, date and how many points each college has scored in the match</p>
                <p align="center">The scores for each match follow the guidelines stated in the <a href="http://www.yale.edu/intramurals/Rules/Tyng%20Cup%20Point%20System.pdf"><u><b>Yale Intramurals Regulations</u></b></a>.</p>
            </div>
        </div>
    </div>
</div>

<form id="input_form" action="input_scores.php" method="post">
    <fieldset>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        <div class="form-group">
                            <select id="sport" class="form-control" name="sport">
                                <option disabled selected value>Sport</option>
                                <?php 
                                    foreach($sport_map as $key=> $value) {
                                        print("<option value=" . $key . ">" . $value . "</option>");
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select id="month" class="form-control" name="month" type="number" onblur="defineDays()">
                                            <option disabled selected value>Month</option>
                                            <option value=1>January</option>
                                            <option value=2>February</option>
                                            <option value=3>March</option>
                                            <option value=4>April</option>
                                            <option value=5>May</option>
                                            <option value=6>June</option>
                                            <option value=7>July</option>
                                            <option value=8>August</option>
                                            <option value=9>September</option>
                                            <option value=10>October</option>
                                            <option value=11>November</option>
                                            <option value=12>Dcember</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <select id="day" class="form-control" name="day" type="number">
                                        <option disabled selected value>Day</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select id="year" class="form-control" name="year" type="number">
                                        <option disabled selected value>Year</option>
                                        <?php
                                            $year = date("Y"); 
                                            print("<option value=" . $year . ">" . $year . "</option>");
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left"><img id="cl1" src="https://upload.wikimedia.org/wikipedia/en/thumb/1/13/Berkeleyshield.png/220px-Berkeleyshield.png" alt="Berkeley" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Berkeley College</h4>
                                    <input id="college1" class="form-control" name="BK" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl2" src="https://upload.wikimedia.org/wikipedia/en/3/30/Branford_College_shield.png" alt="Branford" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Branford College</h4>
                                    <input id="college2" class="form-control" name="BR" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl3" src="https://upload.wikimedia.org/wikipedia/en/c/ce/Calhoun_College_shield.png" alt="Calhoun" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Calhoun College</h4>
                                    <input id="college3" class="form-control" name="CC" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl4" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b3/Davenportshield.png/220px-Davenportshield.png" alt="Davenport" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Davenport College</h4>
                                    <input id="college4" class="form-control" name="DC" type="number"></input>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left"><img id="cl5" src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b7/EzraStilesshield.png/220px-EzraStilesshield.png" alt="Ezra Stiles" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Ezra Stiles College</h4>
                                    <input id="college5" class="form-control" name="ES" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl6" src="http://upload.wikimedia.org/wikipedia/en/4/4e/JonathanEdwardsshield.png" alt="Jonathan Edwards" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Jonathan Edwards College</h4>
                                    <input id="college6" class="form-control" name="JE" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl7" src="https://upload.wikimedia.org/wikipedia/en/thumb/7/7b/Morseshield.png/220px-Morseshield.png" alt="Morse" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Morse College</h4>
                                    <input id="college7" class="form-control" name="MC" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl8" src="https://upload.wikimedia.org/wikipedia/en/thumb/d/da/Piersonshield.png/220px-Piersonshield.png" alt="Pierson" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Pierson College</h4>
                                    <input id="college8" class="form-control" name="PC" type="number"></input>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="media-list">
                             <li class="media">
                                <a class="pull-left"><img id="cl9" src="https://upload.wikimedia.org/wikipedia/en/thumb/e/e9/Sillimanshield.png/220px-Sillimanshield.png" alt="Silliman" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Silliman College</h4>
                                    <input id="college9" class="form-control" name="SM" type="number"></input>
                                </div>
                            </li>
                             <li class="media">
                                <a class="pull-left"><img id="cl10" src="https://upload.wikimedia.org/wikipedia/en/2/2c/Saybrook_shield.png" alt="Saybrook" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Saybrook College</h4>
                                    <input id="college10" class="form-control" name="SY" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl11" src="https://upload.wikimedia.org/wikipedia/en/thumb/4/44/Trumbullshield.png/220px-Trumbullshield.png" alt="Trumbull" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Trumbull College</h4>
                                    <input id="college11" class="form-control" name="TC" type="number"></input>
                                </div>
                            </li>
                            <li class="media">
                                <a class="pull-left"><img id="cl12" src="https://upload.wikimedia.org/wikipedia/en/5/53/Timothy_Dwight_shield.png" alt="Timothy Dwight" class="college_logos"></a>
                                <div class="media-body">
                                    <h4 class="media-heading">Timothy Dwight College</h4>
                                    <input id="college12" class="form-control" name="TD" type="number"></input>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group" align=center>
            <button class="btn btn-default" type="submit">
                <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Input scores
            </button>
        </div>
        <script>
            dataCheck();
        </script>
    </fieldset>
</form>
