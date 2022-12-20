<!DOCTYPE html>
<html lang="en">
<?php
// require './register.php';
$_SESSION["loged"] = "false";
require './BE/login_logic.php';
// $_SESSION["username"] = '';
session_start();
 ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanimation</title>
    <!-- Import Bootstrap css, js, fontawesome here -->
    <!-- Import Boostrap css, js, font awesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>
<!-- HEADER -->
<header>
	<a href="index.php" class="logo">
		<img src="https://fanimation.com/wp-content/uploads/2021/04/Logo_white_1.png" alt="">
	</a>
	<div class="navigation">
		<ul class="menu">

                <div class="searchbar">
                    <input type="text" placeholder="Search for ...">
                    <div class="icon">
                        <i class="fas fa-search"></i>
                    </div>
                </div>

			<div class="close-btn"></div>
			<li class="menu-item">
				<a class="sub-btn" href="product-Au.php">Products
					<i class="fas fa-angle-down"></i>
				</a>
				<ul class="sub-menu">
					<li class="sub-item"><a href="product-Au.php">All Products</a></li>
					<li class="sub-item"><a href="product-Au.php">Damp Rated Fans</a></li>
					<li class="sub-item"><a href="product-Au.php">Wet Rated Fans</a></li>
					<li class="sub-item"><a href="product-Au.php">Dry Rated Fans</a></li>
				</ul>
			</li>           

			<li class="menu-item">
				<a class="sub-btn" href="contact.php">Help Center
					<i class="fas fa-angle-down"></i>
				</a>
				<ul class="sub-menu">
					<li class="sub-item"><a href="product_registration.php">Product Registration</a></li>
					<li class="sub-item"><a href="contact.php">Contact</a></li>
					<li class="sub-item"><a href="choosingAFan.php">Choosing a Fan</a></li>
				</ul>
			</li>
			<li class="menu-item"><a href="aboutus.php">About</a></li>
			<li class="menu-item"><a href="login.php"><i class="far fa-user mr-2"></i>Login</a></li>
		</ul>
	</div>
	<div class="menu-btn"></div>
</header>
<!-- HEADER -->

    <!-- Carousel -->
    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
            <li data-target="#slides" data-slide-to="3"></li>
            <li data-target="#slides" data-slide-to="4"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/9.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2 mt-5">Hot Buy Closeout!</h1>
                    <h3>The Coop. See it and other deals on our Closeout Store.</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        SHOP NOW
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/8.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2 mt-5">Spitfire</h1>
                    <h3>Same look, new DC motor and blade length options.</h3>
                    <h3>See it and the other 2022 releases.</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/1.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2 mt-5">KUTE</h1>
                    <h3>Kute may be an understatement.</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/7.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2 mt-5">Wrap</h1>
                    <h3>Wrap yourself up in customizing this fan to your liking!</h3>
                    <h3>See it and the other 2022 releases.</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        LEARN MORE
                    </button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./img/2.jpg">
                <div class="carousel-caption">
                    <h1 class="display-2 mt-5">Stellar</h1>
                    <h3>Incredible in size and function, the Stellar reigns supreme!</h3>
                    <button type="button" class="btn btn-outline-light btn-lg">
                        LEARN MORE
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- Horizontal Rule -->
    <div class="container-fluid padding py-5">
        <div class="row welcome text-center">
            <div class="col-12">
                <img src="./img/logo.png" style="height: 10vh; min-height: 40px;">
            </div>
            <div class="col-12">
                <p>Fanimation fans are the perfect fusion of beauty and functionality. With designs for every style and
                    technology-driven controls for your convenience, Fanimation fans inspire your home. They integrate
                    into any space and allow you to make a statement that is all your own.</p>
            </div>
        </div>
    </div>
    <!-- Horizontal Rule End-->

    <!-- Features Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="bg-appointment rounded py-5">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-lg-6" style="min-height: 500px;">
                            <div class="position-relative h-100 rounded overflow-hidden">
                                <img class="position-absolute w-100 h-100" src="img/FMMAD8531BN_Alt_Image_1.jpg"
                                    style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 pt-5 pb-lg-5">
                            <div class="feature-text bg-white rounded p-lg-5">
                                <h6 class="text-uppercase">ABOUT US</h6>
                                <h1 class="mb-4">Air Apparent</h1>
                                <div class="d-flex mb-4">
                                    <div class="ml-4">
                                        <p class="m-0">From the very first fan we created more than 30 years ago to the
                                            newest ones in our portfolio, we create fans you can’t wait to show off! The
                                            same ingenuity and quality craftsmanship that gave birth to Fanimation
                                            continues to guide us today.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

