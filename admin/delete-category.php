<?php 
include 'connect.php';
include 'header.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_sql = "DELETE FROM category WHERE id=$id";
    $query = mysqli_query($conn, $delete_sql);
    if($query){
        header('location: category.php');
    }
}

// if(isset($_GET['id'])){
//     $id = $_GET['id'];
//     $sql = "DELETE * FROM category WHERE id = $id";
//     $query = mysqli_query($conn,$sql);
//     if($query){
//         header('location: category.php');
//     }
// }
?>

    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Xóa danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Tên danh mục</label>
                                <input type="text" class="form-control" id="" placeholder="Nhập tên danh mục" name="name" value="<?php echo $category['name'] ?>">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Xóa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
include 'footer.php';
?>