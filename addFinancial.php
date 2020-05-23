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

        <div class="container" style="padding-top:2rem">
            <div class="row">
                <div class="col-md-12">
                         <?php
                    if(@$_GET['msg'] == '')
                    {

                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-success text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>From Step 1!</strong> Congratulations you have completed the first step.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'updateUser')
                    {
                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-success text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Update User!</strong> User Updated successfully.
				            </div>
                            ';
                    }
                    else if(@$_GET['msg'] == 'deleteUser')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Delete User!</strong> User Delete successfully.
				            </div>
                            ';
                    }


                    ?>
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="addLoan.php">Step 1:&nbsp;Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-info" href="addFinancial.php">Step 2:&nbsp;Financial Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="addInfo.php">Step 3:&nbsp;Guarantor Information</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 mx-auto" style="padding-top:3rem">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-muted">Financial Information</h3>
                            <hr>
                            <form action="" method="post">
                                <label>Member ID:</label>
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="Enter Member ID">
                                </div>
                                <label>Full Name:</label>
                                <div class="form-group">
                                    <input type="text" name="uid" class="form-control" placeholder="Enter Full Name">
                                </div>
                                <label>Number Of Dependants:</label>
                                <div class="form-group">
                                    <input type="text" name="dependants" class="form-control" placeholder="Enter No. Of Dependants">
                                </div>
                                <label>Name Of Business:</label>
                                <div class="form-group">
                                    <input type="text" name="business_name" class="form-control" placeholder="Enter Name Of Business">
                                </div>
                                <label>Years in Business:</label>
                                <div class="form-group">
                                    <input type="text" name="years_in_business" class="form-control" placeholder="Enter Years in Business">
                                </div>
                                <label>Name Of Person Representative:</label>
                                <div class="form-group">
                                    <input type="text" name="representative" class="form-control" placeholder="Enter Name Of Person Representative">
                                </div>
                                <label>Loan Amount:</label>
                                <div class="form-group">
                                    <input type="text" name="loan_amount" class="form-control" placeholder="Enter Loan Amount">
                                </div>
                                <label>Description:</label>
                                <div class="form-group">
                                    <textarea name="description" class="form-control" rows="5" placeholder="Write Your Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="addFinancialDetails" class="form-control btn btn-outline-info" value="Add Financial Info">
                                </div>
                            </form>
                        </div>
                    </div>
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

<?php include 'includes/footer.inc.php'; ?>
