<?php

session_start();


$newPassError = "";
$ConfirmPassError = "";
$showErrorPass = "none";
$showErrorConfirmPass = "none";

$cookie_mail = "";
$cookie_pass = "";

if (isset($_SESSION['newPassError'])) {
    $newPassError = $_SESSION['newPassError'];
    $showErrorPass = "inline";
    unset($_SESSION['newPassError']);
} else {
    $showErrorPass = "none";
}
if (isset($_SESSION['ConfirmPassError'])) {
    $ConfirmPassError = $_SESSION['ConfirmPassError'];
    $showErrorConfirmPass = "inline";
    unset($_SESSION['ConfirmPassError']);
} else {
    $showErrorConfirmPass = "none";
}




if (isset($_COOKIE['email'])) {
    if (isset($_COOKIE['email'])) {
        // Use the cookie value
        $cookie_mail  = $_COOKIE['email'];
        $cookie_pass  = $_COOKIE['password'];
    }
}


?>









<!DOCTYPE html>
<html lang="en">

<head>

    <title>FDMS | Create New Password</title>

</head>

<body >
    <form action="../../controller/donor/NewPassword_Handler.php"c lass="text-center" method="post">
        <input class="form-control" type="text" name="newPass" id="newPass" placeholder="New Password">
        <p style="color: red;"><?php if ($newPassError != "") {
            echo $newPassError;
        } else {
            echo "";
            } ?></p>
            <input class="form-control" type="password" name="ConfirmNewPass" id="ConfirmNewPass" placeholder="Confirm Password">
            <p style="color: red;"><?php if ($ConfirmPassError != "") {
                echo $ConfirmPassError;
            } else {
                echo "";
                } ?></p>
                <button type="submit">Confirm</button>
            </form>
                                    
</body>

</html>
