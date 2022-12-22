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
                        <h3 class="panel-title">Nhập danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <a href="add-category.php" title="" class="btn btn-info">Thêm mới danh mục</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Danh sách danh mục</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Name</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($category as $key => $value) { ?>
                                    <tr>
                                        <td><?php echo $key + 1 ?></td>
                                        <td><?php echo $value['name'] ?></td>
                                       
                                        <td>
                                            <a href="edit-category.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-info">Edit</a>
                                            <a href="delete-category.php?id=<?php echo $value['id'] ?>" title="" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php 
include 'footer.php';
?>