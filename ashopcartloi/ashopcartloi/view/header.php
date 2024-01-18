<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/main.css">
    
    <style>
     body{
    margin:0px;
    padding:0px;
}
    
    .conten{
        width:100%;
        height:3050px;
        background-color: #2B2B2B;
    }
        .containers{
            margin-top:10spx;
            width:1100px;
            height:3040px;
            background-color:#2B2B2B;
            margin:20px 130px 0px 130px;
            font-family: Arial;
        }
        .conten1{
           
            width:1100px;
            height:450px;
            background-color:#2B2B2B;
        }
            #img{
                width:100%;
                height:450px;
            }
        
        .conten2{
            width:1100px;
            height:160px;
            background-color:#2B2B2B;
            margin-top: 50px;
        }
            .div1{

                border-radius: 15px;
                border: 2px solid goldenrod;
                width:340px;
                height:150px;
                color: white;
                text-align: center;
                float: left;
                margin-right: 20px;
                margin-top:45px;
            }
            .div2{
                border-radius: 15px;
                border: 2px solid goldenrod;
                width:340px;
                height:150px;
                color: white;
                text-align: center;
                float: right;
            }
            .nd1{
                color: white;
                text-align: left;
                margin-left:10px;
            }

        .conten3{
            width:150px;
            height:50px;
            background-color: #c09857;
            margin-top: 50px;
            margin-bottom: 0px;
            text-align: center;
            line-height: 50px;
        }
            .hr{
                width:1100px;
                height:2px;
                background-color: #c09857;
            }
        .conten4{
            width:1100px;
            height:540px;
            background-color: #2B2B2B;
        }
            .top{
                width:1100px;
                height:255px;
                background-color:#2B2B2B;
                margin-top: 30px;
               
            }
                .ndconten4{
                    width:250px;
                    height:250px;
                    float:left;
                    margin-right: 27px;
                    border: solid 2px #c09857;
                }
                .ndconten41{
                    width:250px;
                    height:250px;
                    float:left;
                    border: solid 2px #c09857;
                }
            .bottom{
                width:1100px;
                height:250px;
                background-color: #2B2B2B;
                margin-top: 30px;
            }
            .conten5{
                width:1100px;
                height:300px;
                background-color: #2B2B2B;
                margin-top: 50px;
                color:white;
            }
        .conten6{
            width:1100px;
            height:520px;
            background-color: #2B2B2B;
        }
        .top1{
            width:1100px;
            height:150px;
            background-color: #2B2B2B;
            margin-top: 30px;
        }
            .top11{
                width:250px;
                height:150px;
                background-color: #c09857;
                float:left;
                margin-right: 33px;
            }
            .top111{
                width:250px;
                height:150px;
                background-color: #c09857;
                float:left;
            }
        .bottom{
            width:1100px;
            height:150px;
            background-color: #2B2B2B;
            margin-top: 30px;
        }
                
        .footer{
            height:250px;
            width: 100%;
            background-color:white;
            float: left;
            font-family: Arial;
        }
        .adv{
           
            width: 25%;
            height: 250px;
            background-color: black;
            float: left;
        }
        .adv1{
            margin-top: 40px;
            color:yellow;
        }
         a{
            list-style-type: none;
            text-decoration:none; 
            color:white;
            font-size: 15px;
            margin-top: 10px;
            display:block;
        }
        .cuoi{
            width: 100%;
            height: 200px;
            background-color: #2B2B2B;
            text-align: center;
            float: left;
        }                
 
    </style>
</head>
<body>
<div class="container">
    <div class="banner" >
            <div class="banner1">
                <div class="logo">
                     <img src="../view/images/logo9.jpg" alt="" width="100%" height="102px" >
                   <!-- <img alt="image" class="img-circle" src="../Assets/Admin/img/profile_small.jpg" /> -->
                </div>
            <form action="index.php?act=timkiem" method="POST">
                <div class="search">
                <input  style="width:220px;height:30px; margin-top: 25px;" type="search" name="tukhoa" placeholder="Nhập sản phẩm tìm kiếm..." color="white"/>
            <input style="width:80px;height:30px" name="timkiem" type="Submit" value="Tìm Kiếm">
                </div>
            </form>

                
         <div>
                
                <div class="menu"><a href="index.php?act=trangchu">Trang chủ</a></div>
                <div class="menu"><a href="index.php?act=mypham">Làm đẹp/skincare</a></div>
                <div class="menu"><a href="index.php?act=phukien">Mặt nạ</a></div>
                <div class="menu"><a href="index.php?act=tinkhuyenmai"> Khuyến mại</a></div>
                <div class="menu"><a href="index.php?act=lienhe">Liên hệ</a></div>
                <!-- <div class="menu"><a href="../controller/index.php">Đăng xuất</a></div> -->

        </div>

            <div class="banner2"> 
            <!-- <div class="navbar"><span style="color:white;"><a  href="#">Trang Chủ</a>Đồng hồ nam</span>
            </div> -->
            </div>
    </div>
<!-- </div>

    
</body>
</html> -->