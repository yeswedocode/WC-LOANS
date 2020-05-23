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


        <div class="container" style="padding-top:5rem;padding-bottom:5rem">
            <div class="row">
                <div class="col-md-3 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <a href="addLoan.php" class="fa-2x"><span class="badge badge-pill badge-info">Apply for Loan</span></a>
                            <a href="loanStatus.php" class="fa-2x"><span class="badge badge-pill badge-success">Loan Status</span></a>
                            <a href="#" class="fa-2x"><span class="badge badge-pill badge-warning">FAQ</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <center><span class="fas fa-user-circle fa-5x"></span></center>
                            <br>
                            <h3 class="text-center text-muted">SIGN IN TO YOUR ACCOUNT</h3>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <form action="" method="post">
                                        <label>Username:</label>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control" placeholder="Enter Username">
                                        </div>
                                        <label>Password:</label>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="signIn" class="form-control btn btn-outline-info" value="Sign In">
                                        </div>
                                        <center><a class="text-info" href="#">Forget Your Password?Click to reset.</a></center>
                                    </form>
                                </div>
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
