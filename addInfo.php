<?php include 'includes/header.inc.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav">
                <li class="nav-item fa-2x">
                    <a href="login.php" class="nav-link text-muted">WC LOAN</a>
                </li>
            </ul>
        </nav>
        <style>
            #regForm {
                background-color: #ffffff;
                margin: 100px auto;
                padding: 40px;
                width: 70%;
                min-width: 300px;
            }

            /* Style the input fields */
            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }

            /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }

            /* Hide all steps by default: */
            .tab {
                display: none;
            }

            /* Make circles that indicate the steps of the form: */
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }

            /* Mark the active step: */
            .step.active {
                opacity: 1;
            }

            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #4CAF50;
            }

        </style>
        <div class="container" style="padding-top:2rem">
            <div class="row">
                <div class="col">
                               <?php
                    if(@$_GET['msg'] == 'doneWithPersonalInfo')
                    {

                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-success text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Application sent successfully.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'memberDoesnotExist')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Member Does not Exists.
				            </div>
                            ';
                    }
                    else if(@$_GET['msg'] == 'phoneNumberExist')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Phone Number Does not exists.
				            </div>
                            ';
                    }
                    else if(@$_GET['msg'] == 'nameDoesnotExist')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Name you have Entered Does not exists.
				            </div>
                            ';
                    }


                    ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" id="regForm">
                        <h1 class="text-center">APPLICATION FORM</h1>
                        <hr>
                        <div class="tab">
                            <h6>STEP 1: PERSONAL INFORMATION</h6>
                            <div class="form-group">
                                <label>Member Id:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="id" class="form-control" oninput="this.className = ''" placeholder="Enter Member Id" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="name" class="form-control" oninput="this.className = ''" placeholder="Enter Full Name" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="number" name="phone" class="form-control" oninput="this.className = ''" min="10" max="10" placeholder="Enter Phone Number" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Region:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="region" class="form-control" oninput="this.className = ''" placeholder="Enter Region" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>City:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="city" class="form-control" oninput="this.className = ''" placeholder="Enter City" required></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <h6>STEP 2: FINANCIAL INFORMATION</h6>
                            <div class="form-group">
                                <label>Name of Business:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="business_name" class="form-control" oninput="this.className = ''" placeholder="Enter Business Name" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Number of dependant:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="number" name="dependant" class="form-control" oninput="this.className = ''" placeholder="Enter Full Name" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Loan Amount:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="loan_amount" class="form-control" oninput="this.className = ''" placeholder="Enter Loan Amount" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><textarea name="description" class="form-control" oninput="this.className = ''" rows="4" required></textarea></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab">
                            <h6>STEP 3: GUARANTOR INFORMATION</h6>
                            <div class="form-group">
                                <label>Name of Guarantor</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="gname" class="form-control" oninput="this.className = ''" placeholder="Enter Guarantor Name" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Guarantor Relation:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="text" name="grelation" class="form-control" oninput="this.className = ''" placeholder="Enter Guarantor Relation" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Phone Number:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><input type="number" name="gphone" min="10" max="10" oninput="this.className = ''" class="form-control" placeholder="Enter Guarantor Phone Number" required></p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Guarantor Address:</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p><textarea name="gaddress" class="form-control" rows="4" oninput="this.className = ''" required></textarea></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col" style="float:right;">
                                    <button type="button" class="btn btn-outline-info btn-lg" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                    <button type="submit" name="addInfo" class="btn btn-outline-info btn-lg" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                </div>
                            </div>
                        </div>

                        <div style="text-align:center;margin-top:40px;">
                            <span class="step"></span>
                            <span class="step"></span>
                            <span class="step"></span>
                        </div>
                    </form>

                    <script>
                        var currentTab = 0; // Current tab is set to be the first tab (0)
                        showTab(currentTab); // Display the current tab

                        function showTab(n) {
                            // This function will display the specified tab of the form ...
                            var x = document.getElementsByClassName("tab");
                            x[n].style.display = "block";
                            // ... and fix the Previous/Next buttons:
                            if (n == 0) {
                                document.getElementById("prevBtn").style.display = "none";
                            } else {
                                document.getElementById("prevBtn").style.display = "inline";
                            }
                            if (n == (x.length - 1)) {
                                document.getElementById("nextBtn").innerHTML = "Submit";
                            } else {
                                document.getElementById("nextBtn").innerHTML = "Next";
                            }
                            // ... and run a function that displays the correct step indicator:
                            fixStepIndicator(n)
                        }

                        function nextPrev(n) {
                            // This function will figure out which tab to display
                            var x = document.getElementsByClassName("tab");
                            // Exit the function if any field in the current tab is invalid:
                            if (n == 1 && !validateForm()) return false;
                            // Hide the current tab:
                            x[currentTab].style.display = "none";
                            // Increase or decrease the current tab by 1:
                            currentTab = currentTab + n;
                            // if you have reached the end of the form... :
                            if (currentTab >= x.length) {
                                //...the form gets submitted:
                                document.getElementById("regForm").submit();
                                return false;
                            }
                            // Otherwise, display the correct tab:
                            showTab(currentTab);
                        }

                        function validateForm() {
                            // This function deals with validation of the form fields
                            var x, y, i, valid = true;
                            x = document.getElementsByClassName("tab");
                            y = x[currentTab].getElementsByTagName("input");
                            // A loop that checks every input field in the current tab:
                            for (i = 0; i < y.length; i++) {
                                // If a field is empty...
                                if (y[i].value == "") {
                                    // add an "invalid" class to the field:
                                    y[i].className += " invalid";
                                    // and set the current valid status to false:
                                    valid = false;
                                }
                            }
                            // If the valid status is true, mark the step as finished and valid:
                            if (valid) {
                                document.getElementsByClassName("step")[currentTab].className += " finish";
                            }
                            return valid; // return the valid status
                        }

                        function fixStepIndicator(n) {
                            // This function removes the "active" class of all steps...
                            var i, x = document.getElementsByClassName("step");
                            for (i = 0; i < x.length; i++) {
                                x[i].className = x[i].className.replace(" active", "");
                            }
                            //... and adds the "active" class to the current step:
                            x[n].className += " active";
                        }

                    </script>
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
</div>
<?php include 'includes/footer.inc.php'; ?>
