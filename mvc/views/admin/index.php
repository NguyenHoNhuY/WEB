<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo URL_ADMIN?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo URL_ADMIN?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo URL_ADMIN?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="<?php echo URL_ADMIN?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo URL_ADMIN?>plugins/raphael/raphael.min.js"></script>
<script src="<?php echo URL_ADMIN?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="<?php echo URL_ADMIN?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo URL_ADMIN?>plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="<?php echo URL_ADMIN?>dist/js/pages/dashboard2.js"></script>
  <title> CARONO DASHBOARD</title>
  <style>
    /* .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
      color: #fff;
      background-color: #007bff;
    }
    .info a {
      font-weight: 800;
    }
    .signout p,
    .signout i {
      padding-left: 5px;
      color: orange
    }
    .card {
      margin: 16px;
      background-color: #000;
    }
    .card.bg-gradient-success {
      background: #000 !important;
      color: orange;
    }
    .actives {
      background: #042124 !important;
      color: #fff !important;
      border: 1px solid #89f5ff;
    box-shadow: 0px 0px 2px 2px;
    } 
    .nav-item p {
      color: #fff !important;
    }
    .card-primary:not(.card-outline)>.card-header {
    background-color: orange !important;
    }
    [type=button]:not(:disabled), [type=reset]:not(:disabled), [type=submit]:not(:disabled), button:not(:disabled) {
        cursor: pointer;
        background: orange !important;
    }
    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 2.25rem;
        padding: .375rem .75rem;
        line-height: 1.5;
        color: #495057;
        content: "Click me" !important;
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 .25rem .25rem 0;
    }
     */
/*======================
    404 page
=======================*/


.page_404{ padding:40px 0; background:#fff; font-family: 'Arvo', serif;
}

.page_404  img{ width:100%;}

.four_zero_four_bg{
 
 background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
    height: 400px;
    background-position: center;
 }
 
 
 .four_zero_four_bg h1{
 font-size:80px;
 }
 
  .four_zero_four_bg h3{
			 font-size:80px;
			 }
			 
			 .link_404{			 
	color: #fff!important;
    padding: 10px 20px;
    background: #39ac31;
    margin: 20px 0;
    display: inline-block;}
	.contant_box_404{ margin-top:-50px;}
    
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  require_once('home/css.php');
  ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php
    require_once('home/navbar.php');
    ?>
    <?php
    require_once('home/sidebar.php');
    ?>
   
    <?php
    // require_once('home/main.php');
    require_once($data['main'].'.php');
    ?>
    <?php
    require_once('home/footer.php');
    ?>
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
  </div>
  <?php
  require_once('home/js.php');
  ?>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
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