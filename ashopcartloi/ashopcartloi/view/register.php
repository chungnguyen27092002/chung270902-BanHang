

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="../Assets/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/Admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../Assets/Admin/css/animate.css" rel="stylesheet">
    <link href="../Assets/Admin/css/style.css" rel="stylesheet">

</head>
<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to Lotus </h2>

                <p>
                    
Chủ đề quản trị được thiết kế hoàn hảo và chuẩn bị chính xác với hơn 50 trang với nhiều chế độ xem ứng dụng web mới hơn.
                </p>

                <p>
                Lorem Ipsum chỉ đơn giản là văn bản giả của ngành công nghiệp in ấn và sắp chữ. Lorem Ipsum là văn bản giả tiêu chuẩn của ngành kể từ những năm 1500.
                </p>

                <p>
                Khi một nhà in không rõ nguồn gốc lấy một kho kiểu chữ và xáo trộn nó để tạo thành một cuốn sách tiêu bản kiểu chữ.
                </p>

                <p>
                    <small>
Nó đã tồn tại không chỉ năm thế kỷ, mà còn là bước nhảy vọt sang sắp chữ điện tử, về cơ bản vẫn không thay đổi.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">

                <form action="register.php" method="Post" > 
            <h3>register</h3>
            <lable> Tài khoản</lable>
            <input type='text'name='TaiKhoan'class="form-control" required="" placeholder="Nhập tên đăng nhập..."/> 
            <lable> Mật khẩu</lable>
            <input type='password' name='MatKhau'class="form-control" required="" placeholder="Nhập tên mật khẩu nhập..."/> 
	     <lable>Email</lable>
            <input type='text'name='email'class="form-control" required="" placeholder="Nhập tên email..."/>
	     <lable>Số điện thoại</lable>
            <input type='text'name='Sodienthoai'class="form-control" required="" placeholder="Nhập số điện thoại..."/>
		
		<input type="submit" name="dangky" value="REGISTER"/>
        <a href="http://www.trianh.com.vn/ashopcartloi/ashopcartloi/view/login.php">
            <div class="button">
            LOGIN
            </div>
        </a>
        <?php require '../view/xuly1.php';?>
           
            </a>
        </form>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
                    
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2022</small>
                    </p>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
                <small>© 2022-2023</small>
            </div>
        </div>
    </div>

</body>
</html>
