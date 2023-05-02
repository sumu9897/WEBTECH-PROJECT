<?php

require_once '../../model/user.php';

error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:login.php');
}


$P_id = $_SESSION["P_id"];



?>

<html>
    <head>
        <title>Donor Dashboard</title>
    </head>
    <body>
    <?php include '../user/header.php'; ?>

    <?php include '../user/sideber.php'; ?>

    <h2><b>Welcome</b>to <b>Food Donation Management System</b></h2>
    


    <?php include '../user/footer.php'; ?>
    </body>
</html>