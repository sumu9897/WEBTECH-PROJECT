<?php 

require_once 'db_connect.php';

function addRequest($data){
	$conn = db_conn();
    $selectQuery = "INSERT into request (Name, Email, Phone, Address, Message)
VALUES (:name, :email, :phone, :address, :mess)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':phone' => $data['phone'],
        	':address' => $data['address'],
        	':mess' => $data['mess']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
