<?php 
include 'connect.php';
include 'header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $edit_sql = "SELECT * FROM category WHERE id = $id";
    $sql = mysqli_query($conn, $edit_sql);
    $category = mysqli_fetch_assoc($sql);

    // $id = $_GET['id'];
    // $sql = mysqli_query($conn,"SELECT * FROM category WHERE id = $id");
    // $category = mysqli_fetch_assoc($sql);
    //$cate = mysqli_fetch_assoc($category);
    
}

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $status = $_POST['status'];

    $sql = "UPDATE category SET name = '$name', status = '$status' WHERE id = $id ";

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
                        <h3 class="panel-title">Chỉnh sửa danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh mục" name="name" value="<?php echo $category['name'] ?>">
                                
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
include 'footer.php';
?>