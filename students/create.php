<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student Create</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-box {
            background: #fff;
            padding: 25px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .form-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 15px;
        }

        .input-box label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
            color: #555;
        }

        .input-box input,
        .input-box textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            outline: none;
        }

        .input-box textarea {
            resize: none;
            height: 80px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: #fff;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn:hover {
            background: #0056b3;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

<div class="form-box">
    <h2>Student Qo‘shish</h2>

    <form action="store.php" method="POST">
        <div class="input-box">
            <label>Full Name</label>
            <input type="text" name="full_name" required>
        </div>

        <div class="input-box">
            <label>Age</label>
            <input type="number" name="age" required>
        </div>

        <div class="input-box">
            <label>Class Name</label>
            <input type="text" name="class_name" required>
        </div>

        <div class="input-box">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="+998..." required>
        </div>

        <div class="input-box">
            <label>Address</label>
            <textarea name="address" required></textarea>
        </div>

        <button type="submit" class="btn">Saqlash</button>
    </form>

    <a href="#" class="back">← Orqaga</a>
</div>

</body>
</html>