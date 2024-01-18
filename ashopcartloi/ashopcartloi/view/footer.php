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
                    <li><a href="#">SKINCARE</a></li>
                    <li><a href="#">LÀM ĐẸP</a></li>          
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
    <div class="cuoi">
        <p>CÔNG TY TNHH THƯƠNG MẠI DỊCH VỤ VẠN AN PHÁT</p>
        <p>Người đại diện: Quách Tấn Đạt</p>
        <p>Giấy CNĐKDN: 0107571123 ‐ Ngày cấp: 22/09/2016 - Cơ quan Cấp: 
            Phòng Đăng ký kinh doanh Sở Kế hoạch và Đầu tư Thành phố Hà Nội</p>
        <p>Địa chỉ: 39, Võ Văn Dũng, Ô Chợ Dừa, Đống Đa, Hà Nội, Việt Nam Hotline: 0986.989.626</p>
        
    </div>



</div>
<script>
    function searchToggle(obj, evt){
    var container = $(obj).closest('.search-wrapper');
        if(!container.hasClass('active')){
            container.addClass('active');
            evt.preventDefault();
        }
        else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
            container.removeClass('active');
            // clear input
            container.find('.search-input').val('');
        }
}
</script>


<script>
    var index = 0;
    changeImage = function(){
       var imgs =["../view/images/banner6.jpg","../view/images/banner3.jpg","../view/images/banner5.jpg"];
       document.getElementById('img').src=imgs[index];
       index++;
       if(index==3)
       {
          index=0;
       }
    }
    setInterval(changeImage,1000)
 </script>

</body>

</html>