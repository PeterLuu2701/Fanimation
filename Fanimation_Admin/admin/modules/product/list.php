<div class="jumbotron">
    <div class="container">
        <h2>Product List</h2>
        <!-- <p>Content...</p> -->
        <p>
            <a class="btn btn-primary btn-lg">Learn more</a>
        </p>
    </div>
</div>

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
                                        <th>ID</th>
                                        <th>SKU</th>
                                        <th>Name</th>
                                        <th>Image</th>                                     

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($products as $key => $data) { ?>
                                        <tr>
                                            <td><?php echo $key +1 ?></td>
                                            <td><?php echo $data['SKU'] ?></td>
                                            <td><?php echo $data['Name'] ?></td>
                                            <td><img src="../uploads/<?php echo $data['image']?>" alt="" width="50px" ?></td>
                                            
                                            <td>
                                                <a href="edit.php?id=<?php echo $data['id'] ?>" title="" class="btn btn-info">Edit</a>
                                                <a href="delete.php?idp=<?php echo $data['id'] ?>" title="" class="btn btn-danger">Delete</a>
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


<!-- <table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>CATEGORY</th>
            <th>SALE</th>
            <th>CREATED AT</th>
            <th>IMAGE</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>
                <img src="https://fanimation.com/wp-content/uploads/2022/01/FPS7681BN.jpg" width="60" alt="">
            </td>
            <td>
                <a href="index.php?r=product&a=edit&id=1" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
            </td>
            <td>
                <a href="index.php?r=product&id=1" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
            </td>
            <td>
                <a href="index.php?r=product&id=1" class="btn btn-sm btn-info"><i class="fa fa-info"></i></a>
            </td>
        </tr>
    </tbody>
</table> -->


