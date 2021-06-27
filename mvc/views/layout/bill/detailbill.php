<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingHeader.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingFooter.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/CssShopping/shoppingMain.css" />
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>/aos-master/dist/aos.css" />


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

    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/shoppingHeader.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Upload Photo Like FB DP</title>
    <link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/hoadon.css">
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
                        <a class="active" href="<?php echo URL . "layout/index #wm" ?>">WOMEN</a>

                    </li>
                    <li class="menu-item">
                        <a class="active" href="<?php echo URL . "layout/index #m" ?>">MEN</a>

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
                <div class="icon user">
                    <a href="#"> <i class="fas fa-user"></i></a>
                </div>
            </div>
        </div>
    </header>

    <section class="bill" style="margin-top:20%">
        <h2>Chi Tiết Hóa Đơn :</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <?php
                    if (isset($data['chitiethoadon'])) {
                    ?>
                        <table border="1" cellpadding="0">
                            <tr>
                                <th>SHD</th>
                                <th>ID sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>ảnh sản phẩm</th>
                                <th>giá sản phẩm</th>
                                <th>số lượng </th>
                               
                            </tr>

                            <?php

                            foreach ($data['chitiethoadon'] as $value) {
                            ?>
                                <tr>
                                    <td><?php echo $value['sohoadon'] ?></td>
                                    <td><?php echo $value['id_sanpham'] ?></td>
                                    <td><?php echo $value['tensanpham']?></td>
                                    <td>
                                    <div ><img style="width: 80px; height: 80px;border-radius: 15px;" src="<?php echo URL.'public/layout/img/product/'.$value['anhsanpham']?>" alt=""></div>
                                    </td>
                                    <td><?php echo $value['giasanpham'] ?></td>
                                    <td><?php echo $value['soluongdat'] ?></td>
                                 
                                   
                                </tr>
                            <?php
                            }
                        } else if (isset($data['thongbao'])) {


                            ?>
                            <table border="1" cellpadding="0">
                                <tr>
                                    <th>THONG BAO</th>
                                </tr>
                                <tr>
                                    <td><?php echo $data['thongbao'] ?></td>

                                </tr>
                            <?php

                        }
                            ?>
                            </table>
                </div>

              

            </div>
        </div>
    </section>


    <script src="<?php echo URL_LAYOUT ?>js/hoadon.js"></script>

</body>

</html>