<!-- About Start -->
<div class="container-fluid py-5">
	<div class="container ">
		<div class="row">
			<div class="col-lg-5">
				<img class="img-fluid rounded" src="img/arden_fan_ad1.jpg" alt="">
			</div>
			<div class="col-lg-7 mt-4 mt-lg-0">
				<h2 class="position-relative text-center text-black-50 bg-white rounded p-3 mt-4 mb-4 d-none d-lg-block" style="width: 250px; margin-left: -205px;">Choosing a Fan</h2>
				<h1 class="mb-4">Location is everything.</h1>
				<p>Installing a fan in your favorite indoor space? Or adding one to your outdoor haven? The location determines the fan rating (dry, damp and wet) you need. From there, the fun begins as you choose a style that fits you!</p>
				<a href="#" class="btn btn-dark mt-2">Learn More</a>
			</div>
		</div>
	</div>
</div>
<!-- About End -->

<!-- Action Start -->
<div class="container-fluid ">
	<div class="container">
		<div class="bg-action rounded" style="height: 500px;">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="col-lg-6 py-5 text-center">
					<h1 class="text-white mb-4">What Is CCT Select?</h1>
					<a class="btn btn-light py-3 px-5 mt-2" href="#">Learn More About Our Technology</a>
				</div>
				<div class="col-lg-6">
					<iframe width="400" height="400" src="./img/commercial.mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Action End -->

<!-- Services Start -->    
<div class="container-fluid">
	<div class="container">
		<div class="rounded ">
			<div class="row h-100 align-items-center justify-content-center">
				<div class="row">
					<div class="col-lg-6 py-5">
						<a href="product-Au.php"><img src="img/showroomcollection2018_hover.jpg" style="width:100%"></a>
					</div>
					<div class="col-lg-6 py-5">                            
						<a href="product-Au.php"><img src="img/banner-fanimation-studio1_hover.jpg" style="width:100%"></a>
					</div>
				</div>                          
			</div> 
		</div>
	</div>
