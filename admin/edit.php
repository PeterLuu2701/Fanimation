<?php 
include 'header.php';
include 'connect.php';
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
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Chỉnh sửa sản phẩm</h3>
                    </div>
                    <div class="panel-body">
                        <form action="edit.php" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="idp" value="<?php echo $row['id']?>" id="">
                            <legend>Nhập các thông tin</legend>
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm" name="name" value="<?php echo $row['name'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label for="">Danh mục</label>
                                <select id="input" class="form-control" name="id_category">
                                    <option value="<?php echo $row['id_category'] ?>">Lựa chọn danh mục</option>
                                    <?php foreach($category as $cate) {?>
                                        <option id="<?php echo $cate['id']?>" value="<?php echo $cate['name']?>"></option>
                                    <?php }?>
                                </select> 
                            </div>
                            
                            <div class="form-group">
                                <label for="">Ảnh sản phẩm</label>
                                <input type="file" value="" class="form-control" id="" placeholder="Input field" name="image"> 
                            </div>
                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="text" value="<?php echo $row['price'] ?>" class="form-control" id="" placeholder="Nhập giá tiền" name="price"> 
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