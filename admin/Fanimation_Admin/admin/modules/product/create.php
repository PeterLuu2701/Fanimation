<?php
include 'list.php';
// $category = mysqli_query($conn, "SELECT * FROM category");
// if(isset($_POST['name'])){
//     // echo "<pre>";                                    
//     // print_r($_FILES['image']);
//     // die();
//     $name = $_POST['name'];
//     $id_category = $_POST['id_category'];
//     $price = $_POST['price'];
//     $status = $_POST['status'];
//     $description = $_POST['description'];
    

//     if($_FILES['image']['error'] == 0){
//         $file = $_FILES['image'];
//         $file_name = $file['name'];
//         move_uploaded_file($file['tmp_name'], '../uploads/'.$file_name);
//         $sql = "INSERT INTO product(name, id_category, image, price, status, description) VALUE ('$name','$id_category','$file_name','$price','$status','$description')";
//         $query = mysqli_query($conn,$sql);
//         var_dump($query);
//         if($query){
//             header('location: list-product.php');
//         }
//         else{
//             echo "Error occured";
//         }
//     } else {
//         echo "Cannot upload file";
//     }
// }
$category = mysqli_query($conn, "SELECT * FROM category");
if(isset($_POST['SKU'])){
    // echo "<pre>";                                    
    
    // die();
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
    // $image = $_POST['image']; //
    
    if($_FILES['image']['error'] == 0){
        $file = $_FILES['image'];
        $file_name = $file['name'];
        move_uploaded_file($file['tmp_name'], '../uploads'.$file_name);
        $sql = "
        INSERT INTO products(
            SKU,
            Name,
            Finish,
            Blade_Span,
            Bulb_Type,
            Close_to_Ceiling_Kit,
            Control_Type,
            Energy_Star,
            Collection,
            Light_Kit_Included,
            Location_Rating,
            Motor_Size,
            Motor_Type,
            Number_of_Blades,
            image
        ) 
        VALUE (
            '$SKU',
            '$Name',
            '$Finish',
            '$Blade_Span',
            '$Bulb_Type',
            '$Close_to_Ceiling_Kit',
            '$Control_Type',
            '$Energy_Star',
            '$Collection',
            '$Light_Kit_Included',
            '$Location_Rating',
            '$Motor_Size',
            '$Motor_Type',
            '$Number_of_Blades',
            '$file_name'
        )";
        $query = mysqli_query($conn,$sql); // 
        var_dump($query);
        if($query){
            header('location: ./list.php');
        }
        else{
            echo "Error occured";
        }
    } else {
        echo "Cannot upload file";
    }
}
?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add product</h3>
                    </div>
                    <div class="panel-body">
                        <form action="" method="POST" role="form" enctype="multipart/form-data">
                            <legend>Detail Info</legend>
                            <div class="form-group">
                                <label for="">SKU</label>
                                <input type="text" class="form-control" id="" placeholder="" name="SKU"> 
                            </div>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" id="" placeholder="" name="Name"> 
                            </div>
                            <!-- TÊN DANH MỤC LẤY THEO ID DANH MỤC
                            <div class="form-group">
                                <label for="">Category</label>
                                <select id="input" class="form-control" name="SKU_Category">
                                    <option value="">Category Selection</option>
                                    <?php foreach($category as $cate) {?>
                                        <option value="<?php echo $cate['id'] ?>"><?php echo $cate['id']?><?php echo $cate['SKU']?></option>
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
                                <input type="text" class="form-control" id="" placeholder="" name="Motor_Type"> 
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

