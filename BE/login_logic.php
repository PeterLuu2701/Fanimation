<?php
// echo "hhhhh";
require './BE/Business.php';
// var_dump($_POST);

if(!empty($_POST["register"])){
	// echo "hhhhh121212";
// echo $_POST["register"];
$data['user']        = isset($_POST['user']) ? $_POST['user'] : '';
$data['pass']        = isset($_POST['pass']) ? $_POST['pass'] : '';
$data['email']        = isset($_POST['email']) ? $_POST['email'] : '';

$errors = array();
if (empty($data['user'])){
        $errors['user'] = 'Chưa nhập userName';
    }
if (empty($data['pass'])){
        $errors['pass'] = 'Chưa nhập password';
    }
if (empty($data['email'])){
        $errors['email'] = 'Chưa nhập email';
    }
     if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Email sai định dạng";
    }
    if(!preg_match('/^[a-z0-9 _]+$/i', $data['user'])){
        $errors['user'] = 'Vui lòng không nhập ký tự đặc biệt';
    }

if ($errors){
   setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0); 
   echo '<script>alert("Đăng ký không thành công!")</script>';
}

// var_dump($errors);
if (!$errors) {
    register($data['user'], $data['pass'], $data['email']);
    setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
    echo '<script>alert("Đăng ký thành công! Mời đăng nhập")</script>';
    // header("location: index.php");
}
}

//Khai báo sử dụng session
session_start();

if(isset($_POST["login"])){
$data['userLogin'] = isset($_POST['userLogin']) ? $_POST['userLogin'] : '';
$data['passLogin'] = isset($_POST['passLogin']) ? $_POST['passLogin'] : '';

$errors = array();
if(empty($data['userLogin'])){
	$errors['userLogin'] = 'Chưa nhập userName';
}
if(empty($data['passLogin'])){
	$errors['passLogin'] = 'Chưa nhập password';
}



if ($errors){
   setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
   echo '<script>alert("Đăng nhập không thành công!")</script>';
}

if (!$errors) {
	login($data['userLogin'], $data['passLogin']);
	// $_SESSION["loged"] = "true";
	$_SESSION['username'] = $data['userLogin'];
	setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
    echo '<script>alert("Đăng nhập thành công!")</script>';
    $_SESSION["loged"] = "true";
    session_start();
    // header("location: index.php");
}
}

    disconnect_db();
	?>