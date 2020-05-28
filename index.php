<?php include 'includes/header.inc.php'; ?>

<?php if(isset($_SESSION['name'])) { ?>

<?php include 'includes/sidebar.inc.php'; ?>

<?php include 'includes/navigation.inc.php'; ?>

<?php include 'includes/footer.inc.php'; ?>

<?php
    }
    else
    {
    header("Location: login.php?msg=login");
    exit();
    }
?>
