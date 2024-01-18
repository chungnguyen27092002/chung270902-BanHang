<?php
    session_start();
    include "../model/thuvien.php";
    if(isset($_POST['dongydathang'])&&($_POST['dongydathang'])){
        //lấy thông tin kh từ form để tạo đơn hàng
        $name=$_POST['hoten'];
        $address=$_POST['diachi'];
        $tel=$_POST['dienthoai'];
        $email=$_POST['email'];
        $total=tongdonhang();
        $pttt=0;

        //insert đơn hàng - tạo đơn hàng mới
        $idbill=taodonhang($name,$address,$tel,$email,$total,$pttt);
        //lấy thông tin giỏ hàng từ session + id đơn hàng vừa tạo
        //insert vào bảng giỏ hàng

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            $tensp=$_SESSION['giohang'][$i][1];
            $hinhsp=$_SESSION['giohang'][$i][0];
            $dongia=$_SESSION['giohang'][$i][2];
            $soluong=$_SESSION['giohang'][$i][3];
            $thanhtien=$dongia*$soluong;
            taogiohang($tensp,$hinhsp,$dongia,$soluong,$thanhtien,$idbill);
        }

        //show confirm đơn hàng

        $ttkh='<h1 style="color:white;" >Bạn đã đặt hàng thành công</h1><br><h2 style="color:white">Mã đơn hàng: '.$idbill.'</h2>
                <h2 style="color:white;">THÔNG TIN NHẬN HÀNG</h2>
                <table style="color:white;" class="thongtinnhanhang">
                
                <tr>
                    <td width="20%">Họ tên</td>
                    <td>'.$name.'</td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>'.$address.'</td>
                </tr>
                <tr>
                    <td>Điện thoại</td>
                    <td>'.$tel.'</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>'.$email.'</td>
                </tr>
            </table>';
            $ttgh=showgiohang();


        //unset giỏ hàng session

        unset($_SESSION['giohang']);

       // echo "Bạn đã đặt hàng thành công. Đơn hàng của bạn là!";
    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="../view/css/main.css">
