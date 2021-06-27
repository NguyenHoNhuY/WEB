<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>man-product</title>


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
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/css/showproduct.css" />


    <style>
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
        span.bt-icon.flex {
    z-index: 9;
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
                        <a class="active" href="<?php echo URL . "layout/women" ?>">WOMEN</a>

                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo URL . "layout/men" ?>">MEN</a>

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
               
            </div>
        </div>
    </header>

    <section class="show-product">
        <div class="sidebar">
            <div class="sidebar-item category">
                <div class="tittle">
                    <h1>Categories</h1>
                </div>
                <ul class="menu">
                    <li><a href="#">Vest</a></li>
                    <li><a href="#">Hats</a></li>
                    <li><a href="#">Bags</a></li>
                    <li><a href="#">Pants</a></li>
                    <li><a href="#">Jacket</a></li>
                    <li><a href="#">Top&shirt</a></li>
                </ul>
            </div>
            <div class="sidebar-item range-slider">
                <div class="tittle">
                    <h1>Prices</h1>
                </div>
                <form class="flex po" method="post" action="<?php echo URL . 'layout/men' ?>">
                    <input step="11" type="range" name="price-min" id="price-min" value="11" min="11" max="133" />
                    <input step="11" type="range" name="price-max" id="price-max" value="133" min="11" max="133" />
                    <div class="slider">
                        <div class="track"></div>
                        <div class="range"></div>
                        <div class="thumb left"></div>
                        <div class="thumb right"></div>
                    </div>
                    <div class="result">
                        <span id="re-min"></span>
                        <span id="re-max"></span>
                    </div>
                </form>
            </div>
            <div class="sidebar-item feature-product">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione
                    quas explicabo officia mollitia quisquam iste pariatur! Quis magnam
                    magni temporibus, consectetur sunt excepturi quisquam quasi
                    reprehenderit, assumenda molestiae nemo ullam.
                </p>
            </div>
        </div>
        <div class="products">
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



<script>
    filter_data();
    
   $(document).ready(function () {
    $('.bt-add').click(function(e) {
        e.preventDefault();
            alert('hihi');
          console.log('hihi');
        // var href = $(this).attr("href");
        // $.ajax({
        //     url: href,
        //     type: 'POST',
        //     data: {},
        //     success: function(res) {
        //         swal("Add product to cart", "Đăng nhập trước khi mua bạn nhé ", "success");
        //         $(".num_cart").load("http://localhost/PHP/DOAN-CARONO/ .num_cart");
        //     }
        // });

    })
   });
    
    //====================================
    //todo js of range-slider
    //====================================
    var inputLeft = document.getElementById("price-min");
    var inputRight = document.getElementById("price-max");
    var thumLeft = document.querySelector(".slider>.left");
    var thumRight = document.querySelector(".slider>.right");
    var range = document.querySelector(".slider>.range");
    var remin=0;
    var remax=0;
    function setLeftValue() {
        let _this = inputLeft;
        let min = _this.min; //lay gia tri min cua input
        let max = _this.max; //lay gia tri max cua input
        _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value));
        let percent = ((_this.value - min) / (max - min)) * 100;
        remin=document.getElementById("re-min").innerHTML = _this.value;
        
        thumLeft.style.left = percent + "%";
        range.style.left = percent + "%";
        filter_data(remin,remax);
    }
    setLeftValue();
    inputLeft.addEventListener("input", setLeftValue);
    function setRightValue() {
        let _this = inputRight;
        let min = _this.min; //lay gia tri min cua input
        let max = _this.max; //lay gia tri max cua input
        _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value));
        let percent = ((_this.value - min) / (max - min)) * 100;
        remax=document.getElementById("re-max").innerHTML = _this.value;
        thumRight.style.right = 100 - percent + "%";
        range.style.right = 100 - percent + "%";
        filter_data(remin,remax);
    }
    setRightValue();
    inputRight.addEventListener("input", setRightValue);
 
    //====================================
    // js filter data
    //====================================
    
    function filter_data(remin,remax) {
        var min_price = remin;
        var max_price = remax;
        var action = 'get_data';
        $.ajax({
            url: "http://localhost/PHP/DOAN-CARONO/layout/productmen",
            method: "POST",
            data: {
                action: action,max_price:max_price,min_price:min_price
            },
            success: function(data) {
                $('.products').html(data);
            }
        })
    }
   
</script>
</html>