</div>
<!-- Services End -->


    <!-- jumbotron Catalog -->
    <div class="container-fluid py-3">
        <div class="jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <h3>Famination Catalog</h3>
                <p>Fanimation fans are the perfect fusion of beauty and functionality. With designs for every style and
                    technology-driven controls for your convenience, Fanimation fans inspire your home. They integrate
                    into any space and allow you to make a statement that is all your own.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="#">
                    <button type="button" class="btn btn-outline-light">DOWNLOAD</button>
                </a>
            </div>
        </div>
    </div>
    <!-- End Horizontal Rule -->

    <!-- FOOTER -->
    <footer class="page-footer bg-dark">

        <div class="top-footer">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-youtube text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center text-md-left mt-5">
            <div class="row">
                <div class="col-md-3 mx-auto mb-4">
                    <img src="https://fanimation.com/wp-content/uploads/2021/04/Logo_white_1.png" alt="">
                    <!-- <h6 class="text-uppercase font-weight-bold">Fanimation</h6>
				<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 0.5px"> -->
                    <ul class="list-unstyled text-white">
                        <li class="my-2"><i class="fas fa-phone mr-2"></i>Phone: 888.567.2055</li>
                        <li class="my-2"><i class="fas fa-fax mr-2"></i>Fax: 866.482.5215</li>
                        <li class="my-2"><i class="fas fa-map-marker-alt mr-2"></i>10983 Bennett Parkway
                            Zionsville, IN 46077</li>
                    </ul>
                    <!-- <div class="col-md-6 col-sm-12 col-xs-12">
					<div class="map-area">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.925932837542!2d-86.24890418512103!3d39.94304639223601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8814aa9825faa5e1%3A0xe542c8f68a2cd493!2s10983%20Bennett%20Pkwy%20Ext%2C%20Zionsville%2C%20IN%2046077%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1669715711680!5m2!1svi!2s" width="800" height="310" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div> -->
			</div>
			<div class="col-md-2 mx-auto mb-4">
				<ul class="list-unstyled">
					<li class="my-2">Home</li>
					<li class="my-2">Blog</li>
					<li class="my-2">Antique Fan</li>
					<li class="my-2">Museum</li>
					<li class="my-2">Contact</li>
				</ul>
			</div>
			<div class="col-md-2 mx-auto mb-4">                  
				<ul class="list-unstyled">
					<li class="my-2">Products</li>
					<li class="my-2">Product Catalog</li>
					<li class="my-2">Choosing a Fan</li>
					<li class="my-2">Special Offers</li>
					<li class="my-2">Smart Controls</li>
					<li class="my-2">Gear Store</li>
				</ul>
			</div>    
			<div class="col-md-2 mx-auto mb-4">
				<ul class="list-unstyled">
					<li class="my-2">Product Support</li>
					<li class="my-2">Product Registration</li>
					<li class="my-2">Find an Authorized Dealer</li>
					<li class="my-2">Sales Agent Locator</li>
					<li class="my-2">Dealer Portal</li>
				</ul>
			</div>
			<div class="col-md-3 mx-auto mb-4">
				<h6 class="text-uppercase font-weight-bold text-white">Contact Us</h6>
				<hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 0.5px">
				<div class="contact-area">
					<div class="row">
						<div class="row-md-6 col-sm-12 col-xs-12">
							<div class="contact-form">
								<form>
									<div class="form-group text-white">
										<label for="formGroupExampleInput">Name</label>
										<input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
									  </div>
									  <!-- <div class="form-group">
										<label for="formGroupExampleInput2">Phone Number</label>
										<input type="number" class="form-control" id="formGroupExampleInput2" placeholder="">
									  </div> -->
                                        <div class="form-group text-white">
                                            <label for="exampleFormControlInput1">Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="name@example.com">
                                        </div>
                                        <!-- <div class="form-group">
									  <label for="exampleFormControlTextarea1">Leave Us a Message!</label>
									  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div> -->
                                        <button type="button" class="btn btn-outline-light">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid d-flex align-items-center mb-4">
            <div class="text-uppercase font-weight-bold col-md-12 text-center text-white">
                <a href="#">Privacy Policy</a> |
                <a href="#">Terms & Conditions</a>
            </div>
        </div>

        <div class="footer-copyright text-center text-white py-3">
            <p>&copy; Copyright
                <a href="#">fanimation.com</a>
            <p>2022 Fanimation. All rights reserved.</p>
            </p>
        </div>


        <!-- -Scrolling news ticker- -->
        <!-- <div class="container-scroller">
		<div class="ticker">
			
			<div class="news">
				<marquee behavior="" direction="">
					<p>
						00:00:00     21/12/2022     NYC, USA
					</p>
				</marquee>
			</div>
		</div>
	</div> -->

    </footer>


    <!-- FOOTER -->


    <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function() {
        //toggle sub-menus
        $(".sub-btn").click(function() {
            $(this).next(".sub-menu").slideToggle();
        });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
        menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
        menu.classList.remove("active");
    });
    </script>

</body>

</html>