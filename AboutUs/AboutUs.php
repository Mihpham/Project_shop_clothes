<?php
            session_start();
            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                unset($_SESSION['submit']);
                header('Location:index.php');
            }
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html" />  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script><!--link lấy icon -->
	<title>About Us</title>
  <link rel="shortcut icon" type="image/png" href="./admin/product/uploads/avt3.png"/>
    <link rel="stylesheet" href="AboutUs.css" />
</head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>About Us</title>
</head>
<!-----------------------HEARDER ----------------------------------------->
<header>
<a href="../giaodien/index.php"><img src="/Project_shop_clothes/images/avt.png" class="logo" style="width:130px;"><!--LOGO --></a>
        
  <div id="menu" style="margin-top:10px;">
                    <ul>
                        <li><a href="/Project_shop_clothes/giaodien/index.php">Home</a></li><!--Trang chủ -->
                        <li>
                            <a href="#">Shirt</a><!--Top -->
                            <ul class="sub-menu">
                                <li><a href="/Project_shop_clothes/giaodien/thucdon.php?id_category=1">Hoodie</a></li>
                                <li><a href="/Project_shop_clothes/giaodien/thucdon.php?id_category=2">T-Shirt</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pants</a><!--Bottom -->
                            <ul class="sub-menu">
                                <li><a href="/Project_shop_clothes/giaodien/thucdon2.php?id_category=4">Trouser</a></li>
                                <li><a href="/Project_shop_clothes/giaodien/thucdon2.php?id_category=3">Short</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Collection</a><!--Collection -->
                            <ul class="sub-menu">
                                <li><a href="/Project_shop_clothes/giaodien/thucdon_2.php?id_sanpham=1">One piece</a></li>
                                <li><a href="/Project_shop_clothes/giaodien/thucdon_2.php?id_sanpham=2">Spring of the Y</a></li>
                                <li><a href="/Project_shop_clothes/giaodien/thucdon_2.php?id_sanpham=3">Liliwyun</a></li>
                            </ul>
                        </li>
                        <li><a href="/Project_shop_clothes/AboutUs/AboutUs.php" class="aboutus">About us</a></li><!--About us -->
                    </ul>
                </div>
        
        <div class="other"><!--Other -->
            
            
            <div class="login"> 
                <?php
                
                if(isset($_SESSION['name'])) {
                    $user_admin = $_SESSION['name'];
                            if($user_admin == 'Admin_Chu') {
                                
                                echo '<a style="color:black;" href="">' . $_SESSION['submit'] . '</a>
                                <div class="logout">
                                <a href="/Project_shop_clothes/admin/login.php"><i class="fas fa-user-edit"></i>Admin</a> <br>                            
                                <a href="/Project_shop_clothes/index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                            else{
                                echo '<a style="color:black;" href="">' . $_SESSION['name'] . '</a>
                                <div class="logout">
                                <a href="#"><i class="fas fa-exchange-alt"></i>Đổi mật khẩu</a> <br>                           
                                <a href="/Project_shop_clothes/index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                                </div>';
                                                        }
                } 
                else {
                             echo '<a href="/Project_shop_clothes/login/login.php"">Đăng nhập</a>';
                                }
                ?>
                    
            </div>
            
            
            <li><a href="/Project_shop_clothes/cart/cart.php" style="text-decoration:none; " ><i class="fas fa-shopping-bag"></i></a> <?php
                        $cart = [];
                        if (isset($_COOKIE['cart'])) {
                            $json = $_COOKIE['cart'];
                            $cart = json_decode($json, true);
                        }
                        $count = 0;
                        foreach ($cart as $item) {
                            $count += $item['num']; // đếm tổng số item
                        }
                        ?>
                        <span><?= $count ?></span></li><!--icon GIỎ HÀNG -->
        </div>
        
        
