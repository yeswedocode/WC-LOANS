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
                            <a class="nav-link active" href="#person">Step 1:&nbsp;Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addFinancial.php">Step 2:&nbsp;Financial Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addInfo.php">Step 3:&nbsp;Additional Information</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 mx-auto" style="padding-top:3rem">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-muted">Personal Information</h3>
                            <hr>
                            <form action="" method="post">
                                <label>Image:</label>
                                <div class="form-group">
                                    <input type="file" name="imgFile" class="form-control">
                                </div>
                                <label>Member ID:</label>
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="Enter Member ID">
                                </div>
                                <label>Full Name:</label>
                                <div class="form-group">
                                    <input type="text" name="uid" class="form-control" placeholder="Enter Full Name">
                                </div>
                                <label>Phone:</label>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                                </div>
                                <label>Address 1:</label>
                                <div class="form-group">
                                    <input type="text" name="address1" class="form-control" placeholder="Enter Address 1">
                                </div>
                                <label>Address 2:</label>
                                <div class="form-group">
                                    <input type="text" name="address2" class="form-control" placeholder="Enter Address 2">
                                </div>
                                <label>Region:</label>
                                <div class="form-group">
                                    <input type="text" name="region" class="form-control" placeholder="Enter Region">
                                </div>
                                <label>City:</label>
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="Enter City">
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="addPersonalDetails" class="form-control btn btn-outline-info" value="Add Personal Info">
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

</div>

<?php include 'includes/footer.inc.php'; ?>
