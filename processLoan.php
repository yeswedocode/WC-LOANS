<?php include 'includes/header.inc.php'; ?>

<?php include 'heart/allinone.php'; ?>

<?php if(isset($_SESSION['name'])){ ?>

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
                <div class="col">
                    <h4>Personal Information:</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Member Id:</label>
                            <div class="form-group">
                                <input type="text" name="id" class="form-control" value="<?php echo $id; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Full Name:</label>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Phone Number:</label>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Region:</label>
                            <div class="form-group">
                                <input type="text" name="region" class="form-control" value="<?php echo $region; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>City:</label>
                            <div class="form-group">
                                <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h4>Financial Information:</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Business Name:</label>
                            <div class="form-group">
                                <input type="text" name="business_name" class="form-control" value="<?php echo $business_name; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Number of Dependant:</label>
                            <div class="form-group">
                                <input type="text" name="dependant" class="form-control" value="<?php echo $dependant; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Loan Amount:</label>
                            <div class="form-group">
                                <input type="text" name="loan_amount" class="form-control" value="<?php echo $loan_amount; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Description:</label>
                            <div class="form-group">
                                <textarea class="form-control" name="description" rows="4" disabled><?php echo $description; ?></textarea>
                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <h4>Guarantor Information:</h4>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Guarantor Name:</label>
                            <div class="form-group">
                                <input type="text" name="gname" class="form-control" value="<?php echo $gname; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Guarantor Relation:</label>
                            <div class="form-group">
                                <input type="text" name="grelation" class="form-control" value="<?php echo $grelation; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Guarantor Contact:</label>
                            <div class="form-group">
                                <input type="text" name="gphone" class="form-control" value="<?php echo $gphone; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Guarantor Contact:</label>
                            <div class="form-group">
                                <textarea class="form-control" name="gaddress" rows="4" disabled><?php echo $gaddress; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <h4>Loan Approval:</h4>
                    <hr>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <label>Full Name:</label>
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="text" name="approve_name" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Phone Number:</label>
                                <div class="form-group">
                                    <input type="text" name="approve_phone" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label>Status:</label>
                                <div class="form-group">
                                    <input type="text" name="status" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="submit" name="Loan" class="form-control btn btn-outline-info" value="Approve">
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


<?php } ?>

<?php
if(!$_SESSION['name'])
{
    header("Location: login.php?msg=login");
    exit();
}

?>
