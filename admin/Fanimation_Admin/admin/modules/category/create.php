<?php 
include 'list.php';
// if(isset($_POST['name'])){
//     $name = $_POST['name'];
//     $status = $_POST['status'];

//     $sql = "INSERT INTO category(name,status) VALUES ('$name','$status')";

//     $query = mysqli_query($conn,$sql);

//     if($query){
//         header('location: category.php');
//     }
// }

if(isset($_POST['SKU_Category'])){
    $SKU = $_POST['SKU'];
    $SKU_Category = $_POST['SKU_Category'];
    

    $sql = "INSERT INTO category(SKU,SKU_Category) VALUES ('$SKU','$SKU_Category')";

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
                        <h3 class="panel-title">Add Category</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                <label for="">Category</label>
                                <input type="text" class="form-control" id="" placeholder="Add category name" name="SKU_Category">
                            </div>
                            

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
