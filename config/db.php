<?php

$host = "localhost";
$dbname = "student_management_10";
$username = "root";
$password = "";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    //Xatoliklarni ko'rsatish
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("Xatolik: ". $e->getMessage());        
}