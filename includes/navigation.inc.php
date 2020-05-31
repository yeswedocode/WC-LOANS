<?php
$dbconn = mysqli_connect("localhost","root","","wc");
$selectQuery = "SELECT * FROM wallet";
$resultQuery = mysqli_query($dbconn,$selectQuery);
$total = null;

while($row=mysqli_fetch_array($resultQuery))
{
    $name = $row['name'];
    $amount = $row['amount'];
    $type = $row['type'];
    $date = $row['date'];
    $total += $amount;

}

$dbconn = mysqli_connect("localhost","root","","wc");
$selectQuery = "SELECT * FROM payment";
$resultQuery = mysqli_query($dbconn,$selectQuery);
$totalPay = null;

while($row=mysqli_fetch_array($resultQuery))
{
    $amount = $row['amount'];
    $totalPay += $amount;

}

$dbconn = mysqli_connect("localhost","root","","wc");
$selectQuery = "SELECT * FROM personal_info_tbl WHERE status='active'";
$resultQuery = mysqli_query($dbconn,$selectQuery);
$totalP = null;

while($row=mysqli_fetch_array($resultQuery))
{
    $name = $row['name'];
    $amount = $row['loan_amount'];
    $totalP += $amount;

}

$dbconn = mysqli_connect("localhost","root","","wc");
$selectQuery = "SELECT * FROM personal_info_tbl WHERE status='active'";
$resultQuery = mysqli_query($dbconn,$selectQuery);
$totalP = null;

while($row=mysqli_fetch_array($resultQuery))
{
    $name = $row['name'];
    $amount = $row['loan_amount'];
    $totalP += $amount;

    $totalAmount = ($total + $totalPay) - $totalP;

}


$date = date('d-M-y');

$selectQuery = "SELECT * FROM return_tbl";
$resultQuery = mysqli_query($dbconn,$selectQuery);
$totalBalance = null;

while($row=mysqli_fetch_array($resultQuery))
{
   $member = $row['member_id'];
   $balance = $row['balance'];
   $paydate = $row['paydate'];

   $checkdate = strtotime($paydate);
   $payDates  = strtotime($date);

    if($payDates > $checkdate)
    {
        $totalBalance += $row['balance'];
    }

    else
    {
        $totalBalance = 0;
    }

}

?>

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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['name']; ?></span>
                        <img class="img-profile rounded-circle" src="img/wc.png" width="100">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="profile.php">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <a class="dropdown-item" href="logout.php">
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

                                    <strong>Warning!</strong> You have Loan request from <a href="processLoan.php?pending_id='.$id.'" style="color:#000;font-weight:bold;text-decoration:underline">'.$id.'</a>
                                    <br>
                                    <br>
                                    ';
                            }
                        }

                    ?>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <!-- MY WALLET CARD-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">My Wallet</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Tzs&nbsp;<?php echo number_format($totalAmount); ?>/=</div>
                                </div>
                                <!--
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                </div>


                <!-- LOANS CARD -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="loan.php" class="text-success">Loans</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Tzs&nbsp;<?php echo number_format($totalP); ?>/=</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--   MISSED PAYMENT CARD       -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1"><a href="missedPayment.php" class="text-danger">Missed Payment</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Tzs&nbsp;<?php echo number_format($totalBalance);?>/=</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--   PAYMENT CARD       -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="payment.php" class="text-info">Payment</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Tzs&nbsp;<?php echo number_format($totalPay); ?>/=</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Pending Requests Card -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="wallet.php" class="text-warning">Transaction</a></div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo number_format($total); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

            <div class="row">

                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                            <div class="dropdown no-arrow">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                    <div class="dropdown-header">Dropdown Header:</div>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myAreaChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; WILLIAMCODES 2020</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->
