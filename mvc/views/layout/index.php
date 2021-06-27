<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link  rel="icon" href="<?php echo URL_LAYOUT.'img/product/carono1.jpg'?>">
    <title style="font-weight: 700;">CARONO</title>



    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/style.css" />

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />
    

   
<style>
.header_cart button{
    position: absolute;
    top: 50%;
    right: 1%;
    transform: translateY(-50%);
    text-decoration: none;
    font-size: 18px;
    color: #000;
    border: 50%;
    width: 40px;
    height: 40px;
    background: #fff;
    border: none;
}
.disable {
  cursor: not-allowed;
}
</style>



</head>

<body>
<?php
 

?>
    <header>
        <div class="navigation">
            <div class="menu">
                <ul class="main-menu">
                    <li class="menu-item">
                        <a class="active active1" href="<?php echo URL . "layout/index" ?>">HOME</a>
                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo URL.'layout/women'?>">WOMEN
                        <div class="sub">
                            <ul class="sub-menu">
                                <li class="sub-item">
                                    <a href="#">READY-TO-WEAR</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Skirt</a></li>
                                        <li><a href="#">Bikini</a></li>
                                        <li><a href="#">Pants</a></li>
                                        <li><a href="#">Dress</a></li>
                                        <li><a href="#">Jacket</a></li>
                                        <li><a href="#">Tote bags</a></li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">HANDBAGS</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Top Handle Bags</a></li>
                                        <li><a href="#">Tote Bags</a></li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">ACCESSORIES</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Sunglasses</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="slider">
                                <!--slider for women -->
                                <div class="slider-img sub1-img">
                                    <div class="slide" id="0">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/quanden1.jpg" />
                                    </div>
                                    <div class="slide hide" id="1">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/quanxanh2.jpg" />
                                    </div>
                                    <div class="slide hide" id="2">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/img4.png" />
                                    </div>
                                    <div class="next" style="display: none"></div>
                                </div>
                                <div class="slider-node sub1-node">
                                    <ul>
                                        <li class="node" id="0"></li>
                                        <li class="node" id="1"></li>
                                        <li class="node" id="2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a  class="active" href="<?php echo URL.'layout/men'?>">MEN
                        <div class="sub">
                            <ul class="sub-menu">
                                <li class="sub-item">
                                    <a href="#">READY-TO-WEAR</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Vest</a></li>
                                        <li><a href="#">Hats</a></li>
                                        <li><a href="#">Bags</a></li>
                                        <li><a href="#">Pants</a></li>
                                        <li><a href="#">Jacket</a></li>
                                        <li><a href="#">Top&shirt</a></li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">ACCESSORIES</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Tie</a></li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">Shoes</a>
                                    <ul class="child-menu">
                                        <li><a href="#">Nike</a></li>
                                        <li><a href="#">Adidas</a></li>
                                        <li><a href="#">Balenciaga</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="slider">
                                <div class="slider-img sub2-img">
                                    <div class="slide" id="0">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/img5.png" />
                                    </div>
                                    <div class="slide hide" id="1">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/img6.png" />
                                    </div>
                                    <div class="slide hide" id="2">
                                        <img src="<?php echo URL_LAYOUT ?>img/product/img7.png" />
                                    </div>
                                    <div class="next" style="display: none"></div>
                                </div>
                                <div class="slider-node sub2-node">
                                    <ul>
                                        <li class="node" id="0"></li>
                                        <li class="node" id="1"></li>
                                        <li class="node" id="2"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </a>
                    </li>
                    <li class="menu-item"><a class="active" href="#">NEWS</a></li>
                    <li class="menu-item"><a class="active" href="#">CONTACT</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="#">
                    <p>CARONO</p>
                </a>
            </div>
            <div class="cart header_cart">
                <div class="icon search">
                    <a href="#" class="search-link"> <i class="fas fa-search"></i> </a>
                    <div class="search-content">
                        <div class="container" id="searchMain">
                            <form class="search-form" action="<?php echo URL ?>layout/search" method="POST" enctype="multipart/form-data">
                                <div class="po">
                                    <input class="search-input" name="name_search" type="text" placeholder="Tìm sản phẩm">
                                    <button name="search" class="btn_search" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>


                                </div>
                            </form>
                            <div class="close">
                                <i class="fas fa-times"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="icon cart num_cart">
                    <a href="<?php echo URL . 'cart/index' ?>"><i class="fab fa-opencart"></i>
                        <span class="amount">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                echo count($_SESSION['cart']);
                            } else {
                                echo "0";
                            }
                            ?>
                        </span>
                    </a>
                </div>
                <div class="icon user" id="login">
                    <a id="login1" href="<?php echo URL . 'logincustomer' ?>"><i class="far fa-user"></i> <?php
                                                                                                            if (isset($_SESSION['name'])) {
                                                                                                                echo $_SESSION['name'];
                                                                                                            } else {
                                                                                                                echo "login";
                                                                                                            }

                                                                                                            ?></a>
                </div>
                <div>
                    <a class="logout" href="<?php echo URL . 'logincustomer/logout' ?>"><i class="fas fa-sign-out-alt"></i></a>

                </div>
            </div>
        </div>
    </header>
    <section class="recommend">
   
        <div class="cursor"></div>
        <div class="cursorFollow"></div>
        <div class="recommend-slider">
            <div class="container full">
                <div id="01" class="slide-item full">
                    <div class="img full">
                        <img src="<?php echo URL_LAYOUT ?>img/product/blog/women.jpg" alt="" />
                    </div>
                    <div class="content">
                        <p>
                            The Women <br />
                            Colection
                        </p>
                    </div>
                </div>
                <div id="02" class="slide-item full hide">
                    <div class="img full">
                        <img src="<?php echo URL_LAYOUT ?>img/product/blog/gd.jpg" alt="" />
                    </div>
                    <div class="content">
                        <p>
                            The Man <br />
                            Colection
                        </p>
                    </div>
                </div>
            </div>
            <div class="next-pre">
                <div class="node pre">
                    <i class="fas fa-angle-left"></i>
                </div>
                <div class="content">
                    <span id="change">01</span>
                    <span>/02</span>
                </div>
                <div class="node next">
                    <i class="fas fa-angle-right"></i>
                </div>
            </div>
        </div>
        </div>
        <div class="recommend-banner" data-aos="zoom-in">




            <div class="container">
                <div class="banner-box">
                    <div class="bg">
                        <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/male-female1.jpg" alt="">
                        <div class="tittle">
                            <p>new arrival</p>
                            <a href="#">shop now</a>
                        </div>
                    </div>
                </div>
                <div class="banner-box">
                    <div class="box-top box-right">
                        <div class="box-top2">
                            <div class="bg">
                                <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/female4.jpg" alt="">
                                <div class="tittle">
                                    <p>women</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="box-top2">
                            <div class="bg">
                                <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/man2.jpg" alt="">
                                <div class="tittle">
                                    <p>men</p>
                                    <a href="#">shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-bottom box-right">
                        <div class="bg">
                            <img src="http://localhost/PHP/DOAN-CARONO/public/layout/img/product/clothing5.jpg" alt="">
                            <div class="tittle">
                                <p>free ship</p>
                                <a href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="trending">
        <div class="container">
            <div class="section-tittle flex">
                <div class="flex"><span></span></div>
                <div data-tilt class="content  flex">
                    <h2>TRENDING</h2>
                    <p>Top view in week</p>
                </div>
                <div class="flex"><span></span></div>
            </div>
            <?php
            require_once($data['main'] . '.php');
            ?>
        </div>
    </section>
    <section class="banner">
        <div class="banner-inner">

            <div data-tilt class="banner-box banner-colection po">

                <div class="banner-img">
                    <img src="<?php echo URL_LAYOUT ?>img/product/colection.jpg" alt="">
                </div>
                <div class="content flex">
                    <a href="#" class="tittle">
                        <h2>LOOKBOOK 2021</h2>
                        <p>MAKE LOVE THIS LOOKK</p>
                    </a>
                </div>
            </div>

            <div data-tilt class="banner-box banner-season po">

                <div class="banner-img">
                    <img src="<?php echo URL_LAYOUT ?>img/product/season.jpg" alt="">
                </div>
                <div class="content flex">
                    <a href="#" class="tittle">
                        <p>SUMMER SALE</p>
                        <h1>UP TO 70%</h1>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="section-tittle flex">
                <div class="flex"><span></span></div>
                <div class="content  flex">
                    <h2>LATES FROM BLOG</h2>
                    <p>The freshest and most exciting news</p>
                </div>
                <div class="flex"><span></span></div>
            </div>
            <div class="blog-content">
                <div class="blog-col">
                    <div class="img">
                        <a href="#">
                            <img src="<?php echo URL_LAYOUT ?>img/product/blog7.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-post">
                        <div class="post-info">
                            <a href="#">Spring – Summer Trending 2020</a>
                            <p class="date-time">By <b>admin</b> on <b>April 6 , 2020</b></p>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum deserunt velit repellat unde.
                                Aut, libero corporis odit reiciendis hic quos placeat mollitia iusto rerum. Ut debitis cum aspernatur
                                consequatur.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-col">
                    <div class="img">
                        <a href="#">
                            <img src="<?php echo URL_LAYOUT ?>img/product/blog5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-post">
                        <div class="post-info">
                            <a href="#">Style for couple in summer season</a>
                            <p class="date-time">By <b>admin</b> on <b>April 6 , 2020</b></p>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum deserunt velit repellat unde.
                                Aut, libero corporis odit reiciendis hic quos placeat mollitia iusto rerum. Ut debitis cum aspernatur
                                consequatur.</p>
                        </div>
                    </div>
                </div>
                <div class="blog-col">
                    <div class="img">
                        <a href="#">
                            <img src="<?php echo URL_LAYOUT ?>img/product/blog6.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-post">
                        <div class="post-info">
                            <a href="#">The Easiest Way to Break Out on Top</a>
                            <p class="date-time">By <b>admin</b> on <b>April 6 , 2020</b></p>
                        </div>
                        <div class="post-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nostrum deserunt velit repellat unde.
                                Aut, libero corporis odit reiciendis hic quos placeat mollitia iusto rerum. Ut debitis cum aspernatur
                                consequatur.</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <footer class="footer" data-aos="zoom-in">
        <div class="container">
            <div class="brand">
                <div class="flex">
                    <span></span>
                </div>
                <div class="brand-name flex">
                    <p>CARONO</p>
                    <p>fashion</p>
                </div>
                <div class="flex">
                    <span></span>
                </div>
            </div>
            <div class="content">
                <div class="menu pd-top">
                    <ul class="flex-di">
                        <li><a href="#">SHOPPING</a></li>
                        <li><a href="#">MAN</a></li>
                        <li><a href="#">WOMEN</a></li>
                        <li><a href="#">VOUCHER</a></li>
                    </ul>
                </div>
                <div class="social">
                    <div class="icon pd-top">
                        <div class="icon-item facebook">
                            <a class="flex" href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <div class="icon-item instagram">
                            <a class="flex" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="icon-item tiktok">
                            <a class="flex" href="#"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="line flex">
                        <span></span>
                    </div>
                </div>
                <div class="menu pd-top">
                    <ul class="flex-di">
                        <li><a href="#">PRIVACY POLICY</a></li>
                        <li><a href="#">ABOUT</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">ADDRESS</a></li>
                    </ul>
                </div>
            </div>
            <div class="newsletter flex-di">
                <div class="tittle">
                    <p>WEEBKLY NEWSLETTER</p>
                </div>
                <table>
                    <tr class="box flex">
                        <td><a href="#">carono@gmail.com</a></td>
                    </tr>
                    <tr class="box flex">
                        <td><a href="#">SUBSCRIBE</a></td>
                    </tr>
                </table>
            </div>
            <div class="end flex">
                <p>© 2021 create by NICE TEAM</p>
            </div>
        </div>
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo URL_LAYOUT ?>/fontawesome-free-5.15.3-web/js/all.js"></script>
<script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>
<script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>

<script src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
<script src="./main.js"></script>
<style> 
    .swal-text {
    color: red;
}
</style>

</script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script>
    // $('.searchNow').click(function(e) {
    //     e.preventDefault();
    //     var href = $(this).attr("href");
    //      alert(href);
    //     // $.ajax({
    //     //     url: href,
    //     //     type: 'GET',
    //     //     data: {},
    //     //     success: function(res) {
    //     //         $(".search-results").load("http://localhost/PHP/DOAN-CARONO/ .search-results");
    //     //     }
    //     // });
    // })

    $('a.addCart').click(function(e) {
        e.preventDefault();
        var href = $(this).attr("href");
       
        $.ajax({
            url: href,
            type: 'GET',
            data: {},
            success: function(res) {
                swal("Add product to cart", "hihi ", "success");
                $(".num_cart").load("http://localhost/PHP/DOAN-CARONO/ .num_cart");
            }
        });
        
    })
  
  
    $('a.logout').click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        $.ajax({
            url: href,
            type: "GET",
            data: {},
            success: function() {
                $("#login").load("http://localhost/PHP/DOAN-CARONO/ #login1");
            }
        })
    })
</script>

</html>