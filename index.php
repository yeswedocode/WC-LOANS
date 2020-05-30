<?php include 'includes/header.inc.php'; ?>

<?php include 'heart/allinone.php'; ?>

<?php if(isset($_SESSION['name'])) { ?>

<?php include 'includes/sidebar.inc.php'; ?>

<?php include 'includes/navigation.inc.php'; ?>

<?php include 'includes/footer.inc.php'; ?>

<?php } ?>

<?php
if(!$_SESSION['name'])
{
    header("Location: login.php?msg=login");
    exit();
}

?>
