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
                <div class="col-md-4 mx-auto">
                    <h3 class="text-center text-muted">Change Password</h3>
                    <hr>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                        <label>Name:</label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                        </div>
                        <label>Email:</label>
                        <div class="form-group">
                            <input type="email" name="name" class="form-control" value="<?php echo $email; ?>">
                        </div>
                        <label>Current Password:</label>
                        <div class="form-group">
                            <input type="password" name="currentPassword" class="form-control" placeholder="Enter Current Password">
                        </div>
                        <label>New Password:</label>
                        <div class="form-group">
                            <input type="password" name="newPassword" class="form-control" placeholder="Enter New Password">
                        </div>
                        <span class="badge badge-pill badge-warning">* Must contain at least one number, one letter, any of these characters -<br> "!@#$%" and more than 8 characters long.</span>
                        <h1></h1>
                        <label>Retype New Password:</label>
                        <div class="form-group">
                            <input type="password" name="repeatPassword" class="form-control" placeholder="Repeat Password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="changePassword" class="form-control btn btn-outline-info" value="Change password">
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

<?php include 'includes/footer.inc.php' ?>


<?php } ?>

<?php
if(!$_SESSION['name'])
{
    header("Location: login.php?msg=login");
    exit();
}

?>
