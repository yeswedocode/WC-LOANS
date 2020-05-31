<?php include 'includes/header.inc.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav">
                <li class="nav-item fa-2x">
                    <a href="login.php" class="nav-link text-muted">WC LOAN</a>
                </li>
                <li class="nav-item fa-1x">
                    <a href="login.php" class="nav-link text-muted">Home</a>
                </li>
            </ul>

           <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="addInfo.php" class="nav-link text-muted">Apply</a>
                </li>
                <li class="nav-item">
                    <a href="loanStatus.php" class="nav-link text-muted">Status</a>
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link text-muted">FAQ</a>
                </li>
            </ul>
        </nav>

        <div class="container" style="padding-top:2rem">
            <div class="row">
                <div class="col mx-auto" style="padding-top:3rem">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-muted">Search Loan Status</h3>
                            <hr>
                            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                <div class="input-group">
                                    <input type="text" name="code" class="form-control" placeholder="Enter Your Code... (Example:Mem 0123456789)">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info" type="submit" name="search">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <h5 class="text-center text-muted">Your Details Will be displayed below</h5>
                            <hr>
                            <?php

                                $code = "";

                                if(isset($_POST['search']))
                                {
                                    $code = strtoupper($_POST['code']);

                                    $dbconn = mysqli_connect("localhost","root","","wc");

                                    $selectSearchQuery = "SELECT * FROM member_tbl WHERE id='$code'";
                                    $resultQuery = mysqli_query($dbconn,$selectSearchQuery);
                                    $searchRows = mysqli_num_rows($resultQuery);

                                    if($searchRows == 0)
                                    {
                                         echo
                                            '
                                             <div class="alert alert-danger alert-dismissible fade show text-info text-center my-3">
								             <button type="button" class="close" data-dismiss="alert">&times;</button>
								             <strong>ID Check!</strong> '.$code.' Does not Exists.
				                             </div>
                                            ';
                                    }

                                    else
                                    {

                                    $selectSearchQuery = "SELECT * FROM return_tbl WHERE member_id='$code'";
                                    $resultQuery = mysqli_query($dbconn,$selectSearchQuery);
                                    $searchRows = mysqli_num_rows($resultQuery);

                                    if($searchRows > 0)
                                    {
                                        while($row=mysqli_fetch_array($resultQuery))
                                        {
                                            $paydate = $row['paydate'];
                                            $balance = $row['balance'];

                                            $selectSearchQuery = "SELECT * FROM personal_info_tbl WHERE id='$code'";
                                            $resultQuery = mysqli_query($dbconn,$selectSearchQuery);
                                            $app = mysqli_fetch_array($resultQuery);

                                            $approve_name = $app['approve_name'];
                                            $approve_phone = $app['approve_phone'];
                                            $status = $app['status'];

                                            echo
                                                '
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col">
                                                        <div class="jumbotron">
                                                            <a href="#" class="btn btn-outline-info float-right"><i class="fas fa-file-pdf"></i></a>
                                                            <a href="#" class="btn btn-outline-info float-right mr-2"><i class="fas fa-print"></i></a>
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    Approved By : '.$approve_name.'
                                                                    <br>
                                                                    <br>
                                                                    Phone Number : 0'.$approve_phone.'
                                                                    <br>
                                                                    <br>
                                                                    Status       : <span class="badge badge-pill badge-info">'.$status.'</span>
                                                                </div>
                                                                <hr>
                                                            </div>
                                                            <br>
                                                            <table class="table table-striped" id="dataTable">
                                                            <thead class="thead-dark">
                                                            <th>Paydate</th>
                                                            <th>Balance</th>
                                                            </thead>
                                                            <tbody>
                                                            <tr class="bg-warning">
                                                            <td class="text-light">'.$paydate.'</td>
                                                            <td class="text-light">'.$balance.'</td>
                                                            </tr>
                                                            </tbody>
                                                            </table>
                                                             <div class="d-flex flex-row-reverse bg-dark text-light p-3 rounded-bottom">
                                                        <div class="py-1 px-5 text-right">
                                                            <div class="mb-2">Amount Remained:</div>
                                                            <div class="h4 font-weight-light text-success"> <i class="fas fa-arrow-up text-success"></i> Tzs '.number_format($balance).'/=</div>
                                                            <div class="mb-2">Total Return:</div>
                                                            <div class="h4 font-weight-light">Tzs '.number_format($balance).'/=</div>
                                                        </div>
                                                    </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                ';
                                        }
                                    }

                                    else
                                    {
                                        echo
                                            '
                                             <div class="alert alert-warning alert-dismissible fade show text-info text-center my-3">
								             <button type="button" class="close" data-dismiss="alert">&times;</button>
								             <strong>Status Check!</strong> Not Yet Activated.
				                             </div>
                                            ';
                                    }

                                    }

                                }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
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
