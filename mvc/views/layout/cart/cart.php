<!DOCTYPE html>
<html>

<head>
    <title>Shopping cart</title>
    <!-- Font Awesome, Style -->
    <!-- <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> -->
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/smoothproducts.css">


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?php echo URL_LAYOUT ?>/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.js"></script>
    <script src="<?php echo URL_LAYOUT ?>js/shoppingJS.js"></script>



    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />



    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet" />



    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>csstemplate/style.css" type="text/css">

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/shoppingHeader.css" />

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <style type="text/css">
        body {
            font-family: "Poppins", sans-serif;
        }

        .navigation>.logo>a>p {
            font-size: 35px;
            font-weight: 900;
            letter-spacing: 10px;
            font-family: "Charmonman", cursive;
        }

        input[type=number]::-webkit-inner-spin-span {
            background-color: red;
            color: red;
        }

        button.swal-button.swal-button--confirm.swal-button--danger {
            background: #000;
        }

        button.swal-button.swal-button--confirm {
            background: #000;
        }

        .swal-button:not([disabled]):hover {
            background-color: orange;
        }

        .quantity {
            display: flex;
        }

        .meo {
            display: inline-block;
        }

        .pro-qty {
            height: 0px;
        }
        .notice{
            color: red;
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
                        <a class="active" href="<?php echo URL . "layout/index/women" ?>">WOMEN</a>

                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo URL . "layout/index/men" ?>">MEN</a>

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
    <section class="shopping_cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ">
                    <div class="shopping_cart_table">
                      
                        <table>
                            <thead>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php
                                if(isset($data['cart'] )){
                                foreach ($data['cart'] as $key => $value) {
                                ?>
                                    <tr id="<?php echo 'product' . $value['id']; ?>">
                                        <td class="product_cart_item">
                                            <div class="product_cart_item_pic">
                                                <img src="<?php echo URL_LAYOUT . 'img/product/' . $value['image1'] ?>">
                                            </div>
                                            <div class="product_cart_item_text">
                                                
                                                <div class="size">
                                                    <span>SP : </span><?php echo $value['tensanpham'] ?>
                                                </div>
                                                <div class="size">
                                                    <span>SL : </span><?php echo $value['soluong'] ?>
                                                </div>
                                                <div class="size">
                                                    <span>Size : </span><?php echo $value['cannang'].' g' ?>
                                                </div>
                                                <div class="color">
                                                    <span>Color : </span>Black
                                                </div>

                                            </div>
                                        </td>
                                        <td class="product_cart_quantity">


                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <span class="dec qtybtn">-</span>
                                                    <div class="meo" id="<?php echo 'qtyPro' . $value['id']; ?>" data-id="<?php echo $value['id']; ?>">
                                                        <input type="text" value="<?php echo $value['count'] ?>" id="<?php echo 'input' . $value['id']; ?>">
                                                    </div>
                                                    <span class="inc qtybtn">+</span>
                                                </div>
                                            </div>


                                        </td>
                                        <td class="cart_price">
                                            <div class="cart_price_span">
                                                <span id="<?php echo "total" . $value['id']; ?>"> <?php
                                                                                                    $gia = $value['count'] * $value['gia'];
                                                                                                    $formattedGia = number_format($gia, 0, ',', '.') . 'đ';
                                                                                                    echo $formattedGia;
                                                                                                    ?></span>
                                        </td>


                    </div>

                    <td class="cart_close">
                        <a href="<?php echo URL . 'cart/delete/' . $value['id'] ?>" class="removeCart" data-id="<?php echo $value['id']; ?>">
                            <span type="span" class="btn close-btn">
                                <i class="fas fa-times"></i> </span>
                        </a>
                    </td>
                    </tr>
                <?php
                                }}
                ?>
                </tbody>
                
                </table>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-6 cart-btn">
                        <div class="continue-btn">
                            <a href="<?php echo URL . 'layout/index' ?>">Continue Shopping</a>
                        </div>
                        <div class="delete-btn">
                            <a href="<?php echo URL . 'cart/unsetall' ?>">DELETE </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="cart_total mt-5">
                    <h6>Cart total</h6>
                    <ul>
                        <li>Total
                            <span id="total_Cart">
                                <?php
                                $formattedTong = 0;
                                if (isset($data['cart'])) {
                                    $tong = 0;
                                    $formattedTong = 0;
                                    foreach ($data['cart'] as $value) {
                                        $tong += $value['count'] * $value['gia'];
                                        $formattedTong = number_format($tong, 0, ',', '.');
                                    }
                                    echo $formattedTong . 'đ';
                                } else if (!isset($data['cart'])) {

                                    echo $formattedTong . 'đ';
                                }

                                ?>
                            </span>
                        </li>
                    </ul>
                    <a href="<?php echo URL . 'cart/checkout' ?>" class="primary-btn">Process to Checkout</a>

                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
    <?php if(empty($data['cart'])){

echo "<h3 class=".'notice'." style=".'text-align:center'.">BẠN CHƯA CÓ SẢN PHẨM NÀO TRONG GIỏ</h3>";
}?>
    </section>
   <div class="hihi">
    <?php 
    echo "<pre>";
    print_r($_SESSION['cart']);
    echo "<pre>";
    ?>
   </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script src="<?php echo URL_LAYOUT ?>js/main.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
    $('a.removeCart').click(function(event) {
        event.preventDefault();
        var href = $(this).attr("href");
        var id = $(this).attr("data-id");
        var name = "#product" + id;
        $.ajax({
            url: href,
            type: 'GET',
            data: {},
            success: function() {
                swal({
                        title: "Đừng xóa mà :(((",
                        text: "Bạn có thể chọn sản phẩm tương tự của CARONO !",
                        icon: "warning",
                        spans: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            swal("Bạn đã xóa thành công ", {
                                icon: "success",
                            });
                            $(name).empty();
                        } else {
                            swal("CARONO rất vui khi bạn ở lại ");
                        }
                    });

                $(".num_cart").load("http://localhost/PHP/DOAN-CARONO/ .num_cart");
                $("#total_Cart").load("http://localhost/PHP/DOAN-CARONO/cart/index #total_Cart");
            }
        });
    });
    // $("a#uDate").click(function() {
    //     var id = $(this).attr("data-id");
    //     var inputName = '#input' + id;
    //     var value = $(inputName).val();


    //     var totalCart = "#total_Cart";
    //     var totalName = "#total" + id;
    //     var href = "http://localhost/PHP/DOAN-CARONO/cart/update/" + id;
    //     $.ajax({
    //         url: href,
    //         type: "POST",
    //         data: {
    //             value: value
    //         },
    //         success: function(res) {
    //             $(totalName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalName);
    //             $(totalCart).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalCart);
    //         },
    //     })
    // });
    $("span.qtybtn").click(function() {
        var id = $(this).siblings(".meo").attr("data-id");
        var control = $(this).attr("class");
        var inputName = '#input' + id;
        var value = $(inputName).val();
        var proQtyName = '#qtyPro' + id;
        var totalName = "#total" + id;
        var totalCart = "#total_Cart";
        var href = "http://localhost/PHP/DOAN-CARONO/cart/update/" + id;
        if (control.split(" ")[0] == "dec") {
            value--;
            var tru = value;
           // alert(tru);
            $.ajax({
                url: href,
                type: "POST",
                data: {
                    tru: tru
                },
                success: function(res) {
                    //alert(res);
                    //$('.hihi').html(res);
                    $(proQtyName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + inputName);
                    $(totalName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalName);
                    $(totalCart).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalCart);
                }
            })
            
        } else if (control.split(" ")[0] == "inc") {
            value++;
            var cong = value;
            //alert(cong);
            $.ajax({
                url: href,
                type: "POST",
                data: {
                    cong: cong
                },
                success: function(res) {
                    //alert(res);
                    $(proQtyName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + inputName);
                    $(totalName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalName);
                    $(totalCart).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalCart);
                }
            })
        }
        // else if (value == 0) {
        //     value = 1; 
        //     $.ajax({
        //         url: href,
        //         type: "POST",
        //         data: {
        //             value: value
        //         },
        //         success: function(res) {
        //             // alert(res);
        //             $(proQtyName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + inputName);
        //             $(totalName).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalName);
        //             $(totalCart).load("http://localhost/PHP/DOAN-CARONO/cart/index " + totalCart);
        //         }
        //     })
        // }


    })
</script>

</html>