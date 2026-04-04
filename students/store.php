<?php
session_start();
include '../config/db.php';

if(!isset($_SESSION['user_id'])){
    header("Location: ../auth/login.php");
    exit();
} 

$full_name = $_POST['full_name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$class_name = $_POST['class_name'];


$sql = "INSERT INTO students (full_name, age, phone, address, class_name)
        VALUES(?, ?, ?, ?, ?) ";

// so'rovni tayyorlash
$data = $conn->prepare($sql);
//so'rovni ishga tushirish
$data->execute([$full_name, $age, $phone, $address, $class_name]);

header("Location: index.php");
exit();