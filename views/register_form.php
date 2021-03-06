<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Register User</h1>
                <p align="center">Please make sure you fill all of the fields with the right information to register a new user.</p>
                <p align="center">Remeber that, when the "Master" field is clicked, this allows the new user to register and remove users.</p>
            </div>
        </div>
    </div>
</div>
<form id="register_form" action="register.php" method="post">
    <fieldset>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6">
                        
                        <form class="form-horizontal" role="form">
                            <div id="full_name" class="form-group">
                                <input autocomplete="off" autofocus class="form-control" name="name" placeholder="Full Name" type="text" />
                            </div>

                            <div class="form-group">
                                <select id="college_register" class="form-control" name="college" type="text">
                                    <option disabled selected value="INVALID">Residential College</option>
                                    <option value="BK">Berkeley</option>
                                    <option value="BR">Branford</option>
                                    <option value="CC">Calhoun</option>
                                    <option value="DC">Davenport</option>
                                    <option value="ES">Ezra Stiles</option>
                                    <option value="JE">Jonathan Edwards</option>
                                    <option value="MC">Morse</option>
                                    <option value="PC">Pierson</option>
                                    <option value="SM">Silliman</option>
                                    <option value="SY">Saybrook</option>
                                    <option value="TC">Trumbull</option>
                                    <option value="TD">Timothy Dwight</option>
                                </select>
                                <input type="checkbox" name="master" defaultValue=0 value=1>Master</input>
                            </div>

                            <div id="username" class="form-group">
                                <input autocomplete="off" autofocus class="form-control" name="username" placeholder="Username" type="text" />
                            </div>

                            <div class="form-group">
                                <input id="password" class="form-control" name="password" placeholder="Password" type="password" />
                            </div>

                            <div class="form group">
                                <input id="confirm_password" class="form-control" name="confirmation" placeholder="Confirm password" type="password" />
                            </div>

                            <br>
                            <div align="center" class="form-group">
                                <button class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span> Register
                                </button>
                            </div>

                            <script>
                                verify_submit();
                            </script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</form>
