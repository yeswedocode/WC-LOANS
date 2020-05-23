<?php include 'includes/header.inc.php'; ?>

<?php include 'heart/allinone.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                        <img class="img-profile rounded-circle" src="img/wc.png">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profile.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <h3 class="text-center text-muted">Add New User</h3>
                    <?php
                    if(@$_GET['msg'] == 'UserExist') {

                        echo
                            '
                            <div class="alert alert-warning alert-dismissible fade show text-warning text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>User Check!</strong> Email Exists.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'PasswordCheck')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Password Check!</strong> Password Unmatched.
				            </div>
                            ';
                    }

                    ?>
                    <hr>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <label>Name:</label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
                        </div>
                        <label>Email:</label>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter e-mail" required>
                        </div>
                        <label>Password:</label>
                        <div class="form-group">
                            <input type="password" id="trial" name="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" required>
                        </div>
                        <label>Repeat Password:</label>
                        <div class="form-group">
                            <input type="password" id="trial" name="repeat_password" class="form-control" placeholder="Repeat Password" required>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" onclick="myFunction()">Show Password
                        </div>
                        <div class="form-group">
                            <input type="submit" role="button" name="addUser" class="form-control btn btn-outline-info" value="Add User">
                        </div>

                        <div class="row">
                            <div class="coL mx-auto">
                                <div id="message">
                                    <h5 class="text-muted">Your Password must contain the following:</h5>
                                    <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                    <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                    <p id="number" class="invalid">A <b>number</b></p>
                                    <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                </div>
                            </div>
                        </div>

                        <script>
                             function myFunction()
                            {
                                var x = document.getElementById("trial");
                                if(x.type === "password")
                                    {
                                        x.type = "text";
                                    }
                                else
                                    {
                                        x.type = "password";
                                    }
                            }
                            var myInput = document.getElementById("trial");
                            var letter = document.getElementById("letter");
                            var capital = document.getElementById("capital");
                            var number = document.getElementById("number");
                            var length = document.getElementById("length");

                            // When the user clicks on the password field, show the message box
                            myInput.onfocus = function() {
                              document.getElementById("message").style.display = "block";
                            }

                            // When the user clicks outside of the password field, hide the message box
                            myInput.onblur = function() {
                              document.getElementById("message").style.display = "none";
                            }

                            // When the user starts to type something inside the password field
                            myInput.onkeyup = function() {
                              // Validate lowercase letters
                              var lowerCaseLetters = /[a-z]/g;
                              if(myInput.value.match(lowerCaseLetters)) {
                                letter.classList.remove("invalid");
                                letter.classList.add("valid");
                              } else {
                                letter.classList.remove("valid");
                                letter.classList.add("invalid");
                              }

                              // Validate capital letters
                              var upperCaseLetters = /[A-Z]/g;
                              if(myInput.value.match(upperCaseLetters)) {
                                capital.classList.remove("invalid");
                                capital.classList.add("valid");
                              } else {
                                capital.classList.remove("valid");
                                capital.classList.add("invalid");
                              }

                              // Validate numbers
                              var numbers = /[0-9]/g;
                              if(myInput.value.match(numbers)) {
                                number.classList.remove("invalid");
                                number.classList.add("valid");
                              } else {
                                number.classList.remove("valid");
                                number.classList.add("invalid");
                              }

                              // Validate length
                              if(myInput.value.length >= 8) {
                                length.classList.remove("invalid");
                                length.classList.add("valid");
                              } else {
                                length.classList.remove("valid");
                                length.classList.add("invalid");
                              }
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <footer class="sticky-footer bg-light">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; WILLIAMCODES 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->




<?php include 'includes/footer.inc.php' ?>
