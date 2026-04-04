<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            padding: 10px 15px;
            background: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
        }

        .add-btn:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        thead {
            background: #007bff;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #e9f5ff;
        }

        .actions a {
            margin: 0 5px;
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            font-size: 13px;
        }

        .view {
            background: #17a2b8;
        }

        .edit {
            background: #ffc107;
            color: black;
        }

        .delete {
            background: #dc3545;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Students List</h2>

    <a href="create.php" class="add-btn">+ Student qo'shish</a>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Full Name</th>
                <th>Age</th>
                <th>Class</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>Ali Valiyev</td>
                <td>18</td>
                <td>10-A</td>
                <td>+998901234567</td>
                <td>Toshkent</td>
                <td>2026-04-02</td>
                <td class="actions">
                    <a href="#" class="view">Ko'rish</a>
                    <a href="#" class="edit">Tahrirlash</a>
                    <a href="#" class="delete">O'chirish</a>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>Vali Aliyev</td>
                <td>17</td>
                <td>9-B</td>
                <td>+998909876543</td>
                <td>Samarqand</td>
                <td>2026-04-01</td>
                <td class="actions">
                    <a href="#" class="view">Ko'rish</a>
                    <a href="#" class="edit">Tahrirlash</a>
                    <a href="#" class="delete">O'chirish</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>