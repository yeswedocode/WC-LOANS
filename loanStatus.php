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
                <div class="col-md-8 mx-auto" style="padding-top:3rem">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center text-muted">Loan Status will be displayed Here</h3>
                            <hr>
                            <form class="form-inline" action="" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control mr-sm-1" placeholder="Search">
                                    <button class="btn btn-outline-info" type="submit">Search</button>
                                </div>
                            </form>
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
