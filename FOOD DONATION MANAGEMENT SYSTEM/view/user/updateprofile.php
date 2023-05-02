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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    

</head>

<body>
    <?php include './header.php'; ?>
    <?php include'./sideber2.php';?>


            <h3>Update Profile</h3>
            <hr>

            <form action="../../controller/user/profile_action.php" method="POST" enctype="multipart/form-data">




                    <img src="<?php if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                                    if (!file_exists("../../images/user_Images/$fileName")) {
                                        echo "../../images/user_Images/temp.png";
                                    } else {
                                        echo "../../images/user_Images/$fileName";
                                    }
                                } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    echo "../../images/user_Images/$fileName";
                                } else {
                                    echo "../../images/user_Images/temp.png";
                                } ?>" alt="Profile Picture" width="75px" height="75px" style="border-radius: 50%"> <br>
                    <input type="file" name="profilePic" id="profilePic" style="margin: 5px"><br><br>

                    


                    <label>Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name"
                        value="<?php echo $P_name; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $nameError; ?></span><br><br>


                    <label>E-mail</label>
                    <input type="text" name="email" id="email" placeholder="Enter Your Email"
                        value="<?php echo $P_mail; ?>" disabled>
                    <span class="required">&nbsp; * &nbsp;<?php echo $emailError; ?></span><br><br>

                    <!-- Gender -->

                    <label>Gender</label>
                    <input type="radio" name="gender" value="Male" <?php if ($P_gender === "Male") {
                                                                        echo "checked";
                                                                    } ?> />
                    Male
                    <input type="radio" name="gender" value="Female" <?php if ($P_gender === "Female") {
                                                                            echo "checked";
                                                                        } ?> />
                    Female
                    <input type="radio" name="gender" value="Other" <?php if ($P_gender === "Other") {
                                                                        echo "checked";
                                                                    } ?> /> Other
                    <span class="required"> &nbsp; * &nbsp;<?php echo $genderError; ?></span><br><br>


                    <label>Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Your Phone"
                        value="<?php echo $P_phone; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $phoneError; ?></span><br><br>




   
                    <label>Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter Your Address"
                        value="<?php echo $P_address; ?>">
                    <span class="required">&nbsp; * &nbsp;<?php echo $addressError; ?></span><br><br>


 



        
                    <input type="submit" class="request-button" value="Update"></input>
                    </span></p>

            </form>





    <?php include './footer.php'; ?>
</body>

</html>
