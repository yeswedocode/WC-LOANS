<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <h3 class="text-center text-muted">User Profile</h3>
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="col-md-4">
                            <img src="img/wc.png" class="img-fluid" width="100">
                        </div><br>
                        <div class="col-md-8">
                            <label>Name:</label>
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                            <label>Email:</label>
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                            <label>Password:</label>
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc.php'; ?>
