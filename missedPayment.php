<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <div class="">
                <h3><i class="fas fa-file"></i>&nbsp;List of Missed Payments</h3>
            </div>
            <div class="jumbotron">
                <h6>Missed Payment</h6>
                <hr>
                <table class="table table-striped" id="dataTable">
                    <thead class="thead-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Balance</th>
                        <th>Payment Date</th>
                        <th>Action</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc.php'; ?>
