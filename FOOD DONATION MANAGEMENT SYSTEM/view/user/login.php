<?php
session_start();



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
        // Use the cookie value
        $cookie_mail  = $_COOKIE['email'];
        $cookie_pass  = $_COOKIE['password'];
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
   <title>FDMS | User Log in Page </title>
   <script>  
		function validateform(){  
		var mail=document.myform.mail.value;  
		var password=document.myform.password.value;  
		  
		if (mail==null || mail==""){  
		  alert("Email can't be blank");  
		  return false;  
		}else if(password==null || password ==""){
            alert("Password can't be blank"); 
            return false;  
        }else if(password.length<8){  
		  alert("Password must be at least 8 characters long.");  
		  return false;  
		  }  
		}
		function checkMail() {
			if (document.getElementById("mail").value == "") {
			  	document.getElementById("mailErr").innerHTML = "Email can't be blank";
			  	document.getElementById("mail").style.borderColor = "red";
			}else{
			  	document.getElementById("mailErr").innerHTML = "";
			  	document.getElementById("mail").style.borderColor = "black";

			}
			
        }
        function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("password").style.borderColor = "red";
			}else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("password").style.borderColor = "black";
			}
        }

</script>
<style>
        body {
        background: url("../../images/USERlogin.jpg") no-repeat center center fixed;
        background-size: cover;
    }
    .required {
        color: red;
    }
    </style> 
</head>

<body style="text-align: center; width:800px;position: absolute;top: 25%; left: 25%;">
<div style="background-color: whitesmoke;">
   <fieldset>
    <legend style="text-align: center;"><h2>USER LOG IN</h2></legend>


        <form name="myform" action="../../controller/user/login_action.php" method="POST" onsubmit="validateform()" style="text-align: center;">

                <label>EMAIL:</label>
                <input type="text" name="mail" id="mail" placeholder="Enter Your Email" onblur="checkMail()" onkeyup="checkMail()">
                
                <span class="required-mail">&nbsp; * &nbsp;<?php echo $mailError; ?></span>
                <p id="mailErr"></p>

                

                <label>PASSWORD</label>


                <input type="password" name="password" id="password" placeholder="Enter Your Password" onblur="checkPass()">
                    
    
                <span class="required-pass">&nbsp; * &nbsp;<?php echo $passwordError; ?></span>
                <p id="passErr"></p>

                <p><input type="checkbox" name="rememberMe" id="rememberMe"> Remember Me</p>
                <p> <a href="./forgetpassword.php">Forgot Password?</a> </p>
                <button type="submit" class="signin-button">Sign in</button>
                <p> <span> Didn't have an account? <a href="./registration.php">Signup</a>
                    </span></p>

                    <span><a href="../../index.php">HOME</a></span>

        </form>


        </fieldset>
        </div>
</body>

</html>
