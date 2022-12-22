<?php 
echo "hhhhh";
require './BE/Business.php';

if (!empty($_POST['create'])){
    echo 'đã vào';
    // Lay data
    
    $data['username']        = isset($_POST['username']) ? $_POST['username'] : '';
    $data['address']        = isset($_POST['address']) ? $_POST['address'] : '';
    $data['name']        = isset($_POST['name']) ? $_POST['name'] : '';
    $data['finish']        = isset($_POST['finish']) ? $_POST['finish'] : '';
    $data['type']         = isset($_POST['type']) ? $_POST['type'] : '';
    $data['control_type']    = isset($_POST['control_type']) ? $_POST['control_type'] : '';
    $data['motor_size']          = isset($_POST['square']) ? $_POST['motor_size'] : '';
    $data['collection']          = isset($_POST['collection']) ? $_POST['collection'] : '';
    $data['blades']          = isset($_POST['blades']) ? $_POST['blades'] : '';
    
    $target_dir = "img/";
  
    $data['Target_file'] = $target_dir . basename($_FILES["fileUpload"]["name"]);
 
    // Validate thong tin
    $errors = array();
    if (empty($data['name'])){
        $errors['name'] = 'Chưa nhập tên sản phẩm';
    }
  
    if (empty($data['finish'])){
        $errors['finish'] = 'Chưa nhập màu sản phẩm';
    }
    if (empty($data['type'])){
        $errors['type'] = 'Chưa nhập loại';
    }
    if (empty($data['control_type'])){
        $errors['control_type'] = 'Chưa nhập loại control';
    }
    if (empty($data['motor_size'])){
        $errors['motor_size'] = 'Chưa nhập size';
    }
    if (empty($data['collection'])){
        $errors['collection'] = 'Chưa nhập collection';
    }
    if (empty($data['blades'])){
        $errors['blades'] = 'Chưa nhập số cánh quạt';
    }
    if (empty($data['Target_file'])){
        $errors['image'] = 'Chưa chọn hình ảnh';
    }
   
    // Neu ko co loi thi insert
    if (!$errors){
        echo 'Gọi hàm';
        UploadFile( $data['Target_file']);
        add_fan( $data['username'], $data['address'],$data['name'],$data['finish'], $data['type'], $data['control_type'],$data['motor_size'],$data['collection'], $data['blades'], $data['Target_file']);
        // Trở về trang danh sách
        header("location: product-Au.php");
    }
}

disconnect_db();

?>