<!DOCTYPE html>
<html lang="en">
<?php
require './BE/login_logic.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style-aboutus.css">
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
                        <li class="sub-item"><a href="Damp.php">Damp Rated Fans</a></li>
                        <li class="sub-item"><a href="Wet.php">Wet Rated Fans</a></li>
                        <li class="sub-item"><a href="Dry.php">Dry Rated Fans</a></li>
                    </ul>
                </li>

                <li class="menu-item">
                    <a class="sub-btn" href="contact.php">Help Center
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu">
                        <?php if ($_SESSION["username"] === "Admin"){ ?>
                        <li class="sub-item"><a href="product_registration.php">Product Registration</a></li>
                        <?php } ?>
                        <li class="sub-item"><a href="contact.php">Contact</a>
                        </li>
                        <li class="sub-item"><a href="choosingAFan.php">Choosing a Fan</a></li>
                    </ul>
                </li>
                <li class="menu-item"><a href="aboutus.php">About</a></li>
                <?php if ($_SESSION["loged"] === "false"){ ?>
                <li class="menu-item"><a href="login.php"><i class="far fa-user mr-2"></i>Login</a></li>
                <?php } else { 
                echo '<li class="menu-item"> Hello ' . $_SESSION["username"] .'';
                echo '<li class="menu-item"><a href="logout.php">Logout</a></li>';
                } ?>
            </ul>
        </div>
        <div class="menu-btn"></div>
    </header>
    <!-- HEADER -->

    <div class="header-background">
        <div class="header-content">
            <h1>About Us</h1>
        </div>
    </div>

    <div class="container-fluid padding py-5">
        <div class="row welcome text-center">
            <div class="col-12">
                <h3>Learn more about us</h3>
                <p>
                    Fanimation strives hard to be environmentally friendly. We encourage you to browse our products
                    online, which includes all the latest information on our great products and styles. We also have a
                    digital product catalog that is available for download as a PDF document. If you are in need of
                    additional information not found on our web site or would just like to learn more about the company
                    in general, please contact us by any of the following methods or simply fill out our request
                    information form below. For product and shipping issues please fill out our product support form.
                </p>
            </div>
            <div class="container-fluid padding py-5">
                <div class="row text-center padding">
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <i class="far fa-list-alt"></i>
                        <h4>Product Support</h4>
                        <p>Every Fanimation fan is backed by our firm commitment to quality materials and manufacturing.
                        </p>
                        <a href="#">Get product support</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <i class="far fa-newspaper"></i>
                        <h4>Marketing</h4>
                        <p>If you need additional marketing materials that aren’t presented in our press room or have
                            other marketing and public relations related questions, please contact:</p>
                        <a href="#">press@fanimation.com</a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <i class="far fa-comment-alt"></i>
                        <h4>Suggestions</h4>
                        <p>Fanimation wants to enhance your experience. If you have suggestions on how we can better
                            serve you, please contact:</p>
                        <a href="#">suggestions@fanimation.com</a>
                    </div>
                </div>
                <div class="row text-center padding">
                    <div class="col-xs-12 col-sm-6 col-md-4 ">
                        <i class="far fa-paper-plane"></i>
                        <h4>Find a Sales Agent</h4>
                        <p>Fanimation works with sales agents throughout the United States and worldwide to assist you
                            with selling our products.</p>
                        <a href="#">Find your Agent</a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <i class="far fa-user-circle"></i>
                        <h4>Careers</h4>
                        <p>Interested in working at Fanimation? Email your resume to:</p>
                        <a href="#">careers@fanimation.com</a>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <i class="fas fa-desktop"></i>
                        <h4>Webmaster</h4>
                        <p>Find something on our website that is not working the way it should? Contact us so that we
                            can improve your experience on our website:</p>
                        <a href="#">webmaster@fanimation.com</a>
                    </div>
                </div>
                <!-- <hr class="my-4">	 -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <h3>Looking for product support?</h3>
                <p>Visit our archive of installation and user guides, or submit your support question – including photos
                    – to
                    our technical team, so that we can get back to you quickly.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="contact.php">
                    <button type="button" class="btn btn-outline-dark">GET SUPPORT</button>
                </a>
            </div>
        </div>
    </div>

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
                                            <input type="text" class="form-control" id="formGroupExampleInput"
                                                placeholder="">
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