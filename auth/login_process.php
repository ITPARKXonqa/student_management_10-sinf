<?php
session_start();
include '../config/db.php';

$username = $_POST['username'];
$password = $_POST['password'];

// sql
$sql = "SELECT * FROM users WHERE username = ? AND password = ?";
// so'rovni tayyorlash
$data = $conn->prepare($sql);
//so'rovni ishga tushirish
$data->execute([$username, $password]);
//ma'lumotni olish
$user =  $data->fetch();
if($user){
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: ../dashboard.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}