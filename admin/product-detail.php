<?php
include 'connect.php';
include 'header.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    // thực hiện truy vấn lấy ra bản lưu tương ứng với id vừa lấy
    $result = mysqli_query($conn,"SELECT * FROM product WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
}
if(isset($_POST['submit'])){
    //print_r($_FILES['image']);
    $data = $_POST['idp'];
    $name = $_POST['name'];
    $id_category = $_POST['id_category'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    var_dump($_FILES['image']);
    if (empty($_FILES['image']['name'])){
        $image = $row['image'];
    } else {
        $file = $_FILES['image'];
        $file_name = $file['name'];
        $url_image = '../uploads/'.$file_name;
        move_uploaded_file($file['tmp_name'], $url_image);
    }
    $sql = "UPDATE product SET name='$name', id_category='$id_category', price='$price', image='$url_image', description='$description' WHERE id = $data";
    $query = mysqli_query($conn,$sql);
    if ($query) {
        header('location: list-product.php');
    } else {
        echo "Error occured";
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" type="hidden" name="idp" value="<?php echo $row['id']?>" id="" src="../uploads/<?php echo $row['image'] ?>" alt="" width="350px">
                        </a>
                        <div class="media-body">
                            <h2 class="media-heading"><?php echo $row['name'] ?></h2></br>
                            <div class="caption">                 
                                    <h4><label>Giá tiền: </label> <span class="product_price"><?php echo $row['price'] ?> VNĐ</span></h4></br>          
                                                                                                 
                                <p>
                                    <a href="#" class="btn btn-primary">Mua</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Mô tả sản phẩm</h3>
                </div>
                <div class="panel-body">
                    <h4><?php echo $row['description'] ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>