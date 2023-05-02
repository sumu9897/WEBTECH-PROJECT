<?php
require_once '../../model/admin.php';
session_start();



$update_location = $_SESSION['mail'];


$mailFlag = $_SESSION['mail'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newPassword = $_POST['newPass'];

    if (empty($newPassword) || strlen($newPassword) < 8) {

        $newPasswordError = "Write at least 8 Character";
        $_POST['newPass'] = "";
        $newPassword = "";
    } else if (!preg_match('/[@#$%]/', $newPassword)) {

        $newPasswordError = "Password must contain at least one special character (@, #, $, %)";
        $_POST['newPass'] = "";
        $newPassword = "";
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reTypePassword = $_POST['ConfirmNewPass'];

    if (empty($reTypePassword) || strlen($reTypePassword) < 8) {

        $reTypePasswordError = "Write at least 8 Character";
        $_POST['ConfirmNewPass'] = "";
        $reTypePassword = "";

        $reTypePasswordError = "New Password and Retype New Password must be same";
        $_POST['ConfirmNewPass'] = "";
        $reTypePassword = "";
    } else {



        //  Save the new password
        $admin_data = show_single_admin_data("admin_mail", $update_location);
        $admin_data["password"] = $newPassword;
        $update_confirmation = update_admin_data("admin_mail", $update_location, $admin_data);
        if ($update_confirmation) {
            echo "Password Updated Successfully";
            header("Location: ../../view/admin/admin_login.php");
        } else {
            header("Location: ../../view/admin/ForgetPassword.php");
        }
    }
}
