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
                <div class="col mx-auto">
                    <a href="addPayment.php" class="btn btn-outline-info float-right">ADD PAYMENT</a>
                    <br>
                    <br>
                    <table class="table table-striped" id="dataTable">
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Transaction ID</th>
                            <th>Amout Paid</th>
                            <th>Type</th>
                            <th>Received Date</th>
                        </thead>
                        <tbody>
                            <?php
                                   $selectQuery = "SELECT * FROM payment";
                                   $resultQuery = mysqli_query($dbconn,$selectQuery);
                                   $total = null;

                                   while($row=mysqli_fetch_array($resultQuery))
                                   {
                                       $member = $row['member_id'];
                                       $transaction_id = $row['transaction_id'];
                                       $amount = $row['amount'];
                                       $date = $row['date'];
                                       $type = $row['type'];

                                       $total += $row['amount'];
                                   ?>
                            <tr>
                                <td><?php echo $member; ?></td>
                                <td><?php echo $transaction_id; ?></td>
                                <td>Tzs&nbsp;<?php echo number_format($amount); ?>/=</td>
                                <td><?php echo $type; ?></td>
                                <td><?php echo $date; ?></td>
                            </tr>
                            <?php   } ?>
                        </tbody>
                    </table>
                    <br>
                    <div class="d-flex flex-row-reverse bg-info text-light p-3 rounded-bottom">
                        <div class="py-1 px-5 text-right">
                            <div class="mb-2 fa-2x">Total Payment</div>
                            <div class="h3 text-light">Tzs <?php echo number_format($total); ?>/=</div>
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
