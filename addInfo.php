<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container" style="padding-top:2rem">
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link" href="addLoan.php">Step 1:&nbsp;Personal Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="addFinancial.php">Step 2:&nbsp;Financial Information</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="addInfo.php">Step 3:&nbsp;Additional Information</a>
                </li>
            </ul>
        </div>

        <div class="col-md-6 mx-auto" style="padding-top:3rem">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center text-muted">Additional Information</h3>
                    <hr>
                    <form action="" method="post">
                        <label>Approved By:</label>
                        <div class="form-group">
                            <input type="text" name="approved_name" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <label>Status:</label>
                        <div class="form-group">
                            <input type="text" name="status" class="form-control" placeholder="Enter Status">
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

<?php include 'includes/footer.inc.php'; ?>
