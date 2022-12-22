<?php 
include 'list.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_sql = "DELETE FROM category WHERE id=$id";
    $query = mysqli_query($conn, $delete_sql);
    if($query){
        header('location: list.php');
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
                        <h3 class="panel-title">Delete Category</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" id="" placeholder="Add category name" name="SKU_Category" value="<?php echo $category['SKU_Category'] ?>">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
