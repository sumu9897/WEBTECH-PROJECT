<?php
// session_start();

require_once 'db_connect.php';


function showAllusers()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function show_all_data()
{
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `user` ';
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function show_single_user_data($colName, $id)
{

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `admin` where $colName = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}



function show_single_data($colName, $id)
{

    $conn = db_conn();
    $selectQuery = "SELECT * FROM `user` where $colName = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function update_user_data($colName, $id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `user` SET 
                        `user_mail` = :user_mail, 
                        `password` = :password, 
                        `user_name` = :user_name, 
                        `user_phone` = :user_phone, 
                        `user_image` = :user_image, 
                        `user_gender` = :user_gender, 
                        `user_address` = :user_address, 

                    WHERE `$colName` = :id";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':user_mail' => $data['user_mail'],
            ':password' => $data['password'],
            ':user_name' => $data['user_name'],
            ':user_phone' => $data['user_phone'],
            ':user_image' => $data['user_image'],
            ':user_gender' => $data['user_gender'],
            ':user_address' => $data['user_address'],
            ':id' => $id
        ]);
        $conn = null;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
}

function update_data($colName, $id, $data)
{
    $conn = db_conn();
    $selectQuery = "UPDATE `user` SET 
                        `user_mail` = :user_mail, 
                        `password` = :password, 
                        `user_name` = :user_name, 
                        `user_phone` = :user_phone, 
                        `user_image` = :user_image, 
                        `user_gender` = :user_gender, 
                        `user_address` = :user_address, 

                    WHERE `$colName` = :id";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':user_mail' => $data['user_mail'],
            ':password' => $data['password'],
            ':user_name' => $data['user_name'],
            ':user_phone' => $data['user_phone'],
            ':user_image' => $data['user_image'],
            ':user_gender' => $data['user_gender'],
            ':user_address' => $data['user_address'],
            ':id' => $id
        ]);
        $conn = null;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
}








function delete_user($colName, $id)
{
    $conn = db_conn();
    $selectQuery = "DELETE FROM 'user' WHERE `$colName` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function search_specific_data($colNames, $tableName, $colName, $id)
{

    $conn = db_conn();
    $selectQuery = "SELECT $colNames FROM `$tableName` where $colName = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function add_user($data)
{

    $conn = db_conn();
    $selectQuery = "INSERT into user (user_mail, password, user_name, user_phone, user_image,  user_gender, user_address)
    VALUES (:user_mail, :password, :user_name, :user_phone, :user_image, :user_gender, :user_address)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':user_mail' => $data['user_mail'],
            ':password' => $data['password'],
            ':user_name' => $data['user_name'],
            ':user_phone' => $data['user_phone'],
            ':user_image' => $data['user_image'],
            ':user_gender' => $data['user_gender'],
            ':user_address' => $data['user_address'],

        ]);
        $conn = null;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
}


function send_request_request($data)
{
    $conn = db_conn();
    $selectQuery = "INSERT into request_request (food_image, food_name, food_gender, food_age, user_image, user_name, user_mail, user_phone, request_date, request_status)
    VALUES (:food_image, :food_name, :food_gender, :food_age, :user_image, :user_name, :user_mail, :user_phone, :request_date, :request_status)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':food_image' => $data['food_image'],
            ':food_name' => $data['food_name'],
            ':food_gender' => $data['food_gender'],
            ':food_age' => $data['food_age'],
            ':user_image' => $data['user_image'],
            ':user_name' => $data['user_name'],
            ':user_mail' => $data['user_mail'],
            ':user_phone' => $data['user_phone'],
            ':request_date' => $data['request_date'],
            ':request_status' => $data['request_status']
        ]);
        $conn = null;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
}


function update_request_status($tableName, $request_status, $colName, $position)
{
    $conn = db_conn();
    $selectQuery = "UPDATE $tableName SET 
                        request_status = :request_status 
                    WHERE $colName = :id";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':request_status' => $request_status,
            ':id' => $position
        ]);
        $conn = null;
        return true;
    } catch (PDOException $e) {
        echo $e->getMessage();
        $conn = null;
        return false;
    }
}