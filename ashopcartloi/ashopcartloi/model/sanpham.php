<?php
    function loadallproduct(){
        $conn=ketnoidb();
       $stmt = $conn->prepare("SELECT * FROM tbl_product ORDER BY id DESC ");
  
  // $stmt = $conn->prepare("SELECT * FROM tbl_product where idcata=1 ");
        $stmt->execute();
        // set the resulting array to associative
        $result =$stmt->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stmt->fetchAll();
        $kq="";
      // if($result=$stmt->idcata){
        foreach ($result as $pro) {
           
            $kq.= '<div class="boxsp mr">
                    <div class="row img"><img src="../view/images/'.$pro['img'].'" alt=""></div>
                    <p style="color:orange;">$<span style="color:orange;">'.$pro['price'].'</span></p>
                    <a href="#" >'.$pro['name'].'</a>
                    <form action="index.php?act=cart" method="post">
                        <input type="number" name="soluong" min="1" max="100" value="1">
                        <input type="submit" name="addcart" value="Đặt hàng">
                        <input type="hidden" name="tensp" value="'.$pro['name'].'">
                        <input type="hidden" name="gia" value="'.$pro['price'].'">
                        <input type="hidden" name="hinh" value="'.$pro['img'].'">
                    </form>
                </div>';
                }
      // }
        return $kq;

    }
?>