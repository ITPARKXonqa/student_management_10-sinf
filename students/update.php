<?php
    session_start();
    require "../config/db.php";

    if(!isset($_SESSION['user_id'])){
        header("Location: auth/login.php");
        exit();
    }  

    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $class_name = $_POST['class_name'];

    $sql = "UPDATE students
            SET full_name = ?, age = ?, phone = ?, address = ?, class_name = ?
            WHERE id = ?";
    $data = $conn->prepare($sql);
    $data->execute([$full_name, $age, $phone, $address, $class_name, $id]);

    header("Location: index.php");
    exit();

    
?>