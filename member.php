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
                    <a href="addMember.php" class="btn btn-outline-info float-right">Add New Memmber</a>
                    <br>
                    <br>
                       <?php
                    if(@$_GET['msg'] == 'success')
                    {

                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-success text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Member!</strong> Member Added successfully.
				            </div>
                            ';
                    }

                    else if(@$_GET['msg'] == 'updateMember')
                    {
                        echo
                            '
                            <div class="alert alert-success alert-dismissible fade show text-success text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Member!</strong> Member Updated successfully.
				            </div>
                            ';
                    }
                    else if(@$_GET['msg'] == 'deleteMember')
                    {
                        echo
                            '
                            <div class="alert alert-danger alert-dismissible fade show text-danger text-center my-3">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Member!</strong> Member Delete successfully.
				            </div>
                            ';
                    }


                    ?>

                    <table class="table table-striped" id="dataTable">
                        <thead class="thead-dark">
                            <th>Member ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            $dbconn = mysqli_connect("localhost","root","","wc");
                            $selectMemberQuery = "SELECT * FROM member_tbl";
                            $resultQuery = mysqli_query($dbconn,$selectMemberQuery);

                            while($row = mysqli_fetch_array($resultQuery))
                            {
                                $memberId = $row['id'];
                                $memberName = $row['name'];
                                $memberPhone = $row['phone'];
                                $memberAddress = $row['address'];
                            ?>
                              <tr>
                                <td><?php echo $memberId; ?></td>
                                <td><?php echo $memberName; ?></td>
                                <td><?php echo $memberPhone; ?></td>
                                <td><?php echo $memberAddress; ?></td>
                                <td>
                                    <a href="paymentDetails.php?pay_id=<?php echo $memberId; ?>"><span class="badge badge-pill badge-info">Payment</span></a>
                                    |
                                    <a href="editMember.php?member_id=<?php echo $memberId; ?>"><span class="badge badge-pill badge-warning">Edit</span></a>
                                    |
                                    <a href="heart/allinone.php?delete_member=<?php echo $memberId; ?>"><span class="badge badge-pill badge-danger">Delete</span></a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
