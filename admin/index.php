<?php 
include 'connect.php';
include 'header.php'; 
$category = mysqli_query($conn,"SELECT * FROM category WHERE status = 0");
$products = mysqli_query($conn, "SELECT * FROM product WHERE status = 1 ORDER BY id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
      .carousel-inner .item img{
        max-height: 300px;
        width: 100%;
      }  
    </style>
</head>
<body>
    

    <!-- Carousel container
    <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:300px;margin:auto;"> -->

    <!-- Indicators -->
    <!-- <ol class="carousel-indicators">
        <li data-target="#my-pics" data-slide-to="0" class="active"></li>
        <li data-target="#my-pics" data-slide-to="1"></li>
        <li data-target="#my-pics" data-slide-to="2"></li>
    </ol> -->

    <!-- Content -->
    <!-- <div class="carousel-inner" role="listbox"> -->

    <!-- Slide 1 -->
    <!-- <div class="item active">
        <img src="uploads/header-image.jpg" alt="Sunset over beach">
    </div> -->

    <!-- Slide 2 -->
    <!-- <div class="item">
        <img src="uploads/web-doctor.jpg" alt="Rob Roy Glacier">
    </div> -->

    <!-- Slide 3 -->
    <!-- <div class="item">
        <img src="uploads/web-header.jpg" alt="Longtail boats at Phi Phi">
    </div>

    </div> -->

    <!-- Previous/Next controls -->
    <!-- <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    </div> -->

    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img src="../uploads/banner1.jpg" alt="">
            </div>
            <div class="item active">
                <img src="../uploads/web-header.jpg" alt="">
            </div>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <?php foreach ($category as $key => $value){ ?>
                            <a href="index.php" class="list-group-item"><?php echo $value['name'] ?> </br></a> 
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h4 class="panel-title">Sản phẩm mới nhất</h4>
                    </div>
                    <div class="panel-body">
                        <?php foreach ($products as $key => $value){ ?>
                        <div class="col-md-3">
                            <div class="thumbnail" style="cursor: pointer; height: 220px; width: 160px" >
                                <img onclick="window.location.href = `/C1909G/admin/product-detail.php?id=<?php echo $value['id'] ?>`" style="height: 150px width: 150px"  src="../uploads/<?php echo $value['image'] ?>" alt="" >
                                <div class="caption">
                                    <h4><?php echo $value['name'] ?></h4>
                                    
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src="Hello World"></script>
</body>
</html>

<?php
include 'footer.php';
?>