<!DOCTYPE html>
<html>

<head>
	<title>Product Detail Page</title>
	<!-- Font Awesome, Style -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="<?php echo URL_LAYOUT ?>css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_LAYOUT ?>css/smoothproducts.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />


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
	</style>

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
	<section style="margin-top:5%">
		<div class="product-detail">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-12">
						<div class="product-detail-left">

							<div class="sp-wrap">
								<a href="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image1'] ?>"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image1'] ?>" alt=""></a>
								<a href="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image2'] ?>"><img src="<?php echo URL_LAYOUT . 'img/product/' . $data['productDetail']['image2'] ?>" alt=""></a>

							</div>
						</div>
					</div>
					<div class="col-lg-6 col-sm-12">
						<div class="product-detail-right">
							<h2 class="product-title"><?php echo  $data['productDetail']['tensanpham'] ?></h2>
							<div class="product-rating">
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star-half-alt"></i>
								<span>4.7(21)</span>
							</div>
							<div class="product-price">
								<h3><?php echo  $data['productDetail']['gia'] ?></h3>
							</div>
							<div class="product-detail1">
								<div class="addtoCart">

									<button style="margin-left: 180px;">
										<img src="<?php echo URL_LAYOUT ?>img/product/cart.png">
										<span>ADD TO CART</span>

									</button>
								</div>
								<div class="addtoCart-mobile">
									<button type="button" style="margin-left: 160px;">
										<img src="<?php echo URL_LAYOUT ?>img/product/cart.png">
										<span>ADD TO CART</span>
									</button>
								</div>
								<div class="addtoList">
									<button type="submit" class="wishList">
										<i class="fa fa-heart"></i>
										<span>add to wish list</span>
									</button>
								</div>
								<ul class="Situation_product">
									<li id="in_stock">
										<span>product description :</span>
										<?php echo  $data['productDetail']['mieutasanpham'] ?>
									</li>
									<li>
										<span>product information :</span>
										<?php echo  $data['productDetail']['thongtinsanpham'] ?>
									</li>

								</ul>
							</div>
							<div class="social-links">
								<span>Share At:</span>
								<a href="#">
									<i class="fab fa-facebook-f"></i>
								</a>
								<a href="#">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#">
									<i class="fab fa-instagram"></i>
								</a>
								<a href="#">
									<i class="fab fa-whatsapp"></i>
								</a>
								<a href="#">
									<i class="fab fa-pinterest"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="Description">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="product__details__tab">
						<ul class="nav nav-tabs" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Đánh giá</a>
							</li>


						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tabs-1" role="tabpanel">
								<div class="product__details__tab__desc tab_comment">
									<h1> <i class="fa fa-comment" aria-hidden="true"></i> Bình luận</h1>
									<div class="comment">
										<form action="<?php echo URL . 'comment/store' ?>" method="post">
											<div class="text-area">
												<textarea placeholder="Viết bình luận..." name="binhluan"></textarea>
											</div>
											<div>
												<input type="hidden" value="<?php echo  $data['khachhang']['id'] ?>" name="id_khachhang">
												<input type="hidden" value="<?php echo  $data['khachhang']['ten'] ?>" name="tenkhachhang">
												<input type="hidden" value="<?php echo  $data['khachhang']['image'] ?>" name="anhkhach">
												<input type="hidden" value="<?php echo   $data['productDetail']['id'] ?>" name="id_sanpham">
												<input type="hidden" value="<?php echo date("h:i:s")  ?>" name="time">
											</div>
											<a class="btn-comment" href="<?php echo URL . 'layout/comment' ?>">
												<input type="submit" value="Đăng bình luận " name="dangbinhluan">
											</a>
										</form>
									<?php
									foreach( $data['binhluankh'] as $value){
										if($value['id_sanpham']== $data['productDetail']['id']){
										
									?>
										<div class="comment-detail">
											<div class="comment-right">
												<img src="<?php echo URL_LAYOUT.'img/product/'.$value['image']?>">
											</div>
											<div class="comment-left">
												<div class="comment-box">
													<span><?php echo $value['tenkhachhang'] ?></span>
													<p><?php echo $value['binhluan']?></p>
												</div>
												<div class="like-time">
													<div class="like">
														<p><i class="fab fa-gratipay"></i><span>0</span></p>
													</div>
													<div class="time">
														<span><?php echo $value['time'].'s';?></span>
													</div>
												</div>

											</div>
										</div>
										<?php
										}
									
									}
										?>
									</div>
								</div>
							</div>
							<div class="tab-pane" id="tabs-2" role="tabpanel">
								<div class="product__details__tab__desc">
									<h6>Products Infomation2</h6>

								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="news">
			<div class="title">
				<h3>Sản phẩm liên quan</h3>
			</div>
			<div class="owl-carousel ">
				<?php

				for ($i = 0; $i <= 10; $i++) {
				?>
					<div style="width: 200px;height:300px;" class="item"><img style="width: 100%;height:100%" src="<?php echo URL_LAYOUT . 'img/product/' .  $data['sanphamlienquan'][$i]['image1'] ?>"></div>

				<?php
				}
				?>
			</div>

		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

	<script src="<?php echo URL_LAYOUT ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/jquery.cycle.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/smoothproducts.min.js"></script>
	<script src="<?php echo URL_LAYOUT ?>js/bootstrap.min.js"></script>

	<script>
		$("#sliderShuffle").cycle({
			next: '#next',
			prev: '#prev'
		});
		$('.owl-carousel').owlCarousel({
			items: 4,
			loop: true,
			margin: 15,
			autoplay: true,
			autoplayTimeout: 2000, //3 Second
			nav: true,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 3,
					nav: true
				},
				1000: {
					items: 4,
					nav: true
				}
			}

		});

		$(function() {


			$(".sp-wrap").smoothproducts();
		});
		var numbers = document.getElementById('box');
		for (var i = 0; i < 100; i++) {
			var span = document.createElement('span');
			span.textContent = i;
			numbers.appendChild(span);
		}
		var num = numbers.getElementsByTagName('span');
		var index = 0;

		function nextNum() {
			num[index].style.display = 'none';
			index = (index + 1) % num.length;
			num[index].style.display = 'initial';
		}

		function prevNum() {
			num[index].style.display = 'none';
			index = (index - 1 + num.length) % num.length;
			num[index].style.display = 'initial';
		}
		/*mobile*/
		var numbers = document.getElementById('box_mobile');
		for (var i = 0; i < 100; i++) {
			var span = document.createElement('span');
			span.textContent = i;
			numbers.appendChild(span);
		}
		var num = numbers.getElementsByTagName('span');
		var index = 0;

		function nextNum_mobile() {
			num[index].style.display = 'none';
			index = (index + 1) % num.length;
			num[index].style.display = 'initial';
		}

		function prevNum_mobile() {
			num[index].style.display = 'none';
			index = (index - 1 + num.length) % num.length;
			num[index].style.display = 'initial';
		}
	</script>
</body>


<script>
	// $('.btn-comment').click(function(event) {
	// 	event.preventDefault();
	// 	var href = "http://localhost/PHP/DOAN-CARONO/comment";

	// 	$.ajax({
	// 		url: href,
	// 		type: 'POST',
	// 		data: {},
	// 		success: function() {
	// 			$(".product__details__tab__desc tab_comment").load("http://localhost/PHP/DOAN-CARONO/layout/detail .product__details__tab__desc tab_comment");
	// 		}
	// 	});
	// });
</script>

</html>