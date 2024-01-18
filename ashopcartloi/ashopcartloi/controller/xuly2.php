<?php
//header('Content-Type: text/html; charset=utf-8');
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'shop') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");

// Dùng isset để kiểm tra Form
if(isset($_POST['dangky'])){
$TaiKhoan = trim($_POST['TaiKhoan']);
$MatKhau = trim($_POST['MatKhau']);
$email = trim($_POST['email']);
$Sodienthoai = trim($_POST['Sodienthoai']);


if (empty($TaiKhoan)) {
array_push($errors, "Username is required"); 
}
if (empty($email)) {
array_push($errors, "Email is required"); 
}
if (empty($Sodienthoai)) {
array_push($errors, "Password is required"); 
}
if (empty($MatKhau)) {
array_push($errors, "Two password do not match"); 
}

// Kiểm tra username hoặc email có bị trùng hay không
$sql = "SELECT * FROM tbl_user WHERE TaiKhoan = '$TaiKhoan' OR email = '$email'";

// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($result) > 0)
{
echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="registeruser.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql = "INSERT INTO tbl_user (TaiKhoan, MatKhau, email, Sodienthoai) VALUES ('$TaiKhoan','$MatKhau','$email','$Sodienthoai')";
echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="registeruser.php";</script>';

if (mysqli_query($conn, $sql)){
echo "Tên đăng nhập: ".$_POST['TaiKhoan']."<br/>";
echo "Mật khẩu: " .$_POST['MatKhau']."<br/>";
echo "Email đăng nhập: ".$_POST['email']."<br/>";
echo "Số điện thoại: ".$_POST['Sodienthoai']."<br/>";
}
else {
echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="registeruser.php";</script>';
}
}
}
?>