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
                <div class="col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link text-info" href="addLoan.php">Step 1:&nbsp;Personal Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-info" href="addFinancial.php">Step 2:&nbsp;Financial Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-info" href="addInfo.php">Step 3:&nbsp;Guarantor Information</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 mx-auto" style="padding-top:3rem">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-muted">Guarantor Information</h3>
                            <hr>
                            <form action="" method="post">
                                <label>Guarantor Name:</label>
                                <div class="form-group">
                                    <input type="text" name="uid" class="form-control" placeholder="Enter Guarantor Name">
                                </div>
                                <label>Guarantor Relation:</label>
                                <div class="form-group">
                                    <input type="text" name="relation" class="form-control" placeholder="Enter Guarantor Relation">
                                </div>
                                <label>Guarantor Phone Number:</label>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Enter Guarantor Phone Number">
                                </div>
                                <label>Guarantor Address:</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="address" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="addAdditionalDetails" class="form-control btn btn-outline-info" value="Add Additional Info">
                                </div>
                            </form>
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
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

<?php include 'includes/footer.inc.php'; ?>
