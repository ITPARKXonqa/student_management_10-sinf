<?php session_start(); ?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            height: 100vh;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            width: 320px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .input-box {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-box label {
            font-size: 14px;
            color: #555;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
            transition: 0.3s;
        }

        .input-box input:focus {
            border-color: #4facfe;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #4facfe;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            background: #00c6ff;
        }

        .footer {
            margin-top: 15px;
            font-size: 13px;
            color: #777;
        }

        .footer a {
            color: #4facfe;
            text-decoration: none;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login</h2>

    <form action="login_process.php" method="POST" >
        <div class="input-box">
            <label>Username</label>
            <input name="username" type="text" placeholder="Username kiriting" required>
        </div>

        <div class="input-box">
            <label>Password</label>
            <input name="password" type="password" placeholder="Password kiriting" required>
        </div>

        <button class="btn">Kirish</button>
    </form>

    <div class="footer">
        Hisobingiz yo‘qmi? <a href="#">Ro‘yxatdan o‘tish</a>
    </div>
    
    <?php
        if(isset($_GET['error'])){
            echo '<p style="color:red;">Login yoki parol xato!</p>';
        }
    ?>
</div>

</body>
</html>