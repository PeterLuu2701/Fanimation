<!DOCTYPE html>
<html lang="en">
<?php
require './BE/Business.php';
// require_once './delete.php';
// session_start();

date_default_timezone_set("Asia/Ho_Chi_Minh");
$fan = get_all_fan();
// disconnect_db();
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link rel="stylesheet" href="themify-icons.css">
    <link rel="stylesheet" href="style-product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <div class="banner-page">
            <div class="content-banner">
                <div class="container">
                    <h1 class="page-title" style="color: #ffffff;">Products</h1>
                    <nav style="color: #ffffff;">
                        <a class="a-style" href="">Home</a>
                        &nbsp;/&nbsp; Products
                    </nav>
                </div>
            </div>
        </div>
        <div class="main-container">
            <div class="row-main">
                <div class="main-content col-sm-12">
                    <div class="toolbar-product toolbar-top">
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
                                        <path
                                            d="M 14 8 c 0 3.3 -2.7 6 -6 6 s -6 -2.7 -6 -6 s 2.7 -6 6 -6 s 6 2.7 6 6 Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-product">
                <div class="row">
                    <?php foreach ($fan as $item){ ?>
                    <div class="card ml-2 mt-lg-5 mb-lg-4" style="width: 23%;">
                        <img src="..." class="card-img-top" alt="...">
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
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</body>

</html>