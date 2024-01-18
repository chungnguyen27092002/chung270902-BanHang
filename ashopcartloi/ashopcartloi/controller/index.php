<?php
    session_start();
    include "../model/thuvien.php";
    include "../model/sanpham.php";
    include "../model/phukien.php";
    

    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    $logined=0;
    if(!isset($_SESSION['luottruycap'])) $_SESSION['luottruycap']=0;
    else $_SESSION['luottruycap']+=1;

    if(isset($_COOKIE['TaiKhoan'])&&isset($_COOKIE['MatKhau'])){
        echo "Cookie đã đăng ký là: ".$_COOKIE['TaiKhoan']." - ".$_COOKIE['MatKhau'];
    }

    if(isset($_GET['delc'])&&($_GET['delc']==1)){
        setcookie("TaiKhoan","",time()-(86400*7));
        setcookie("MatKhau","",time()-(86400*7));
        echo "<br><font color='red'>Bạn đã xóa cookie</font>";
    }

//     $TaiKhoan = $_POST['TaiKhoan'];
// $MatKhau = $_POST['MatKhau'];
// $conn = new mysqli('localhost', 'root', '', 'shop');

// $sql = "SELECT * FROM tbl_user WHERE TaiKhoan = '$TaiKhoan'";
// $result = $conn->query($sql)->fetch_assoc();

// if ($result['MatKhau'] == $MatKhau){
//     // <a href="http://www.loinguyen.com.vn/ashopcartloi/controller/index.php?act=trangchu"></a>;
//     header("Location:../controller/index.php?act=trangchu");
// }
    if(isset($_POST['login'])&&($_POST['login'])){
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        if(($user=="loinguyen")&&($pass=="123456")){
            $_SESSION['user']=$user;
            $_SESSION['pass']=$pass;
            $logined=1;
            $msg= "<br><font color='blue'>Bạn đăng nhập thành công</font>";
        }else{
            $logined=0;
            $msg= "<br><font color='red'>Vui lòng đăng nhập</font>";
        }
        if(isset($_POST['ghinho'])&&($_POST['ghinho'])){
            setcookie("user",$user,time()+(86400*7));
            setcookie("pass",$pass,time()+(86400*7));
            $msgcookie="<br>Đã ghi nhận cookie!";
        }
    }

?>
<?php include "../view/header.php";
?>


<?php

//ds san pham moi nhap
$dssp=loadallproduct();
// $dsspkt=loadallproductkt();
$dspk=loadallphukien();
if(isset($_GET['act'])){
    switch ($_GET['act']) {
        case 'cart':

            //làm rỗng giỏ hàng
            if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
            //xóa sp trong giỏ hàng
            if(isset($_GET['delid'])&&($_GET['delid']>=0)){
                array_splice($_SESSION['giohang'],$_GET['delid'],1);
            }
            //add cart
                //lấy dữ liệu từ form
                if(isset($_POST['addcart'])&&($_POST['addcart'])){
                    $hinh=$_POST['hinh'];
                    $tensp=$_POST['tensp'];
                    $gia=$_POST['gia'];
                    $soluong=$_POST['soluong'];

                    addcart($hinh,$tensp,$gia,$soluong);

                }
            //end: add cart

            include "../view/cart.php";
            break; 
        case 'mypham':
             include "../view/mypham.php";
            break; 
       case 'lienhe':
            include "../view/lienhe.php";
             break; 
       case 'tinkhuyenmai':
             include "../view/tinkhuyenmai.php";
             break; 
       case 'phukien':
            include "../view/phukien.php";
             break; 
        case 'phukien':
            include "../view/timkiem.php";
            //  break;    
            
        default:
            include "../view/trangchu.php";
            break;
    }
}else{
    include "../view/login2.php";
}

?>


<?php include "../view/footer.php";?>