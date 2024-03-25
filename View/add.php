<?php
require_once ('../Model/nhanvien.model.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../public/Css/add.css">
    <style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-group button {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }

    .form-group button:hover {
        background-color: #0056b3;
    }
    </style>
</head>

<body>

    <body>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label for="Ma_NV">Mã nhân viên:</label>
                <input type="text" name="Ma_NV" required>
            </div>
            <div class="form-group">
                <label for="Ten_NV">Họ và tên:</label>
                <input type="text" name="Ten_NV" required>
            </div>
            <div class="form-group">
                <label for="Phai">Giới tính:</label>
                <select name="Phai" required>
                    <option value="Nam">Nam</option>
                    <option value="Nữ">Nữ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Noi_Sinh">Nơi sinh:</label>
                <input type="text" name="Noi_Sinh" required>
            </div>
            <div class="form-group">
                <label for="Ma_Phong">Mã phòng:</label>
                <input type="text" name="Ma_Phong" required>
            </div>
            <div class="form-group">
                <label for="Luong">Mức lương:</label>
                <input type="text" name="Luong" required>
            </div>
            <div class="form-group">
                <button type="submit">Thêm nhân viên</button>
            </div>
        </form>
    </body>
</body>

</html>