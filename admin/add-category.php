<?php 
include 'header.php';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $status = $_POST['status'];

    $sql = "INSERT INTO category(name,status) VALUES ('$name','$status')";

    $query = mysqli_query($conn,$sql);

    if($query){
        header('location: category.php');
    }
}
?>

    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Thêm mới danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh mục" name="name">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
include 'footer.php';
?>