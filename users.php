<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table table-striped" id="dataTable">
                <thead class="thead-dark">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Admin</td>
                        <td>Admin@admin.com</td>
                        <td>
                            <a href="editUser.php"><span class="badge badge-pill badge-info">Edit</span></a>
                            |
                            <a href="#" ><span class="badge badge-pill badge-danger">Delete</span></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/footer.inc.php' ?>
