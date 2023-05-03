<?php
session_start();
$_SESSION['status'] = false;
session_destroy();
header('Location:../../view/user/login.php');