</head>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/main.css">
</head>
<body>
<div class="container">
    <div class="banner" >
            <div class="banner1">
                <div class="logo">
                    <img src="../view/images/logo9.jpg" alt="" width="100%" height="102px" >
                </div>

                <div class="search">
                <input style="width:220px;height:30px; margin-top: 25px;" type="search" placeholder="Nhập sản phẩm tìm kiếm..." color="white"/>
            <input style="width:80px;height:30px" type="Submit" value="Tìm Kiếm">
                </div>
                <div class="menu"><a href="index.php?act=trangchu">Trang chủ</a></div>
                <div class="menu"><a href="index.php?act=mypham">Làm đẹp/skincare</a></div>
                <div class="menu"><a href="index.php?act=phukien">Mặt nạ</a></div>
                <div class="menu"><a href="index.php?act=tinkhuyenmai"> Khuyến mại</a></div>
                <div class="menu"><a href="index.php?act=lienhe">Liên hệ</a></div>
                <div class="menu"><a href="../controller/index.php">Đăng xuất</a></div>
        </div>

            <div class="banner2"> 
            <!-- <div class="navbar"><span style="color:white;"><a  href="#">Trang Chủ</a>Đồng hồ nam</span>
            </div> -->
            </div>
    </div>
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
                <div class="row" >
                    
                   <?php echo $ttkh;?> 
                </div>
                <div class="row mb">
                    <h2>GIỎ HÀNG</h2>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        
                        <?php echo $ttgh; ?>
                        
                        
                    </table>
                </div>
                
            </div>
          
            <div class="boxphai">
                <div class="row mb ">

                    <div class="boxtitle">
                        <div class="slct1">Xem 8Sản phẩm </div>
                        <div  class="slct2">
                        <ul class="select" >
                    <li class="select_1" >
                        <select>
                        <option vaule="Tất Cả Danh Mục">Mặc định</option>
                        <option vaule="Tất Cả Danh Mục">Mặc định</option>
                        <option vaule="Tất Cả Danh Mục">Xem nhiều nhất</option>
                        <option vaule="Tất Cả Danh Mục">Đánh giá cao</option>
                        <option vaule="Tất Cả Danh Mục">Hàng mới nhất</option>
                        <option vaule="Tất Cả Danh Mục">Giá từ cao đến thấp</option>
                        <option vaule="Tất Cả Danh Mục">Giá từ thấp đên cao</option>
                       </select>
                  </li>               
                </ul>
                        </div>
                    
                    </div>
                    
                </div>
                <div class="row mb ">
                   
                    <span style="color:white;">Chúng tôi chỉ cung cấp hàng hoá chính hãng, sản phẩm chất lượng và chế độ
                        bảo hành tốt nhất!
                    </span>
                    <p style="color:white;">Mọi chi tiết xin liên hệ: 0986.989.626</p>
                    
                </div>
                <div class="row mb">
                    <div class="boxtitle">Skincare</div>
                    <div class="boxcontent2 menudoc">
                   
                        <ul>
                            <li>
                                <a href="#">Mỹ phẩm Omega</a>
                            </li>
                            <li>
                                <a href="#">Mỹ phẩm DiamonD</a>
                            </li>
                            <li>
                                <a href="#">Mỹ phẩm Casio</a>
                            </li>
                            <li>
                                <a href="#">Mỹ phẩm Longines</a>
                            </li>
                            <li>
                                <a href="#">Mỹ phẩm Tissot</a>
                            </li>
                            <li>
                                <a href="#">Mỹ phẩm Ticizen</a>
                            </li>
                            <li>
                                <a href="#">Mỹ phẩm Aries Gold</a>
                            </li>
                           
                        </ul>
                    </div>
                   
                </div>
                <div class="row">
                    <div class="boxtitle">SẢN PHẨM MỚI NHẤT</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham1.jpg" alt="">
                            <a href="#">Tissot Luxury, 42mm</a>
                            <span style="color:orange;">33.460.000</span>
                        </div>
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham2.jpg" alt="">
                            <a href="#">Frederique Constant</a>
                            <span style="color:orange;">28.220.000</span>
                        </div>
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham3.jpg" alt="">
                            <a href="#">Salvatore Ferragamo 1898</a>
                            <span style="color:orange;">32.600.000</span>
                        </div>
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham4.jpg" alt="">
                            <a href="#">Frederique Constant,43mm</a>
                            <span style="color:orange;">14.600.000</span>
                        </div>
                        <div class="row mb10 top10">
                        <img src="../view/images/mypham1.jpg" alt="">
                        <a href="#">Salvatore Ferragamo 1899</a>
                            <span style="color:orange;">22.600.000</span>
                        </div>
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham2.jpg" alt="">
                            <a href="#">Tissot Luxury,45mm</a>
                            <span style="color:orange;">32.700.000</span>
                        </div>
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham2.jpg" alt="">
                            <a href="#">Salvatore Ferragamo 2002</a>
                            <span style="color:orange;">32.900.000</span>
                        </div>
                        <div class="row mb10 top10">
                            <img src="../view/images/mypham4.jpg" alt="">
                            <a href="#">Frederique Constant,40mm</a>
                            <span style="color:orange;">16.600.000</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
        <div class="adv">
        <img src="../view/images/logo9.jpg" alt="" width="220px" height="218px" >
        </div>
        <div class="adv">
                <div class="adv1">
                    <span ><b><u>HỖ TRỢ KHÁCH HÀNG</u></b></span>

                </div>
                <div class="adv2">
                    <ul>
                    <li><a href="#">TRANG CHỦ</a></li>
                    <li><a href="#">GIỚI THIỆU</a></li>
                    <li><a href="#">ĐỒNG HỒ NAM</a></li>
                    <li><a href="#">ĐỒNG HỒ NỮ</a></li>          
                    </ul>
                </div>
        </div>
        <div class="adv">
        <div class="adv1">
                    <span ><b><u>KẾT NỐI VỚI CHÚNG TÔI</u></b></span>
                    <p ><b><u>HỆ THỐNG CỬA HÀNG</u></b></p>
                </div>
                <div class="adv2">
                   <p style="color:white;">39 Võ Văn Dũng, Đống Đa, Hà Nội, Việt Nam</p>
                    <p style="color:white;">27 Võ Văn Dũng, Đống Đa, Hà Nội, Việt Nam</p>
                </div>

        </div>
        <div class="adv">
        <div class="adv1">
                    <span ><b><u>ĐẶT HÀNG ONLINE</u></b></span>

       </div>
         <div class="adv2">
                   <p style="color:white;">"Giao tận nơi" Đổi mới 15 ngày nếu sản phẩm lỗi do nhà sản xuất</p>
                    <p style="color:white;">Thanh toán trực tiếp hoặc ATM,VISA,MASTER CARD</p>
                </div>

        </div>
    
        

    </div>



</div>

</body>

</html>