</header>
<style>
    
    li{
        list-style: none;/* bỏ chấm tròn của Others*/
    }
    body{/* chỉnh màu background menu (màu ô chứa chữ ko thay đổi)*/
        background-color: white;
    }
    header{/* chỉnh menu*/
        display:flex;
        justify-content: space-between;
        align-items: center;
        padding: 0px 5%;
        margin-top:0px; 
        position:fixed; 
        top:0;
        left:0;
        right:0;
        background-color: #ffffff;
        z-index: 1;
        box-shadow: 2px 2px 2px rgba(241, 241, 241, 0.873);
        float: left;
    }
    .aboutus{
        background-color: rgba(241, 241, 241, 0.873);
    border: currentColor;
    border-radius: 12px;
    }


    /* ---------------chỉnh logo----------------*/
    header img{
        width:150px;
        cursor:pointer;
    }



    /* ---------------chỉnh other (search,shopping,user)----------------*/
    .other{
        display:flex;
    }
    .other >li{
        padding:0 12px;
    }
    .other >li:first-child{
        position:relative;
    }
    .other >li:first-child input{/* chỉnh ô tìm kiếm*/
        width:100%;/* chỉnh  độ dài ô tìm kiếm*/
        height:100%;/* chỉnh độ rộng ô tìm kiếm*/
        margin-top: -20px;
        margin-left: -20px;
        border:10px;
    }
    .other >li:first-child i{
        position:absolute;
        right:10px;/* chỉnh vị trí  Icon search */
    }


    /* ---------------------------chỉnh Menu-------------------------------*/
    .login {
    padding: 0;
    border: 1px solid rgb(196, 196, 196);
    border-radius: 3px;
    margin: 0 50px;
    position: relative;
    }
    .login:hover {
    box-shadow: 0 0 3px 0 grey;
    cursor: pointer;
    }
    .login a {
    padding: 15px;
    text-decoration: none;
    color: #676767;
    font-weight: 700;
    }
    .login:hover .logout{
    display: block;
    }
    .login .logout{
    display: none;
    position: absolute;
    top: 2.3rem;
    left: 0;
    z-index: 10;
    width: 150%;
    border: 1px solid grey;
    border-radius: 5px;
    padding: 10px 0;
    }
    .login .logout a{
    color: black;
    font-weight: 500;
    border-radius: 5px;
    margin: 10px 0;
    }
    .login .logout a:hover{
    opacity: 0.8;
    }
    #menu {
        list-style:none;
        display: flex;
    }

    #menu ul{
        list-style-type: none;
        background:#ffffff;   /*  chỉnh màu ô chứa chữ */
        text-align: center;
    }
    #menu ul li{
        color:#0f0f0f;
        display:inline-table;
        width:120px;/* khoảng cách giữa các chữ trong menu */
        height:30px;/* khoảng cách giữa menu và banner*/
        line-height: 50px;/* khoảng cách giữa menu và thanh tìm kiếm*/
        position:relative;   /* chỉnh khung menu xuống thành 1 hàng dọc */
    
    }
    #menu ul li a{
        color:#060606;/* chỉnh màu chữ trên thanh menu */
        text-decoration: none;
        display:block;
        font-size:17px;/* chỉnh cỡ chữ trên thanh menu*/
    }
    #menu ul li a:hover{
        background:rgba(123, 123, 123, 0.262);/* chỉnh màu Ô lúc dê chuột vào */
        color:#333;/* chỉnh màu chữ trong Ô lúc dê chuột vào */
        
    }
    #menu ul li >.sub-menu{
        display: none;
        position: absolute;
        background-color:  #ffffff;/* chỉnh màu Ô đa cấp lúc dê chuột vào */
        z-index: 1;
        list-style: none;
    }

    #menu ul li:hover .sub-menu{
        display:block;
    }
    .btn-docs{
        background-color: black;
        color: #fff;
        width: 200px;
        text-align: center;
        height: 50px;
        transform: translateX(+660px);
        border-radius: 12px;
    }
    .btn-docs:hover{
        background-color: #fff;
        color: #060606;
        }
