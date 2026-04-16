<?php
    session_start();
    require "../config/db.php";

    if(!isset($_SESSION['user_id'])){
        header("Location: auth/login.php");
        exit();
    }  
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM students WHERE id = ?";
    $data = $conn->prepare($sql);
    $data->execute([$id]);
    $student = $data->fetch();


?>
<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student ma'lumotlari</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: #fff;
            padding: 25px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .row {
            margin-bottom: 10px;
        }

        .label {
            font-weight: bold;
        }

        .back-btn {
            display: block;
            text-align: center;
            margin-top: 15px;
            padding: 10px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Student ma'lumotlari</h2>

    <div class="row">
        <span class="label">Ism, Familiya:</span>
        <?= $student['full_name'] ?>
    </div>

    <div class="row">
        <span class="label">Yosh:</span>
        <?= $student['age'] ?>
    </div>

    <div class="row">
        <span class="label">Sinf:</span>
        <?= $student['class_name'] ?>
    </div>

    <div class="row">
        <span class="label">Telefon:</span>
        <?= $student['phone'] ?>
    </div>

    <div class="row">
        <span class="label">Manzil:</span>
        <?= $student['address'] ?>
    </div>

    <a href="index.php" class="back-btn">← Orqaga</a>
</div>

</body>
</html>