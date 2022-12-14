<?php

// Biến kết nối toàn cục
global $conn;

// Hàm kết nối database
function connect_db()
{
    require_once "./libs/connectInfo.php";
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
function register($user, $pass, $acc){

  // Gọi tới biến toàn cục $conn
  global $conn;

  // Hàm kết nối
    connect_db();

    // Chống SQL Injection
    $user = addslashes($user);
    $acc = addslashes($acc);
    $pass = addslashes($pass);
  
    // Truy vấn 
    $sql = "
            INSERT INTO user(user, pass, acc) VALUES
            ('$user', '$pass', '$acc')
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
            SELECT * FROM user WHERE user = '$userLogin' AND pass = '$passLogin'
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
				header("location:init.php");
				setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
			}
    // return $query;
}
 
// Hàm lấy tất cả house
function get_all_houses()
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả house
    $sql = "select * from business";
     
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
function get_houses($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy vấn lấy tất cả house
    $sql = "select * from business where id = {$id}";
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
 
// Hàm thêm house
function add_business($name, $phone, $address, $city, $square, $price, $target_file)
{
    echo 'Vô hàm';
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     

    // Chống SQL Injection
    $name = addslashes($name);
    $phone = addslashes($phone);
    $address = addslashes($address);
    $city = addslashes($city);
    $square = addslashes($square);
    $price = addslashes($price);
    $ImagePath = addslashes($target_file);
    
    
    // Câu truy vấn thêm
    $sql = "
            INSERT INTO business(name, phone, address, city, square, price, image) VALUES
            ('$name','$phone','$address', '$city','$square', '$price', '$ImagePath' )
    ";
    //  echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// Hàm sửa thông tin
function edit_house($id, $name, $phone, $address, $city, $square, $price, $target_file)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Chống SQL Injection
    $id = addslashes($id);
    $name = addslashes($name);
    $phone = addslashes($phone);
    $address = addslashes($address);
    $city = addslashes($city);
    $square = addslashes($square);
    $price = addslashes($price);
    $ImagePath = addslashes($target_file);
    
     
    // Câu truy sửa
    $sql = "
            UPDATE business SET
            name = '$name',
            phone = '$phone',
            address='$address',
            city='$city',
            square='$square',
            price= '$price',
            image= '$ImagePath'
            
            Where id='$id'
    ";
    echo $sql;
     
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
     
    return $query;
}
 
 
// // Hàm xóa house
function delete_houses($id)
{
    // Gọi tới biến toàn cục $conn
    global $conn;
     
    // Hàm kết nối
    connect_db();
     
    // Câu truy xóa
    $sql = "
            DELETE FROM business
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