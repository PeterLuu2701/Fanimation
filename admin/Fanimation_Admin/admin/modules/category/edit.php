<?php 
include 'list.php';

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

if(isset($_POST['SKU_Category'])){
    $SKU_Category = $_POST['SKU_Category'];
    $SKU = $_POST['SKU'];

    $sql = "UPDATE category SET SKU_Category = '$SKU_Category', SKU = '$SKU' WHERE id = $id ";

    $query = mysqli_query($conn,$sql);

    if($query){
        header('location: list.php');
    }
}
?>

    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Category</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" id="" placeholder="Add category name" name="SKU_Category" value="<?php echo $category['SKU_Category'] ?>">
                                
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
