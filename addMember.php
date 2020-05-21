<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container">
    <br>
    <br>
     <br>
     <br>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h3 class="text-center text-muted">Add New Member</h3>
            <hr>
            <form action="" method="post">
                <label>Member ID:</label>
                <div class="form-group">
                    <input type="text" name="id" class="form-control" placeholder="Enter Member ID">
                </div>
                <label>Name:</label>
                <div class="form-group">
                    <input type="text" name="uid" class="form-control" placeholder="Enter Full Name">
                </div>
                <label>Phone:</label>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone number">
                </div>
                <label>Address:</label>
                <div class="form-group">
                   <textarea class="form-control" rows="2" name="address" placeholder="Enter Your Full Address"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="addUser" class="form-control btn btn-outline-info" value="Add Member">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc.php' ?>
