<div class="jumbotron">
    <div class="container">
        <h2>Category List</h2>
        <!-- <p>Content...</p> -->
        <p>
            <a class="btn btn-primary btn-lg">Learn more</a>
        </p>
    </div>
</div>

<?php 
include 'header.php';
$sql = "SELECT * FROM category";
$category = mysqli_query($conn,$sql);

?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Category</h3>
                    </div>
                    <div class="panel-body">
                        <a href="create.php" title="" class="btn btn-info">Add Category</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">List Category</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>SKU_Category</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($category as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        
                                       
                                        <td>
                                            <a href="edit.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-info">Edit</a>
                                            <a href="delete.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-danger">Delete</a>
                                        </td>
                                        <td><?php echo $value['SKU_Category'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
