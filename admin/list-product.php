<?php
include 'header.php';

$product = mysqli_query($conn,"SELECT * FROM product");
?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Nhập sản phẩm</h3>
                    </div>
                    <div class="panel-body">
                        <a href="add-product.php" class="list-group-item active">Thêm mới sản phẩm</a>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Danh sách sản phẩm</h3>
                        </div>
                            <div class="panel-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($product as $key => $data) { ?>
                                        <tr>
                                            <td><?php echo $key +1 ?></td>
                                            <td><?php echo $data['name'] ?></td>
                                            <td><img src="../uploads/<?php echo $data['image']?>" alt="" width="50px" ?></td>
                                            <td><?php echo $data['price'] ?></td>
                                            <td><?php echo $data['status'] ?></td>
                                            
                                            <td>
                                                <a href="edit.php?id=<?php echo $data['id'] ?>" title="" class="btn btn-info">Edit</a>
                                                <a href="delete.php?idp=<?php echo $data['id'] ?>" title="" class="btn btn-danger">Delete</a>
                                            </td>
                                            
                                            <!-- <td>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                                <button type="submit" class="btn btn-primary">Delete</button>
                                                
                                                <a href="" title=""><i class="glyphicon glyphicon-trash"></i></a>
                                                <a href="" title=""><i class="glyphicon glyphicon-edit"></i></a>
                                            </td> -->
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