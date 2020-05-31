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
                    <?php
                    if(@$_GET['msg'] == 'approvedMember')
                    {

                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-success text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Loan Approved!</strong> Congraluations Member Loan Approved Successfully.
				            </div>
                            ';
                    }

                    ?>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Amount</th>
                            <th>Date Approved</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            $selectQuery = "SELECT * FROM personal_info_tbl WHERE status='active'";
                            $resultQuery = mysqli_query($dbconn,$selectQuery);
                            $total = null;

                            while($row=mysqli_fetch_array($resultQuery))
                            {

                                $id = $row['id'];
                                $name = $row['name'];
                                $amount = $row['loan_amount'];
                                $date = $row['date'];
                                $amount = $row['loan_amount'];
                                $total += $amount;
                            ?>
                            <tr>
                                <td><?php echo $id; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo number_format($amount); ?>/=</td>
                                <td><?php echo $date; ?></td>
                                <td>
                                    <a href="#" class="text-info">Check</a>
                                    ||
                                    <a href="#" class="text-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                            }
                        ?>
                        </tbody>
                    </table>
                    <br>
                    <div class="d-flex flex-row-reverse bg-info text-light p-3 rounded-bottom">
                        <div class="py-1 px-5 text-right">
                            <div class="mb-2">Total Amount Refunded Loan<hr></div>
                            <div class="h2 text-light">Tzs <?php echo number_format($total); ?>/=<hr><hr></div>
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
