<?php
session_start();
// error_reporting(0);  // This line will hide all the given errors in php

$mailError = "";
$passwordError = "";
$showErrorMail = "none";
$showErrorPass = "none";

$cookie_mail = "";
$cookie_pass = "";

if (isset($_SESSION['emailError'])) {
    $mailError = $_SESSION['emailError'];
    $showErrorMail = "inline";
    unset($_SESSION['emailError']);
} else {
    $showErrorMail = "none";
}
if (isset($_SESSION['passwordError'])) {
    $passwordError = $_SESSION['passwordError'];
    $showErrorPass = "inline";
    unset($_SESSION['passwordError']);
} else {
    $showErrorPass = "none";
}




if (isset($_COOKIE['email'])) {
    if (isset($_COOKIE['email'])) {

        $cookie_mail  = $_COOKIE['email'];
        $cookie_pass  = $_COOKIE['password'];
    }
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>FDMS| Forget Password</title>
    <script>  

function validateform(){  
var mail=document.myform.mail.value;  

  
if (mail==null || mail==""){  
  alert("Email can't be blank");  
  return false;  
}
function checkEmail() {
    if (document.getElementById("mail").value == "") {
          document.getElementById("mailErr").innerHTML = "Email can't be blank";
          document.getElementById("mail").style.borderColor = "red";
    }else{
          document.getElementById("mailErr").innerHTML = "";
          document.getElementById("mail").style.borderColor = "black";

    }
    
}
}

</script> 
<style>
           body {
        background: url("../../images/ForgotPassword.png");
        background-size: cover;
    }
    button {
  
  color: grey;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;

  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    </style>
</head>

<body style="text-align: center; width:600px;position: absolute;top: 20%; left: 35%;">
<fieldset style="text-align: center; width:400px;" >
    <form name="myform"  onsubmit="validateform();" action="../../controller/user/ForgetPassword_action.php" class="text-center" method="post">
        <h2>Forget Password</h2>
        <hr>
        <label>Email : </label>
        <input class="form-control" type="text" name="mail" id="mail" placeholder="Enter Your email"  onblur="checkEmail()" onkeyup="checkMail()">
        <p style="color: red;">
        <?php if ($mailError != "") {
            echo $mailError;
        } else {
            echo "";
            } ?></p>
            <button type="submit">Submit</button><br>
            <span><a href="./login.php">Log In</a></span>
        </form>
</fieldset>

</body>

</html>
