<?php
$rows = $phukien;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <br>

</head>

<body>
    <div class="container">
        <h3>DANH SÁCH mặt nạ</h3>
        <a class="btn btn-info" href="index.php?module=phukien&action=new">Thêm phụ kiện</a>
        <br>
        <br>
        <table class="table table-dark">
            <tr>
                <th>STT</th>
                <th> tên SP</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Mô tả</th>

                <th>thao tác</th>
            </tr>

            <?php
            $count = 0;


            //Query();
            while ($row = mysqli_fetch_array($rows)) {
                $count++;
            ?>
                <tr>
                    <td><?php echo $count; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['img']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['mota']; ?></td>




                    <td>
                        <a href="index.php?module=phukien&action=edit&id=<?php echo $row['id']; ?>">Sửa</a> |
                        <a href="index.php?module=phukien&action=delete&id=<?php echo $row['id']; ?>
            " onclick="return confirm('Bạn thực sự muốn xoá chứ?')">Xoá</a>
                    </td>
                </tr>

            <?php
            }
            ?>


        </table>
        <a href="http://localhost/ashopcartloi/ashopcartloi/view/login.php" class="btn btn-info">Đăng xuất</a>
        <a href="http://localhost/ashopcartloi/ashopcartloi/view/trangchuadmin.php" class="btn btn-info">Trang Admin</a>
</body>

</html>


</body>

</html>