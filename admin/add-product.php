<?php
include 'header.php';

$category = mysqli_query($conn, "SELECT * FROM category");
if(isset($_POST['name'])){
    // echo "<pre>";                                    
    // print_r($_FILES['image']);
    // die();
    $name = $_POST['name'];
    $id_category = $_POST['id_category'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    

    if($_FILES['image']['error'] == 0){
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], '../uploads/'.$file_name);
        $sql = "INSERT INTO product(name, id_category, image, price, status, description) VALUE ('$name','$id_category','$file_name','$price','$status','$description')";
        $query = mysqli_query($conn,$sql);
        var_dump($query);
        if($query){
            header('location: list-product.php');
        }
        else{
            echo "Error occured";
        }
    } else {
        echo "Cannot upload file";
    }
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm mới sản phẩm</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form" enctype="multipart/form-data">
                            <legend>Nhập các thông tin</legend>
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm" name="name"> 
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select id="input" class="form-control" name="id_category">
                                    <option value="">Lựa chọn danh mục</option>
                                    <?php foreach($category as $cate) {?>
                                        <option value="<?php echo $cate['id'] ?>"><?php echo $cate['id']?><?php echo $cate['name']?></option>
                                    <?php }?>
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm</label>
                                <input type="file" class="form-control" id="" placeholder="Input field" name="image"> 
                            </div>
                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập giá tiền" name="price"> 
                            </div>
                            <div class="form-group">
                                <label for="">Trạng thái</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="1" checked="checked">Hiện 
                                    </label>
                                </div> 
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="0">Ẩn
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                    <label for="">Mô tả</label>
                                    <input type="text" class="form-control" id="" placeholder="Nhập thông tin mô tả" name="description"> 
                            </div>

                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

            
        </div>
    </div>

<?php
include 'footer.php';
?>