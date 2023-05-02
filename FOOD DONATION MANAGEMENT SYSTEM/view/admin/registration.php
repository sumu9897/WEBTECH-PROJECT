<?php
session_start();



// Variable
$nameError = $emailError = $passwordError = $phoneError = "";




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


if (isset($_SESSION['S_phoneError'])) {
    $phoneError = $_SESSION['S_phoneError'];
    unset($_SESSION['S_phoneError']);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>FDMS| Admin Registration Page</title>
    <script>  
		function validateform(){  
            var name=document.myform.name.value;
            var email=document.myform.email.value;
            var password=document.myform.password.value; 
            var phone= document.myform.phone.value;
		  
		if (name==null || name==""){  
		  alert("Name can't be blank");  
		  return false;
        }else if(email==null || email==""){  
		  alert("Email can't be blank");  
		  return false;  
		}else if(password==null || password ==""){
            alert("Password can't be blank"); 
            return false;  
        }else if(password.length<8){  
		  alert("Password must be at least 8 characters long.");  
		  return false;  
        }else if (phone==null  || phone ==""){
            alert("Phone Number can't be blank");
            return false;  
        }else if (phone.length==11){
            alert("Phone Number must be 11 digit.");  
		  return false;
        }
		}
        function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
			  	document.getElementById("name").style.borderColor = "black";

			}
			
        }

		function checkMail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "Name can't be blank";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("emailErr").innerHTML = "";
			  	document.getElementById("email").style.borderColor = "black";

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
        function checkPhone(){
        	if (document.getElementById("phone").value == "") {
			  	document.getElementById("phoneErr").innerHTML = "Phone can't be blank";
			  	document.getElementById("phone").style.borderColor = "red";
			}else{
				document.getElementById("phoneErr").innerHTML = "";
			  	document.getElementById("phone").style.borderColor = "black";
			}
        }
</script> 
    <style>
      
    .required {
        color: red;
    }
    </style> 
</head>

<body style="text-align: center; width:500px;position: absolute;top: 5%;
            left: 30%;" >

    <fieldset>
        <legend>
            <h2>Sign Up</h2>
        </legend>


        <form name="myform"  onsubmit="validateform();"  action="../../controller/admin/registration_handler.php" method="POST">


                <label>Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Your name" onblur="checkName()" onkeyup="checkName()">
                <span class="required">&nbsp; * &nbsp;<?php echo $nameError; ?></span>
                <br><br>


                <label>E-mail</label>
                <input type="text" name="email" id="email" placeholder="Enter Your Email"  onblur="checkMail()"onkeyup="checkMail()">
                <span class="required">&nbsp; * &nbsp;<?php echo $emailError; ?></span>
                <br><br>



                <label>Password</label>
                <input type="text" name="password" id="password" placeholder="Enter Your Password" onblur="checkPass()">
                <span class="required">&nbsp; * &nbsp;<?php echo $passwordError; ?></span>
                <br><br>




  

                <label>Phone</label>
                <input type="number" name="phone" id="phone" placeholder="Enter Your Phone" onblur="checkPhone()" onkeyup="checkPhone()">
                <span class="required">&nbsp; * &nbsp;<?php echo $phoneError; ?></span>
                <br><br>



                <button type="submit" class="signin-button">Signup</button>
                </span></p>
                <span>Already Have a Account ? <a href="./admin_login.php"> Log in</a></span><br>

                <span><a href="../../index.php">HOME</a></span>
        </form>

    </fieldset>



</body>

</html>