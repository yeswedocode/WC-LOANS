<?php include 'includes/header.inc.php'; ?>

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

        <div class="container" style="padding-top:2rem">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="addLoan.php">Step 1:&nbsp;Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-info" href="addFinancial.php">Step 2:&nbsp;Financial Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="addInfo.php">Step 3:&nbsp;Additional Information</a>
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
