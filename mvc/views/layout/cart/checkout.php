<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/shoppingHeader.css" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Charmonman:wght@700&display=swap" rel="stylesheet" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		body,
		html {
			font-family: "Poppins", sans-serif;
		}

		.navigation>.logo>a>p {
			font-size: 35px;
			font-weight: 900;
			letter-spacing: 10px;
			font-family: "Charmonman", cursive;
		}
		.disable{
			cursor: not-allowed; 
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
						<a class="active" href="#">WOMEN</a>

					</li>
					<li class="menu-item">
						<a class="active" href="#">MEN</a>

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
	<section class="checkout spad">
		<div class="container">
			<div class="checkoutform">
				<form action="<?php echo URL . 'bill/store' ?>" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-8 col-md-6">

							<div class="section_header">
								<h2 class="section_title layout-flex_item">Chi Tiết Hóa Đơn Khách Hàng :</h2>
								<a href="login.html" class="login_form">
									<i class="fa fa-user" aria-hidden="true"></i>
									<span><?php echo  $_SESSION['name'] ?></span>
								</a>
							</div>

							<div class="row detail_bill">

								<div class="col-lg-6 details_bill">
									<div class="checkout_input">
										<p>Số ĐT <span>*</span></p>
										<input type="text" value="" placeholder="Nhập số điện thoại " name="customer_phone">
									</div>
								</div>
								<div class="col-lg-6 details_bill">
									<div class="checkout_input">
										<p>Email <span>*</span></p>
										<input class="disable" id="emailCus" type="text" value="<?php echo $data['customer']['email'] ?>" name="mail">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout_input">
										<p>Họ </p>
										<input class="disable" type="text" value="<?php echo $data['customer']['ho'] ?>" name="ho">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout_input">
										<p>Tên <span>*</span></p>
										<input class="disable" id="tenCus" type="text" value="<?php echo $data['customer']['ten'] ?>" name="ten">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="checkout_input">
										<p>Địa chỉ giao hàng: <span>*</span></p>
										<input type="text" placeholder="Nhập địa chỉ giao hàng" name="diachi">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="checkout_input">
										<p>ID khach hang <span>*</span></p>
										<input class="disable" type="text" value="<?php echo $data['customer']['id'] ?>" name="id_khachhang">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="checkout_input">
										<p>Take node ! <span>*</span></p>
										<input type="text" placeholder="take node" name="note">
									</div>
								</div>
								<div class="continue-btn">
									<a href="<?php echo URL . 'layout/index' ?>">Continue Shopping</a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6">

							<div class="checkout_order">
								<h4 class="order_title">ĐƠN HÀNG CỦA BẠN</h4>
								<?php
								foreach ($data['cart'] as $key => $value) {
								?>
									<table>
										<tbody>
											<tr>
												<td class="product_cart_item">
													<div class="product_cart_item_pic">
														<img src="<?php echo URL_LAYOUT . 'img/product/' . $value['image1'] ?>">
													</div>
													<div class="product_cart_item_text">
														<h6><?php echo $value['tensanpham'] ?></h6>
														<div class="size">
															<span><?php echo "Số lượng : ( " . $value['count'] . ' )' ?></span>
														</div>
														
													</div>
												</td>
												<td class="product_pric e">
													<span>
														<?php

														$gia = $value['gia'];
														$formattedGia = number_format($gia, 0, ',', '.') . 'đ';
														echo $formattedGia;
														?>
													</span>
												</td>
											</tr>
										</tbody>
									</table>
								<?php
								
                            }
							
                              
								?>
                                 
								 <!-- <input style="display:none ;" type="text" value="<?php print_r($chitietsp) ?>" name="chitietsanpham"> -->
								<div class="cart_discount">

									<div class="discount_code">
										<input type="text" placeholder="Discount code" id="discount" name="">
										<button id="apply_code" type="button">Apply</button>
									</div>
								</div>
								<ul class="checkout_total_bill">

									<li>Shipping
										<span>30.000 đ</span>
									</li>
									<li>Total
										<span>
											<?php
											$tong = 30000;
											foreach ($data['cart'] as $key => $value) {
												$tong += $value['count'] * $value['gia'];
												$formattedNum = number_format($tong, 0, ',', '.') . 'đ';
											}
											echo $formattedNum;

											?> 
											</span>
											
										<!-- <input style="display: none;" type="text" value="<?php echo $tong; ?>" name="totalbill">
                                        <input style="display: none;" type="text" value="<?php print_r($detail) ?>" name="detailbill">
										<input style="display: none;" type="text" value="<?php print_r($bangchitiet) ?>" name="bangchitiet"> -->
									</li>
								</ul>
								<div class="pay">
									<a href="<?php echo URL . 'bill/index' ?>">
							<button class="placeoder" type="submit" name="placeoder">Place order</button>
							</a>



						

								</div>
							</div>
						</div>
				</form>
			</div>  
		</div>
	</section>



	
	<a href="<?php echo URL.'bill/test'?>">dsdsds</a>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js">
</script>
<script>


</script>

</html>