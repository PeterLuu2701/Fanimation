<!DOCTYPE html>
<html lang="en">
<?php
require './BE/login_logic.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style-contact.css">
</head>

<body>
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
    <!-- HEADER -->
    <div class="header-background">
        <div class="header-content">
            <h1>Contact Us</h1>
        </div>
    </div>


    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h3>Request information</h3>
                <h5>Leave Us a Quick Message!</h5>
                <p>If you are in need of additional information not found on our web site or would just like to learn
                    more about the company in general, please complete the following form.</p>
            </div>
        </div>
    </div>
    <hr class="my-4">
    <!-- Contact Start -->
    <div class="container-fluid ">
        <div class="container ">

            <div class="row h-100 align-items-center justify-content-center">
                <div class="row">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="col-sm-6 control-group">
                                        <input type="text" class="form-control p-4" id="name" placeholder="Your Name"
                                            required="required"
                                            data-validation-required-message="Please enter your name" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="col-sm-6 control-group">
                                        <input type="email" class="form-control p-4" id="email" placeholder="Your Email"
                                            required="required"
                                            data-validation-required-message="Please enter your email" />
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject"
                                        required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control p-4" rows="6" id="message" placeholder="Message"
                                        required="required"
                                        data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block" type="submit" id="sendMessageButton">Send
                                        Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6" style="min-height: 400px;">
                        <div class="position-relative h-100 rounded overflow-hidden">
                            <iframe style="width: 100%; height: 100%; object-fit: cover;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3058.925932837542!2d-86.24890418512103!3d39.94304639223601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8814aa9825faa5e1%3A0xe542c8f68a2cd493!2s10983%20Bennett%20Pkwy%20Ext%2C%20Zionsville%2C%20IN%2046077%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1669715711680!5m2!1svi!2s"
                                frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <hr class="my-4">
    <!-- Contact End -->

    <div class="container-fluid padding">
        <div class="row">
            <div class="col-12">
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <h6><label class="form-select-custom" for="selection">How did you hear about Fanimation?</label>
                        </h6>
                        <select class="custom-select">
                            <option selected>Contractor</option>
                            <option value="1">Friend/Family</option>
                            <option value="2">Salesperson</option>
                            <option value="3">Advertisement</option>
                            <option value="4">In Store Display</option>
                            <option value="5">Advertisement</option>
                            <option value="6">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <h6><label class="form-check" for="check1">Catalog</label></h6>
                        <div class="form-group form-check py-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                            <label class="form-check-label" for="exampleCheck1">Please send me a catalog</label>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <h6><label class="form-check-label" for="gridRadios3">Email Sign Up*</label></h6>
                        <fieldset class="form-group row">
                            <legend class="col-form-label col-sm-2 float-sm-left pt-0"></legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1"
                                        value="option1" checked />
                                    <label class="form-check-label" for="gridRadios1">I would like to receive emails
                                        from Fanimation about new products, special promotions and other
                                        updates.</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                        value="option2" />
                                    <label class="form-check-label" for="gridRadios2">No thank you.</label>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="my-4">
    <div class="container-fluid padding">
        <div class="row">
            <div class="col-12">
                <h5>Fields marked with * are required.</h5>
                <p>The data entered into this form is kept strictly confidential. Fanimation® does not sell, transfer or
                    otherwise distribute personal data.</p>
            </div>
        </div>
    </div>
    <div class="container-fluid py-3">
        <div class="jumbotron">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <h3>Looking for product support?</h3>
                <p>Visit our archive of installation and user guides, or submit your support question – including photos
                    – to
                    our technical team, so that we can get back to you quickly.</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-2">
                <a href="#">
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

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
    // Data Picker Initialization
    $('.datepicker').datepicker({
        inline: true
    });
    </script>
</body>

</html>