<?php include 'includes/header.inc.php'; ?>

<?php include 'heart/allinone.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav">
                <li class="nav-item fa-2x">
                    <a href="login.php" class="nav-link text-muted">WC LOAN</a>
                </li>
            </ul>
        </nav>

        <div class="container" style="padding-top:2rem">
            <div class="row">
                <div class="col">
                    <?php
                    if(@$_GET['msg'] == 'memberExists')
                    {

                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-dark text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Member al ready applied for loan.
				            </div>
                            ';
                    }
                    else if(@$_GET['msg'] == 'doneWithPersonalInfo')
                    {

                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-dark text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Your Application have been sent successfully.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'checkName')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-dark text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Please enter your correct name.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'checkPhone')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-dark text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Please enter your correct phone number.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'memberDoesnotExist')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-dark text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Application!</strong> Member ID does not exists.
				            </div>
                            ';
                    }


                    ?>
                    <h3 class="text-center text-muted">APPLICATION FORM</h3>
                    <hr>
                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="text-muted">Step 1:Personal Info</h4>
                                            <hr>
                                            <label>Member Id:</label>
                                            <div class="form-group">
                                                <input type="text" name="id" class="form-control" placeholder="Enter Member Id" required>
                                            </div>
                                            <label>Name:</label>
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
                                            </div>
                                            <label>Phone Number:</label>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                                            </div>
                                            <label>Region:</label>
                                            <div class="form-group">
                                                <input type="text" name="region" class="form-control" placeholder="Enter Region" required>
                                            </div>
                                            <label>City:</label>
                                            <div class="form-group">
                                                <input type="text" name="city" class="form-control" placeholder="Enter City" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="text-muted">Step 2:Financial Info</h4>
                                            <hr>
                                            <label>Name Of business:</label>
                                            <div class="form-group">
                                                <input type="text" name="business_name" class="form-control" placeholder="Enter Business Name" required>
                                            </div>
                                            <label>Number Of Dependant:</label>
                                            <div class="form-group">
                                                <input type="number" name="dependant" class="form-control" placeholder="Enter Number Of Dependant" required>
                                            </div>
                                            <label>Loan Amount:</label>
                                            <div class="form-group">
                                                <input type="number" name="loan_amount" class="form-control" placeholder="Enter Loan Amount" required>
                                            </div>
                                            <label>Loan Description:</label>
                                            <div class="form-group">
                                                <textarea name="description" class="form-control" rows="5" placeholder="Write Loan Description"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="text-muted">Step 3:Guarantor Info</h4>
                                            <hr>
                                            <label>Guarantor Name:</label>
                                            <div class="form-group">
                                                <input type="text" name="gname" class="form-control" placeholder="Enter Guarantor Name" required>
                                            </div>
                                            <label>Guarantor Relation:</label>
                                            <div class="form-group">
                                                <input type="text" name="grelation" class="form-control" placeholder="Enter Guarantor Relation" required>
                                            </div>
                                            <label>Phone Number:</label>
                                            <div class="form-group">
                                                <input type="text" name="gphone" class="form-control" placeholder="Enter Guarantor Phone Number" required>E.g 0789898989
                                            </div>
                                            <label>Guarantor Address:</label>
                                            <div class="form-group">
                                                <textarea name="gaddress" class="form-control" rows="5" placeholder="Write Address"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col mx-auto">
                                    <div class="form-group">
                                        <input type="submit" name="addInfo" class="form-control btn btn-outline-info" value="Add Info">
                                    </div>
                                </div>
                            </div>
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
</div>
<?php include 'includes/footer.inc.php'; ?>
