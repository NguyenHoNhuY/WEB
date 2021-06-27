<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CARONO</title>

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/search.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />

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
    <style>
        .result-product h3 {
            text-align: center;
            color: red;
            font-size: 25px;
            font-weight: 400;
        }

        .header_cart button {
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
        .result span{
            color:#e29f01;
        }
    </style>
</head>

<body>
    <header>
        <div class="navigation">
            <div class="menu">
                <ul class="main-menu">
                    <li class="menu-item">
                        <a class="active active1" href="<?php echo URL . "layout/index" ?>">HOME</a>
                    </li>
                    <li class="menu-item">
                        <a id="wm" class="active" href="#">WOMEN</a>
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
                    </li>
                    <li class="menu-item">
                        <a id="m" class="active" href="#">MEN</a>
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
                    <a href="#" class="search-link"> <i class="fas fa-search"></i></a>
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
                    <a href="<?php echo URL . 'cart/index' ?>"><i class="fas fa-cart-plus"></i>
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
                    <a id="login1" href="<?php echo URL . 'logincustomer' ?>"><i class="fas fa-user"></i> <?php
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
    <section class="result">
        <div class="container">

            <div class="inform flex">
                <?php

                if (!empty($data['sanpham'])) {
                    $count=0;
                    foreach ($data['sanpham'] as $key => $value) {
                        $count++;
                    }
                ?>
                        <h1><span><?php echo "$count" ?></span> kết quả tìm kiếm Search Result for : <span><?php echo $value['tensanpham'] ?></span></h1>
                <?php
                    
                }
                ?>
            </div>
            <div class="result-product">
                <?php

                if (!empty($data['sanpham'])) {
                    foreach ($data['sanpham'] as $key => $value) {
                       
                ?>
                        <div class="product flex">
                            <div class="img">
                                <a href="#"> <img src="<?php echo URL_LAYOUT . 'img/product/' . $value['image1'] ?>" alt=""></a>
                            </div>
                            <div class="product-info flex">
                                <div class="info-inner">
                                    <a class="pr-name" href="#"><?php echo $value['tensanpham'] ?></a>
                                    <p class="pr-cost"><?php echo $value['gia'] ?></p>
                                    <p class="pr-description">
                                        <?php echo $value['mieutasanpham'] ?>
                                    </p>
                                </div>
                                <div class="info-btn">
                                    <a class="bt-view flex bt" href="#">
                                        <span class="flex">Quick View</span>
                                    </a>
                                    <a class="bt-add flex bt addCart" href="<?php echo URL . 'cart/store/' .$value["id"];?>">
                                        <span class="flex">Quick Shop</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<h3>Sản phẩm hiện không có tại store </h3>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
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

<<<<<<< HEAD
=======

>>>>>>> 9498b70414d230476605b7a02c63ed3f86dbed59
</html>