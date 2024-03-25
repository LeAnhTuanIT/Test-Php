<?php
require_once ("../Model/nhanvien.model.php");
?>

<?php

$result = NhanVien::listNhanVien();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/Css/index.css">
    <title>Document</title>
</head>

<body>
    <div class="wapper">
        <h2 class="title">Quản Lý Nhân Sự</h2>
        <div class="container">

            <div class="admin-role">
                <a href="./add.php">Thêm Nhân Viên</a>
            </div>

            <table>
                <thead class="title-table">
                    <tr>
                        <th class="title">Mã Nhân Viên</th>
                        <th class="title">Họ và Tên</th>
                        <th class="title">Giới tính</th>
                        <th class="title">Nơi Sinh</th>
                        <th class="title">Quản Trị</th>
                        <th class="title">Mức Lương</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    foreach ($result as $row) {
                        echo "<tr class='table-row'>";
                        echo "<td class='table-data'>" . $row["Ma_NV"] . "</td>";
                        echo "<td class='table-data'>" . $row["Ten_NV"] . "</td>";
                        echo "<td class='table-data'>";
                        if ($row["Phai"] == "NU") {
                            echo "<img class='img-gen' src='https://www.freeiconspng.com/thumbs/female-icon/female-icon-27.png' alt='Nữ'>";
                        } else {
                            echo "<img class='img-gen' src='https://secure.webtoolhub.com/static/resources/icons/set110/2327b4c4.png' alt='Nam'>";
                        }
                        echo "</td>";
                        echo "<td class='table-data'>" . $row["Noi_Sinh"] . "</td>";
                        echo "<td class='table-data'>" . $row["Ten_Phong"] . "</td>";
                        echo "<td class='table-data'>" . $row["Luong"] . "</td>";
                        echo "</tr>";

                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>