</style>
<body>
    <div class="container">
        <div class="gallery-display-area">
            <div class="gallery-wrap">
                <div class="image">
                    <img src="/Project_shop_clothes/AboutUs/ảnh1.png" />
                </div>
                <div class="image">
                    <img src="/Project_shop_clothes/AboutUs/ảnh2.png" />
                </div>
                <div class="image">
                    <img src="/Project_shop_clothes/AboutUs/ảnh3.png" />
                </div>  
                <div class="image">
                    <img src="/Project_shop_clothes/AboutUs/ảnh4.png" />
                </div>    
                <div class="image">
                    <img src="/Project_shop_clothes/AboutUs/ảnh5.png" />
                </div>
            </div>
        </div>
    </div>
    <h2 style="   text-align: center;
  padding:80px;
  font-size:25px;
  margin-top:-200px">About us</h2>
    <h5 style="    font-size:16.6px;
    color:rgb(0, 0, 0);
    text-align:center;
    padding-left:395px;
    padding-right:395px;
    letter-spacing:0.5px;
    line-height:40px;
    font-weight:500;
    padding-bottom:70px;">
        Câu chuyện của DirtyCoins được bắt đầu từ 2017 tại Sài Gòn, Việt Nam; xuất phát từ ý tưởng về một thương hiệu văn hóa đường phố từ Khoa Sen và những người bạn Gen Z đầy sáng tạo. Sau những thành công và kinh nghiệm gói ghém từ thương hiệu tiền thân là The Yars Shop, DirtyCoins đã ra đời.</br></br>
        
        Không quá ồn ào hay phô trương, cái tên ‘DirtyCoins’ tượng trưng cho những giá trị nguyên bản nhất của cuộc sống: đó là hiện thực gai góc của những ‘đồng tiền xương máu’, của giá trị lao động đầy mồ hôi, bụi bẩn và nước mắt. DirtyCoins trở thành một thương hiệu của tinh thần thời trang mạnh mẽ, táo bạo tuy nhiên vẫn gần gũi và dễ tiếp cận rộng rãi. Tuy nhiên, không dừng lại ở đó, DirtyCoins muốn vượt qua giới hạn của một thương hiệu thời trang đơn thuần và trở thành một biểu tượng về văn hóa và phong cách sống của những con người trẻ tuổi.</br></br>
        
        Những sản phẩm của DirtyCoins mang đậm dấu ấn kết hợp giữa văn hóa phương Tây và Phương Đông, xác lập một ngôn ngữ sáng tạo rất riêng, đầy mạo hiểm và mới mẻ. Chất liệu cảm hứng được DirtyCoins chắt lọc từ sự đa sắc, đa diện của dòng chảy cuộc sống hàng ngày; pha trộn cùng cảm hứng nghệ thuật đương đại để tạo nên một tiểu vùng văn hóa rất riêng của DirtyCoins.</br></br>
        
        Không ngại thử thách, luôn luôn mạo hiểm và không ngừng đuổi bắt những giới hạn, đó là DNA của DirtyCoins.</h5>
        <h5 style="    font-size:16.6px;
    color:rgb(0, 0, 0);
    text-align:center;
    padding-left:395px;
    padding-right:395px;
    letter-spacing:0.5px;
    line-height:40px;
    font-weight:500;
    padding-bottom:70px;">
        Để biết thêm thông tin chi tiết về wed vui lòng tải phần document và xem hướng dẫn</h5>
        <div >
        <a href="Detailed-Features (1).docx"><button class="btn-docs">DOWNLOAD<i class="fa-solid fa-download"></i></button></a>
        </div>
    </body>
</html>

<!--------------------FOOTER--------------------------- -->


<!--------------------FOOTER--------------------------- -->
<footer class="section-p1"><!--mục footer -->
    <div class="col">
        <h4>HỆ THỐNG CỬA HÀNG</h4><!--Hệ thông cửa hàng -->
        <p>43 tran dai ngia- 561 Sư Vạn Hạnh, Phường 13.</p>
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4439.232542996468!2d105.84458795749838!3d21.006948484087467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac763c4526a5%3A0x1acad8b0c6493394!2zNDMgUC4gVHLhuqduIMSQ4bqhaSBOZ2jEqWEsIELDoWNoIEtob2EsIEhhaSBCw6AgVHLGsG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e1!3m2!1svi!2s!4v1681588157324!5m2!1svi!2s" width="300" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div> 
    <div class="col">
        <h4>THÔNG TIN LIÊN HỆ</h4><!--Thông tin liên hệ -->
        <p>Tuyển dụng:<a href ="#"> link Website </a> </p>
        <p>Website:<a href ="#"> link Website </a></p>
        <p>Liên hệ CSKH: support@<a href ="#"> 0396711382 </a></p>
        <p>For business: contact@<a href ="https://myaccount.google.com/?hl=vi&utm_source=OGB&utm_medium=act"> Gmail </a></p>
    </div>
    <div class="col">
        <h4>FOLLOW US ON SOCIAL MEDIA</h4><!--Follow us on social media-->
        <li><i class="fa fa-facebook"></i> :<a href="https://www.facebook.com/dien.ba.942/">  Ba Dien</a></li>
        <li><i class="fa fa-instagram"></i>:<a href="https://www.facebook.com/dien.ba.942/">  badien_21</a></li>
        <li><i class="fa fa-youtube"></i>:<a href="https://myaccount.google.com/?hl=vi&utm_source=OGB&utm_medium=act">  BopBop</a></li>            
    </div>   

