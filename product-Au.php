<!doctype html>
<html lang="en">

<?php
require './BE/Business.php';
// require_once './delete.php';
session_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");
$fan = get_all_fan();
// disconnect_db();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fanimation</title>
    <!-- Import Bootstrap css, js, fontawesome here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="product-Au.css" rel="stylesheet">
    <link rel="stylesheet" href="../Fanimation/font/themify-icons-font/themify-icons/themify-icons.css">
</head>

<body>
    <div class="main col-xs-12">
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
                            <li class="sub-item"><a href="specialoffer.php">Special Offer</a></li>
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
                echo '<li class="menu-item hellouser" style="color:white;"> Hello ' . $_SESSION["username"] .'';
                echo '<li class="menu-item"><a href="logout.php">Logout</a></li>';
                } ?>
                </ul>
            </div>
            <div class="menu-btn"></div>
        </header>
        <div class="header-background">
            <div class="header-content">
                <h1>Products</h1>
                <h5><a href="index.php">Home / Products</a></h5>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="toolbar-product toolbar-top col-md-12 col-sm-6">
                    <div class="filter">
                        <div class="action">
                            <a class="filter-toggle" href="">
                                <i class="flaticon-filter"></i>
                                Filter
                            </a>
                        </div>
                    </div>
                    <div class="order">
                        <form class="ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="popularity" selected="selected">popularity</option>
                                <option value="rating">Rating</option>
                                <option value="date">Newness</option>
                                <option value="price">Price: low</option>
                                <option value="price-desc">Price: high</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                        </form>
                    </div>
                    <div class="part-product-size-wrap">
                        <div class="product-size">
                            <a href="" data-product_num="5" class="product-size size-5">
                                <svg viewBox="0 0 16 16" widht="100%" height="100%">
                                    <path
                                        d="M 4.769 3.385 c 0 0.762 -0.623 1.385 -1.385 1.385 S 2 4.146 2 3.385 S 2.623 2 3.385 2 s 1.384 0.623 1.384 1.385 Z M 9.385 3.385 c 0 0.762 -0.623 1.385 -1.385 1.385 s -1.385 -0.624 -1.385 -1.385 S 7.238 2 8 2 s 1.385 0.623 1.385 1.385 Z M 4.769 8 c 0 0.762 -0.623 1.385 -1.385 1.385 S 2 8.762 2 8 s 0.623 -1.385 1.385 -1.385 S 4.769 7.238 4.769 8 Z M 9.385 8 c 0 0.762 -0.623 1.385 -1.385 1.385 S 6.615 8.762 6.615 8 S 7.238 6.615 8 6.615 S 9.385 7.238 9.385 8 Z M 4.769 12.615 c 0 0.762 -0.623 1.385 -1.384 1.385 S 2 13.377 2 12.615 s 0.623 -1.385 1.385 -1.385 s 1.384 0.624 1.384 1.385 Z M 9.385 12.615 C 9.385 13.377 8.762 14 8 14 s -1.385 -0.623 -1.385 -1.385 s 0.623 -1.384 1.385 -1.384 s 1.385 0.623 1.385 1.384 Z M 14 3.385 c 0 0.762 -0.623 1.385 -1.385 1.385 s -1.385 -0.623 -1.385 -1.385 S 11.854 2 12.615 2 C 13.377 2 14 2.623 14 3.385 Z M 14 8 c 0 0.762 -0.623 1.385 -1.385 1.385 S 11.231 8.762 11.231 8 s 0.623 -1.385 1.385 -1.385 C 13.377 6.615 14 7.238 14 8 Z M 14 12.615 c 0 0.762 -0.623 1.385 -1.385 1.385 s -1.385 -0.623 -1.385 -1.385 s 0.623 -1.385 1.385 -1.385 A 1.39 1.39 0 0 1 14 12.615 Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="" data-product_num="4" class="product-size size-4">
                                <svg viewBox="0 0 16 16" widht="100%" height="100%">
                                    <path
                                        d="M 7 4.5 C 7 5.875 5.875 7 4.5 7 S 2 5.875 2 4.5 S 3.125 2 4.5 2 S 7 3.125 7 4.5 Z M 14 4.5 C 14 5.875 12.875 7 11.5 7 S 9 5.875 9 4.5 S 10.125 2 11.5 2 S 14 3.125 14 4.5 Z M 7 11.5 C 7 12.875 5.875 14 4.5 14 S 2 12.875 2 11.5 S 3.125 9 4.5 9 S 7 10.125 7 11.5 Z M 14 11.5 c 0 1.375 -1.125 2.5 -2.5 2.5 S 9 12.875 9 11.5 S 10.125 9 11.5 9 s 2.5 1.125 2.5 2.5 Z">
                                    </path>
                                </svg>
                            </a>
                            <a href="" data-product_num="3" class="product-size size-3">
                                <svg viewBox="0 0 16 16" widht="100%" height="100%">
                                    <path d="M 14 8 c 0 3.3 -2.7 6 -6 6 s -6 -2.7 -6 -6 s 2.7 -6 6 -6 s 6 2.7 6 6 Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products">
                <div class="row">
                    <?php foreach ($fan as $item){ ?>
                    <div class="card ml-2 mt-lg-5 mb-lg-4" style="width: 23%;">
                        <img src='./img/<?php echo $item['id']; ?>.jpg' class="card-img-top" alt="..." height="200px">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item['Name']; ?> - <?php echo $item['SKU']; ?></h5>
                            <p class="card-text">Color: <?php echo $item['Finish']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Type: <?php echo $item['Location_Rating']; ?></li>
                            <li class="list-group-item">Control Type: <?php echo $item['Control_Type']; ?></li>
                            <li class="list-group-item">Size: <?php echo $item['Motor_Size']; ?></li>
                            <li class="list-group-item">Collection: <?php echo $item['Collection']; ?></li>

                            <li class="list-group-item">Number of Blades: <?php echo $item['Number_of_Blades']; ?></li>
                        </ul>
                        <form method="post" action="detail.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                            <button class="btn btn-success"
                                onclick="window.location = 'detail.php?id=<?php echo $item['id']; ?>'" type="button"
                                value="edit">Detail</button>
                        </form>
                    </div>
                    <?php } ?>
                </div>
            </div>

            <!-- The Modal -->
            <div class="modal" id="myModal">
                <div class="modal-dialog modal-lg modal-xl">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 bg-light">
                                        <div class="imgdetail">
                                            <img src="./img/223.jpg" style="height: 100%;width:100%">
                                        </div>
                                    </div>
                                    <div class="container1right col-md-6 col-sm-6 bg-light">
                                        <div class="detail-product">
                                            <h1>Klinch 44</h1>
                                            <ul>
                                                <li>Damp Rated</li>
                                                <li>44″ Sweep Blades Included</li>
                                                <li>D18W LED Light Kit Included</li>
                                                <li>Remote Control Included</li>
                                            </ul>
                                            <label class="labeldetail">FINISH: <img class="change_color"
                                                    src="https://fanimation.com/wp-content/uploads/2019/12/BL.jpg"
                                                    style="height: 50px;width:40px" href=""> <img class="change_color"
                                                    src="https://fanimation.com/wp-content/uploads/2019/12/DZ.jpg"
                                                    style="height: 50px;width:40px" href=""> <img class="change_color"
                                                    src="https://fanimation.com/wp-content/uploads/2019/12/GR.jpg"
                                                    style="height: 50px;width:40px" href=""> <img class="change_color"
                                                    src="https://fanimation.com/wp-content/uploads/2019/12/MW.jpg"
                                                    style="height: 50px;width:40px" href=""> <img class="change_color"
                                                    src="https://fanimation.com/wp-content/uploads/2019/12/SL.jpg"
                                                    style="height: 50px;width:40px" href=""></label> </br>
                                            <label class="labeldetail1">SKU: <span>MAD8514-48</span></label></br>
                                            <label class="labeldetail1">CATEGORIES: <span>FANS, MIX & MATCH, WET
                                                    RATED</span></label>
                                        </div>
                                        <div class="stars">
                                            <i>RATING:</i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                            <span>( 250 )</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Modal footer -->
                    </div>
                </div>
            </div>
            <!-- The Modal end-->
        </div>
    </div>
    <div class="container-fluid">
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

        <div class=" text-center text-md-left mt-5">
            <div class="row">
                <div class="contact-fanimation col-md-3 mx-auto mb-4">
                    <img src="https://fanimation.com/wp-content/uploads/2021/04/Logo_white_1.png" alt="">
                    <!-- <h6 class="text-uppercase font-weight-bold">Fanimation</h6>
                            <hr class="bg-light mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; height: 0.5px"> -->
                    <ul class="list-unstyled text-white text-">
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
                <div class="contact col-md-3 mx-auto mb-4">
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
    <!-- FOOTER -->
    </div>
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