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
</head>

<body>
    <br>

    <h3>Thêm Sản Phẩm</h3>
    <form action="index.php?module=product&action=insert" method="POST" enctype="multipart/form-data">

        <table>
            <tr>
                <td>TênSP</td>
                <td><input type="text" name="name" value=""></td>
            </tr>

            <tr>
                <td>Ảnh</td>
                <td><input type="text" name="img"></td>
            </tr>

            <tr>
                <td>Giá</td>
                <td>
                    <input type="int" name="price">
                </td>
            </tr>

            <tr>
                <td>mota</td>
                <td>
                    <input type="text" name="mota" value="">

                </td>
            </tr>
            <tr>
                <td>Loại</td>
                <td>
                    <select name="tbl_cata">
                        <?php
                        //$c_rows = Query("select * from class");
                        while ($c_row = mysqli_fetch_array($c_rows)) {
                        ?>
                            <option value="<?php echo $c_row['id']; ?>">
                                <?php echo $c_row['name']; ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>

                </td>
            </tr>


            <tr>
                <td><input type="submit" value="Gửi"></td>
                <td><input type="reset" value="Nhập lại"></td>
            </tr>
        </table>

    </form>

    <a href="http://localhost/ashopcartloi/ashopcartloi/view/login.php" class="btn btn-info">Đăng xuất</a>
    <a href="http://localhost/ashopcartloi/ashopcartloi/view/trangchuadmin.php" class="btn btn-info">Trang Admin</a>

    </div>
</body>

</html>