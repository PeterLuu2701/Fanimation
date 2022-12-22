<?php 
include 'list.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        // thực hiện truy vấn lấy ra bản lưu tương ứng với id vừa lấy
        $result = mysqli_query($conn,"SELECT * FROM products WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['submit'])){
        //print_r($_FILES['image']);
        $data = $_POST['idp'];
        $SKU = $_POST['SKU'];
        $Name = $_POST['Name'];
        $Finish = $_POST['Finish'];
        $Blade_Span = $_POST['Blade_Span'];
        $Bulb_Type = $_POST['Bulb_Type'];
        $Close_to_Ceiling_Kit = $_POST['Close_to_Ceiling_Kit'];
        $Control_Type = $_POST['Control_Type'];
        $Energy_Star = $_POST['Energy_Star'];
        $Collection = $_POST['Collection'];
        $Light_Kit_Included = $_POST['Light_Kit_Included'];
        $Location_Rating = $_POST['Location_Rating'];
        $Motor_Size = $_POST['Motor_Size'];
        $Motor_Type = $_POST['Motor_Type'];
        $Number_of_Blades = $_POST['Number_of_Blades'];
        $image = $_POST['image'];
        var_dump($_FILES['image']);
        if (empty($_FILES['image']['SKU'])){
            $image = $row['image'];
        } else {
            $file = $_FILES['image'];
            $file_name = $file['SKU'];
            $url_image = '../uploads/'.$file_name;
            move_uploaded_file($file['tmp_name'], $url_image);
        }

        $sql = "UPDATE products SET SKU='$SKU', Name='$Name', Finish='$Finish', Blade_Span='$Blade_Span', Bulb_Type='$Bulb_Type', Close_to_Ceiling_Kit='$Close_to_Ceiling_Kit', Control_Type='$Control_Type', Energy_Star='$Energy_Star', Collection='$Collection', Light_Kit_Included='$Light_Kit_Included', Location_Rating='$Location_Rating', Motor_Size='$Motor_Size', Motor_Type='$Motor_Type', Number_of_Blades='$Number_of_Blades', image='$url_image' WHERE id = $data";
        $query = mysqli_query($conn,$sql);
        if ($query) {
            header('location: list.php');
        } else {
            echo "Error occured";
        }
        // $sql = "UPDATE product SET name='$name', id_category='$id_category', price='$price', image='$url_image', description='$description' WHERE id = $data";
        // $query = mysqli_query($conn,$sql);
        // if ($query) {
        //     header('location: list-product.php');
        // } else {
        //     echo "Error occured";
        // }
    }
?>


<div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Product</h3>
                    </div>
                    <div class="panel-body">
                        <form action="edit.php" method="POST" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="idp" value="<?php echo $row['id']?>" id="">
                            <legend>Detail Info</legend>
                            
                            <div class="form-group">
                                <label for="">Product SKU</label>
                                <input type="text" class="form-control" id="" placeholder="" name="" value="<?php echo $row['SKU'] ?>"> 
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="" placeholder="" name="name"> 
                            </div>
                            <!-- <div class="form-group">
                                <label for="">Category</label>
                                <select id="input" class="form-control" name="SKU_Category">
                                    <option value="<?php echo $row['SKU_Category'] ?>">Category Selection</option>
                                    <?php foreach($category as $cate) {?>
                                        <option id="<?php echo $cate['id']?>" value="<?php echo $cate['SKU']?>"></option>
                                    <?php }?>
                                </select> 
                            </div> -->
                            
                            <div class="form-group">
                                <label for="">Finish</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Finish"> 
                            </div>
                            <div class="form-group">
                                <label for="">Blade_Span</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Blade_Span"> 
                            </div>
                            <div class="form-group">
                                <label for="">Bulb_Type</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Bulb_Type"> 
                            </div>
                            <div class="form-group">
                                <label for="">Close_to_Ceiling_Kit</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Close_to_Ceiling_Kit"> 
                            </div>
                            <div class="form-group">
                                <label for="">Control_Type</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Control_Type"> 
                            </div>
                            <div class="form-group">
                                <label for="">Energy_Star</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Energy_Star"> 
                            </div>
                            <div class="form-group">
                                <label for="">Collection</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Collection"> 
                            </div>
                            <div class="form-group">
                                <label for="">Light_Kit_Included</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Light_Kit_Included"> 
                            </div>
                            <div class="form-group">
                                <label for="">Location_Rating</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Location_Rating"> 
                            </div>
                            <div class="form-group">
                                <label for="">Motor_Size</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Motor_Size"> 
                            </div>
                            <div class="form-group">
                                <label for="">Motor_Type</label>
                                <input type="text" class="form-control" id="" placeholder="P" name="Motor_Type"> 
                            </div>
                            <div class="form-group">
                                <label for="">Number_of_Blades</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Number_of_Blades"> 
                            </div>
                           
                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class="form-control" id="" placeholder="" name="image"> 
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>

                    </div>
                </div>
            </div>

            
        </div>
    </div>