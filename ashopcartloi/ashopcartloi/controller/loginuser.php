<?php
$TaiKhoan = $_POST['TaiKhoan'];
$MatKhau = $_POST['MatKhau'];
$conn = new mysqli('localhost', 'root', '', 'shop');

$sql = "SELECT * FROM tbl_user WHERE TaiKhoan = '$TaiKhoan'";
$result = $conn->query($sql)->fetch_assoc();

if ($result['MatKhau'] == $MatKhau){
    // <a href="http://www.loinguyen.com.vn/ashopcartloi/controller/index.php?act=trangchu"></a>;
    header("Location:../controller/index.php?act=trangchu");
}
// else if ($sql = "SELECT * FROM tbl_user WHERE TaiKhoan = '$TaiKhoan'")
// $result = $conn->query($sql)->fetch_assoc();

// else if($result['MatKhau'] == $MatKhau){
//     header("Location: trangchu.php");
// }
else{
   
    echo'Thông tin đăng nhập sai';
}


$conn->close();
?>