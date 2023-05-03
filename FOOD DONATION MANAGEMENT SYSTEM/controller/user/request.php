<?php  
require_once '../../model/request.php';

if (isset($_POST['createMessage'])) {
	$data['name'] = $_POST['name'];
	$data['email'] = $_POST['email'];
	$data['phone'] = $_POST['phone'];
	$data['address'] = $_POST['address'];
    $data['mess'] = $_POST['mess'];


  if (addRequest($data)) {
  	echo 'Successfully added!!';
	  header('Location:../../view/user/available.php');
  }
} else {
	echo 'You are not allowed to access this page.';
	header('Location:../../view/user/requestfood.php');
}

?>