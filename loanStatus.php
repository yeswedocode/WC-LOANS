<?php include 'includes/header.inc.php'; ?>

<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <ul class="navbar-nav">
                <li class="nav-item fa-2x">
                    <a href="login.php" class="nav-link text-muted">WC LOAN</a>
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

                                if(isset($_POST['search']))
                                {
                                    $code = $_POST['code'];

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

                                    $selectSearchQuery = "SELECT * FROM member_tbl WHERE id='$code'";
                                    $resultQuery = mysqli_query($dbconn,$selectSearchQuery);
                                    $searchRows = mysqli_num_rows($resultQuery);

                                           if($searchRows > 0)
                                    {
                                        while($row=mysqli_fetch_array($resultQuery))
                                        {
                                            $id = $row['id'];
                                            $name = $row['name'];

                                            echo
                                                '
                                                <table class="table table-striped" id="dataTable">
                                                <thead class="thead-dark">
                                                <th>ID</th>
                                                <th>Name</th>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td>'.$id.'</td>
                                                <td>'.$name.'</td>
                                                </tr>
                                                </tbody>
                                                </table>
                                                ';
                                        }
                                    }

                                    else
                                    {
                                        echo
                                            '
                                             <div class="alert alert-danger alert-dismissible fade show text-info text-center my-3">
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
