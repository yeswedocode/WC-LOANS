<?php include 'includes/header.inc.php'; ?>

<div class="container" style="padding-top:5rem;padding-bottom:5rem">
    <div class="row">
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

<?php include 'includes/footer.inc.php'; ?>
