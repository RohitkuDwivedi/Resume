<?php $page="dummy" ?>
<?php require_once 'header.php';?>
<?php
unset($_SESSION["user_name"]);
session_destroy();
redirect("login.php");
?>
<?php require_once 'footer.php';?>
