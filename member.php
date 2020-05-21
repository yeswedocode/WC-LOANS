<?php include 'includes/header.inc.php'; ?>

<?php include 'includes/sidebar.inc.php'; ?>

<div class="container">
    <div class="row">
        <table class="table table-striped" id="dataTable">
            <thead class="thead-dark">
                <th>Member ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>MEM 100</td>
                    <td>John Doe</td>
                    <td>0768693933</td>
                    <td>
                        <a href="editMember.php"><span class="badge badge-pill badge-info">Edit</span></a>
                        |
                        <a href="editMember.php"><span class="badge badge-pill badge-danger">Delete</span></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.inc.php' ?>
