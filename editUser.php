<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container">
    <br>
    <br>
    <br>
    <center>
        <a href="users.php" class="btn btn-outline-info">Back To Users</a>
    </center>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h3 class="text-center text-muted">Add New User</h3>
            <hr>
            <form action="" method="post">
                <label>Name:</label>
                <div class="form-group">
                    <input type="text" name="uid" class="form-control" placeholder="Enter Full Name">
                </div>
                <label>Email:</label>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter e-mail">
                </div>
                <label>Password:</label>
                <div class="form-group">
                    <input type="password" name="uid" class="form-control" disabled>
                </div>
                <div class="form-group">
                    <input type="submit" name="addUser" class="form-control btn btn-outline-info" value="Edit User">
                </div>
            </form>
        </div>
        <div class="col-md-4 mx-auto">
            <h3 class="text-center text-muted">Change Password</h3>
            <hr>
            <form action="" method="post">
                <label>Current Password:</label>
                <div class="form-group">
                    <input type="password" name="current_pass" class="form-control" placeholder="Enter Current Password">
                </div>
                <label>New Password:</label>
                <div class="form-group">
                    <input type="password" name="new_password" class="form-control" placeholder="Enter New Password">
                </div>
                <label>Repeat Password:</label>
                <div class="form-group">
                    <input type="password" name="repeat_password" class="form-control" placeholder="Repeat Password">
                </div>
                <div class="form-group">
                    <input type="submit" name="addUser" class="form-control btn btn-outline-info" value="Change password">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc.php' ?>
