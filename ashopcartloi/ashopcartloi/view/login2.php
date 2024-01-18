

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Lotus| Login 2</title>

    <link href="../Assets/Admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Assets/Admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../Assets/Admin/css/animate.css" rel="stylesheet">
    <link href="../Assets/Admin/css/style.css" rel="stylesheet">
    <style>
.container1a{

            /* margin-top:10spx; */
            width:1100px;
            height:400px;
            /* background-color:#2B2B2B;             */
            background-color:white;
            font-family: Arial;
            margin:auto;
           

}
.content1a{
    background-color:blue;
    width: 500px;
    height:300px;
    margin:auto;
}
lable {
display:grid;
grid-template-columns: auto auto;
padding: 10px;
}
h3 {
margin-top:20px;
}
    </style>

</head>
<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to Lotus </h2>

                <p>
                    
                Chủ đề quản trị được thiết kế hoàn hảo và chuẩn bị chính xác với hơn 
                    50 trang với nhiều chế độ xem ứng dụng web mới hơn.
                </p>

                <p>
                Lorem Ipsum chỉ đơn giản là văn bản giả của ngành công nghiệp
                 in ấn và sắp chữ. Lorem Ipsum là văn bản giả tiêu chuẩn của ngành kể từ những năm 1500.
                </p>

                <p>
                Khi một nhà in không rõ nguồn gốc lấy một kho kiểu chữ và xáo trộn nó
                 để tạo thành một cuốn sách tiêu bản kiểu chữ.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">

                <form action="../controller/loginuser.php" method="Post" > 
            <h3>LOGIN</h3>
            <lable> Username</lable>
            <input type='text'name='TaiKhoan'class="form-control" required="" placeholder="Nhập tên đăng nhập..."/> 
            <lable> Passwword</lable>
            <input type='password' name='MatKhau'class="form-control" required="" placeholder="Nhập tên mật khẩu nhập..."/> 
            <input type="submit" class="div" value="Đăng nhập" />
            <a href="../controller/registeruser.php">
            <div class="div">
                Đăng ký
            </div>
            </a>
        </form>
                </div>
            </div>
        </div>
       
    </div>

</body>
<!-- <body>
    <div class="container1a">
    
                <div class="content1a">
                
                <form action="../controller/loginuser.php" method="Post" > 
                <h3>LOGIN</h3>
            <lable> Username</lable>
            <input type='text'name='TaiKhoan'class="form-control" required="" placeholder="Nhập tên đăng nhập..."/> 
            <lable> Passwword</lable>
            <input type='password' name='MatKhau'class="form-control" required="" placeholder="Nhập tên mật khẩu nhập..."/> 
            <input type="submit"  value="Đăng nhập" />
            <a href="../controller/registeruser.php">
            <div>
                Đăng ký
            </div>
            </a>
        </form>
                </div>
        
        

    </div>
</body> -->
</html>
