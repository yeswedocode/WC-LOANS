<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container" style="padding-top:2rem">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" href="#person">Step 1:&nbsp;Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addFinancial.php">Step 2:&nbsp;Financial Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Step 3:&nbsp;Additional Information</a>
                </li>
            </ul>
        </div>

        <div class="col-md-6 mx-auto" style="padding-top:3rem">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-muted">Personal Information</h3>
                    <hr>
                    <form action="" method="post">
                    <label>Image:</label>
                    <div class="form-group">
                        <input type="file" name="imgFile" class="form-control">
                    </div>
                    <label>Member ID:</label>
                    <div class="form-group">
                        <input type="text" name="id" class="form-control" placeholder="Enter Member ID">
                    </div>
                    <label>Full Name:</label>
                    <div class="form-group">
                        <input type="text" name="uid" class="form-control" placeholder="Enter Full Name">
                    </div>
                    <label>Phone:</label>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number">
                    </div>
                    <label>Address 1:</label>
                    <div class="form-group">
                        <input type="text" name="address1" class="form-control" placeholder="Enter Address 1">
                    </div>
                    <label>Address 2:</label>
                    <div class="form-group">
                        <input type="text" name="address2" class="form-control" placeholder="Enter Address 2">
                    </div>
                    <label>Region:</label>
                    <div class="form-group">
                        <input type="text" name="region" class="form-control" placeholder="Enter Region">
                    </div>
                    <label>City:</label>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control" placeholder="Enter City">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="addPersonalDetails" class="form-control btn btn-outline-info" value="Add Personal Info">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc.php'; ?>