</footer>
<style>
/*----------------FOOTER--------------------*/

footer{
    background:rgb(0, 0, 0);
    display:flex;
    margin-top:0;
    justify-content: space-around;
    margin-bottom:0;
    padding-bottom: 20px;   /*chỉnh size background đen */
    padding-left:150px;
    transform: translateY(+200px);
    width: 100%;
    
}
footer.col{
    
    display:flex;
    flex-direction:column;
    align-items: flex-start;
    margin-top: 100px;
}
footer h4{   /*chỉnh size chữ H4*/
    color:rgb(255, 255, 255);
    font-size: 16px;
    padding-bottom:30px;
    margin-top:40px;
    font-weight: bold;
}
footer p{  /*chỉnh size chữ P*/
    color:rgb(255, 255, 255);
    font-size: 13px;
    text-decoration:none;
    margin-bottom:15px;

 
}
footer li{ /*chỉnh icon fb,instagram,youtube*/
    color:#fff;
    margin-top: 3px;
    font-weight: bold;
    
   
}

</style>

<style>



/*-----------------BÀI VIẾT LIÊN QUAN--------------------------*/


hr{/*  chỉnh thanh kẻ giữa bài viết liên quan với ảnh trên */
    margin-top:70px;/*  chỉnh khoảng cách so với chữ bên trên */padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    margin-left:313px;
}
h1{/*  chỉnh ô chứa chữ H1 */
    text-align: left;
    font-size:16px; 
    font-weight: 550;
    padding-left:325px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:343px;
    padding-bottom:18px;
    margin-top:15px;/*  chỉnh khoảng cách so với chữ bên trên */
}
#list-new {/*  chỉnh ảnh bài viết liên quan */
    font-size:10px;/*size chữ sản phẩm*/
    display: flex;
    list-style: none;
    justify-content: space-around;
    padding-left:190px;/*  chỉnh khoảng cách 2 bên lề để song song với ảnh */
    padding-right:317px;
    margin-top:40px;

}

#list-new .item .name {/*  chỉnh chữ bài viết liên quan */
    text-align: center;
    color:rgb(10, 10, 10);
    font-weight: bold;
    margin-top:20px;/*chỉnh khoảng cách từ tên so với sản phẩm*/
}


#list-new .box-left{
    text-align: center;
    margin-top:435px;/*chỉnh lên xuống nút xem thêm */
    margin-left:-490px;/*chỉnh trái phải nút xem thêm*/
    
}
#list-new .box-left button:hover {/*màu sắc khi nhấp vô nút buttom mua ngay*/
    background:orange;
}
#list-new .box-left button {/*nút buttom mua ngay*/
    font-size:12px;/*chỉnh size chữ*/
    width: 80px;/*chỉnh size dài bóng đen*/
    height: 30px;/*chỉnh size rộng bóng đen*/
    background:#1d1a1a;
    border:none;
    outline:none;
    color:#fff;
    font-weight: bold;
    border-radius: 200px;
    transition:0.2s;/*chỉnh tốc độ chuyển màu*/
}


/*----------------FOOTER--------------------*/

footer{
    background:rgb(0, 0, 0);
    display:flex;
    margin-top:70px;
    justify-content: space-around;
    margin-bottom:0;
    padding-bottom: 20px;   /*chỉnh size background đen */
    padding-left:150px;
    
}
footer.col{
    
    display:flex;
    flex-direction:column;
    align-items: flex-start;
    margin-top: 100px;
}
footer h4{   /*chỉnh size chữ H4*/
    color:rgb(255, 255, 255);
    font-size: 16px;
    padding-bottom:30px;
    margin-top:40px;
    font-weight: bold;
}
footer p{  /*chỉnh size chữ P*/
    color:rgb(255, 255, 255);
    font-size: 13px;
    text-decoration:none;
    margin-bottom:15px;

 
}
footer li{ /*chỉnh icon fb,instagram,youtube*/
    color:#fff;
    margin-top: 3px;
    font-weight: bold;
    
   
}
@media screen and  (max-width: 870px)  and (min-width:300px){
    body {
   width: 1500px;
    }
}
</style>
<style>
</style>