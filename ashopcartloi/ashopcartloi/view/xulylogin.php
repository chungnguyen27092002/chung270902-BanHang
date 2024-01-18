<?php
$TaiKhoan = $_POST['TaiKhoan'];
$MatKhau = $_POST['MatKhau'];
$conn = new mysqli('localhost', 'root', '', 'shop');

$sql = "SELECT * FROM tbl_admin WHERE TaiKhoan = '$TaiKhoan'";
$result = $conn->query($sql)->fetch_assoc();

if ($result['MatKhau'] == $MatKhau){
    header("Location:trangchuadmin.php");
}
// else if ($sql = "SELECT * FROM tbl_user WHERE TaiKhoan = '$TaiKhoan'")
// $result = $conn->query($sql)->fetch_assoc();

// else if($result['MatKhau'] == $MatKhau){
//     header("Location: trangchu.php");
// }
else{
    echo'thong tin dang nhap sai';
}



$conn->close();
?>