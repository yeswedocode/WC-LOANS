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
                <div class="col mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-muted" style="font-style:italic"><strong>LOAN REQUEST</strong></h3>
                            <hr>
                            <?php
                            $sql = "SELECT * FROM request_tbl";
                            $resultQuery = mysqli_query($dbconn,$sql);
                            $numRows = mysqli_num_rows($resultQuery);

                            if($numRows > 0)
                            {
                                while($row=mysqli_fetch_array($resultQuery))
                                {

                                    $id = $row['id'];
                                    $amount = $row['amount'];
                                    $date = $row['date'];

                                    echo
                                        '
                                        <div class="alert alert-info alert-dismissible fade show text-dark text-center my-3">
								        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <h5 style="font-style:italic">Hello Admin, <mark>'.$id.'</mark> would like to apply for loan.</h5>
                                        <br>
                                        <a href="processLoan.php?pending_id='.$id.'" class="btn btn-outline-info">Accept</a>
                                        <a href="heart/allinone.php?deletePending_id='.$id.'"><button class="btn btn-outline-danger">Decline</button></a>
                                        <br>
                                        <hr>
                                        <h6 class="text-center" style="font-style:italic">Date: '.$date.'</h6>
								        </div>
                                        ';
                                }
                            }
                            else
                            {
                                echo
                                    '
                                    <div class="jumbotron">
                                    <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Request!</strong> No Pending Request.
                                    </div>
                                    </div>
                                    ';
                            }
                            ?>
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

<?php include 'includes/footer.inc.php' ?>
