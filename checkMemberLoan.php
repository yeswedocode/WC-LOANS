<?php include 'includes/header.inc.php'; ?>

<?php include 'heart/allinone.php'; ?>

<?php if(isset($_SESSION['name'])){ ?>

<?php include 'includes/sidebar.inc.php'; ?>

<style>
    h4
    {
        font-style: italic;
    }
</style>

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
                <div class="col mx-auto">
                    <div class="jumbotron">
                        <h3 class="text-center text-muted">MEMBER LOAN INFORMATION</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <h4>Personal Info</h4>
                                <hr>
                                Member ID :&nbsp;<strong><?php echo $id; ?></strong>
                                <br>
                                <br>
                                Full Name :&nbsp;<strong><?php echo $name; ?></strong>
                                <br>
                                <br>
                                Phone Number :&nbsp;<strong>(+255)-<?php echo $phone; ?></strong>
                                <br>
                                <br>
                                Region :&nbsp;<strong><?php echo $region; ?></strong>
                                <br>
                                <br>
                                City :&nbsp;<strong><?php echo $city; ?></strong>
                                <br>
                                <br>
                                <h4>Business Info</h4>
                                <hr>
                                Business Name :&nbsp;<strong><?php echo $business_name; ?></strong>
                                <br>
                                <br>
                                Dependant No :&nbsp;<strong><?php echo $dependant; ?></strong>
                                <br>
                                <br>
                                Loan Amount :&nbsp;<strong><a href="payment.php">Tzs&nbsp;<?php echo number_format($loan_amount); ?>/=</a></strong>
                                <br>
                                <br>
                                Loan Description :&nbsp;<strong><?php echo $description; ?></strong>
                                <br>
                                <br>
                                <h4>Guarantor Info</h4>
                                <hr>
                                Guarantor Name :&nbsp;<strong><?php echo $gname; ?></strong>
                                <br>
                                <br>
                                Guaranotr Relation :&nbsp;<strong><?php echo $grelation; ?></strong>
                                <br>
                                <br>
                                Guarantor Phone :&nbsp;<strong>(+255)-<?php echo $gphone; ?></strong>
                                <br>
                                <br>
                                Guarantor Address :&nbsp;<strong><?php echo $gaddress; ?></strong>
                                <br>
                                <br>
                                <h4>Supervisor Info</h4>
                                <hr>
                                Supervisor Name     :&nbsp;<strong><?php echo $approve_name; ?></strong>
                                <br>
                                <br>
                                Supervisor Contact  :&nbsp;<strong>(+255)-<?php echo $approve_phone; ?></strong>
                            </div>
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


<?php } ?>

<?php
if(!$_SESSION['name'])
{
    header("Location: login.php?msg=login");
    exit();
}

?>
