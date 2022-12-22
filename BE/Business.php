<?php

// Biến kết nối toàn cục
global $conn;

// Hàm kết nối database
function connect_db()
{
    require_once "connectInfo.php";
    // echo servername;
    // Gọi tới biến toàn cục $conn
    global $conn;
    
    
    
    // Nếu chưa kết nối thì thực hiện kết nối
    if (!$conn){

        $conn = mysqli_connect(servername, username, password, dbname) or die ("Can't not connect to database");
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');
       
    }
}
 
// Hàm ngắt kết nối
function disconnect_db()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Nếu đã kêt nối thì thực hiện ngắt kết nối
    if ($conn){
        mysqli_close($conn);
    }
}

//Hàm register
function register($user, $pass, $email){

  // Gọi tới biến toàn cục $conn
  global $conn;

  // Hàm kết nối
    connect_db();

    // Chống SQL Injection
    $user = addslashes($user);
    $pass = addslashes($pass);
  
    // Truy vấn 
    $sql = "
            INSERT INTO user_info ( Username, Pass_word, Email) VALUES
            ( '$user', '$pass', '$email')
            ";
//  echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
  
}

// Hàm Login
function login($userLogin, $passLogin){
  // Gọi tới biến toàn cục $conn
  global $conn;

  // Hàm kết nối
    connect_db();

    // Chống SQL Injection
    $userLogin = addslashes($userLogin);
    $passLogin = addslashes($passLogin);
  
    // Truy vấn 
    $sql = "
            SELECT * FROM user_info WHERE Username = '$userLogin' AND Pass_word = '$passLogin'
            ";
//  echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    $count = mysqli_num_rows($query);
    if($count==1){
				$_SESSION["loged"] = true;
        // $_SESSION['username'] = $userLogin;
        header("location: index.php");
    }else{
				header("location:login.php");
				setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
			}
    // return $query;
}
 
// Hàm lấy tất cả fan
function get_all_fan()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả house
    $sql = "select * from products";
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Lặp qua từng record và đưa vào biến kết quả
    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm lấy house theo ID
function get_fan($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả house
    $sql = "select * from products where id = {$id}";
    //  echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    // Mảng chứa kết quả
    $result = array();
     
    // Nếu có kết quả thì đưa vào biến $result
    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
     
    // Trả kết quả về
    return $result;
}
 
// Hàm thêm fan
function add_fan($name, $finish, $type, $control_type, $motor_size, $collection, $blades, $target_file)
{
    echo 'Vô hàm';
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     

    // Chống SQL Injection
    $name = addslashes($name);
    $finish = addslashes($finish);
    $type = addslashes($type);
    $control_type = addslashes($control_type);
    $motor_size = addslashes($motor_size);
    $collection = addslashes($collection);
    $blades = addslashes($blades);
    $ImagePath = addslashes($target_file);
    
    
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO products(Name, Finish, Location_Rating, Control_Type, Motor_Size, Collection, Number_of_Blades, image) VALUES
            ('$name','$finish','$type', '$control_type','$motor_size', '$collection', '$blades', '$ImagePath' )
    ";
    //  echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// Hàm sửa thông tin
function edit_fan($id, $username, $address, $name, $finish, $type, $control_type, $motor_size, $collection, $blades, $target_file)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $id = addslashes($id);
    $username = addslashes($username);
    $address = addslashes($address);
    $name = addslashes($name);
    $finish = addslashes($finish);
    $type = addslashes($type);
    $control_type = addslashes($control_type);
    $motor_size = addslashes($motor_size);
    $collection = addslashes($collection);
    $blades = addslashes($blades);
    $ImagePath = addslashes($target_file);
    
     
    $sql = "
            UPDATE products SET
            Name = '$name',
            Finish = '$finish',
            Location_Rating ='$type',
            Control_Type='$control_type',
            Motor_Size= '$motor_size',
            Collection = '$collection',
            Number_of_Blades = '$blades',
            image= '$ImagePath'
            Where id='$id'
    ";
    echo $sql;
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// // Hàm xóa fan
function delete_fan($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy xóa
    $sql = "
            DELETE FROM products
            WHERE id = '$id'
  ";
    //  echo $sql;    

    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}


/*
UPLOAD FILE
*/

function UploadFile($target_file)
{

  

  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  

  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  
  // Check file size
  if ($_FILES["fileUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }
  
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
  
}

?>