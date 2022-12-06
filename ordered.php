<?php

require_once 'function.php';
session_start();
// error_reporting(0);
$userLevel = 'guest';
$userName = null;
if (isset($_SESSION['login'])) {
    if ($_SESSION['level'] == 'admin') {
        header('Location: http://localhost/skurent_project/admin/index.php');
    } else {    
        $userLevel = $_SESSION['level'];
        $userName = $_SESSION['name'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Onyx Lavanda | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
   
    <link rel="stylesheet" href="css/main.css">


    
</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Type your keyword...">
                            <button type="submit"><img src="img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.php"><img src="img/core-img/logo.png" alt=""></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="product-details.php">Product</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="checkout.php">Checkout</a></li>
                    <li class="active"><a href="ordered.php">Ordered</a></li>
                </ul>
            </nav>
            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <?php if ($userLevel != 'user') : ?>
                <a href="login.php" class="btn amado-btn mb-15">Log in</a>
                <?php else : ?>
                <a href="logout.php" class="btn amado-btn mb-15">Log out</a>
                <?php endif; ?>
            </div>
        </header>
        <!-- Header Area End -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
		<div class="container">
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Information</h4>
						<ul class="list">
							<li><a><span>Order Number</span> : 90876</a></li>
							<li><a><span>Date</span> : 20 Novemer 2020</a></li>
							<li><a><span>Total</span> : $1,050</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a><span>Address</span> : Jln. Raya Sengkaling</a></li>
							<li><a><span>Distrct</span> : Mulyoagung</a></li>
							<li><a><span>Zipz</span> : 60126</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a><span>Address</span> : Jln Raya</a></li>
							<li><a><span>Kecamatan</span> : Blimbing</a></li>
							<li><a><span>Kode pos</span> : 60126</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Detail Pesanan</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produk</th>
								<th scope="col">Jumlah</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p>Toyota Yaris G CVT 3 AB 2022</p>
								</td>
								<td>
									<h5>x 01</h5>
								</td>
								<td>
									<p>Rp 295.800.000</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 295.800.000</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Pajak</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 5.916.000</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp 301.716.000</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!--================End Order Details Area =================-->

    <!-- ##### Footer Area Start ##### -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <a href="index.php"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>                       
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Kitchen Set</a></li>
                        <li><a href="#">Tables</a></li>
                        <li><a href="#">Furniture</a></li>
                        <li><a href="#">Bathroom</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Product</a></li>
                        <li><a href="#">Cart</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Have a &amp; Question?</h4>
                    <ul>
                        <li><a href="#">203 Jl. Raya Sengkaling, Mulyoagung, Dau, Kabupaten Malang</a></li>
                        <li><a href="#">2 392 3929 210</a></li>
                        <li><a href="#">onyxlavanda@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 onyxlavanda Co., Ltd. All Rights Reserved. 
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>


</body>

</html>