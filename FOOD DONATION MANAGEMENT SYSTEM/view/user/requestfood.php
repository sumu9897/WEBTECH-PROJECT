<?php
error_reporting(0);
session_start();
if (!isset($_SESSION["loginUser_Name"])) {
    header('Location:Login.php');
}

//  Variable Declarations
$nameError = "";
$emailError = "";
$passwordError = "";
$genderError = "";
$phoneError = "";
$addressError = "";


$fileName = $_SESSION['user_image'];


if (isset($_SESSION['S_nameError'])) {

    $nameError = $_SESSION['S_nameError'];
    unset($_SESSION['S_nameError']);
}


if (isset($_SESSION['S_emailError'])) {
    $emailError = $_SESSION['S_emailError'];
    unset($_SESSION['S_emailError']);
}


if (isset($_SESSION['S_passwordError'])) {
    $passwordError = $_SESSION['S_passwordError'];
    unset($_SESSION['S_passwordError']);
}

if (isset($_SESSION['S_genderError'])) {
    $genderError = $_SESSION['S_genderError'];
    unset($_SESSION['S_genderError']);
}

if (isset($_SESSION['S_phoneError'])) {
    $phoneError = $_SESSION['S_phoneError'];
    unset($_SESSION['S_phoneError']);
}

if (isset($_SESSION['S_addressError'])) {
    $addressError = $_SESSION['S_addressError'];
    unset($_SESSION['S_addressError']);
}




$P_name = $_SESSION["P_name"];
$P_mail = $_SESSION["P_mail"];
$P_gender = $_SESSION["P_gender"];
$P_phone = $_SESSION["P_phone"];
$P_address = $_SESSION["P_address"];
$P_password = $_SESSION["P_password"];







?>
<html>
    <head>
        <title>FDMS| Reqest Food </title>
    </head>
    <body>
    <?php include '../user/header.php'; ?>
    <?php include '../user/sideber.php'; ?>
    <h2>Request Food</h2>
    <hr>
    <form action="../../controller/user/request.php" method="POST">
            <label>Name : </label><?php echo $P_name; ?><br><br>
            <label>Email : </label><?php echo $P_mail; ?><br><br>
            <label>Phone : </label> <input type="text" name="phone" id="phone" placeholder="Enter Your Phone" value="<?php echo $P_phone; ?>">
            <span class="required">&nbsp; * &nbsp;<?php echo $phoneError; ?></span><br><br>
            <label>Pickup Address : </label>
            <input type="text" name="address" id="address" placeholder="Enter Your Address"
            value="<?php echo $P_address; ?>">
            <span class="required">&nbsp; * &nbsp;<?php echo $addressError; ?></span><br><br>
            <label>Any Message</label><textarea type="text" id="mess"></textarea><br><br>

            <input type="submit" value="Request">


        </form>
        <?php include '../user/footer.php'; ?>
    </body>
</html>