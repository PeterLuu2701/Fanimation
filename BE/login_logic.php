<?php
// echo "hhhhh";
require './BE/Business.php';
// var_dump($_POST);

if(!empty($_POST["register"])){
	// echo "hhhhh121212";
// echo $_POST["register"];
$data['user']        = isset($_POST['user']) ? $_POST['user'] : '';
$data['pass']        = isset($_POST['pass']) ? $_POST['pass'] : '';
$data['passConfirm']        = isset($_POST['passConfirm']) ? $_POST['passConfirm'] : '';
$data['acc']        = isset($_POST['acc']) ? $_POST['acc'] : '';

$errors = array();
if (empty($data['user'])){
        $errors['user'] = 'Chưa nhập userName';
    }
if (empty($data['pass'])){
        $errors['pass'] = 'Chưa nhập password';
    }
if (empty($data['passConfirm'])){
        $errors['passConfirm'] = 'Chưa nhập confirm password';
    }
if ($data['passConfirm'] != $data['pass']){
        $errors['passConfirm'] = 'Password và Confirm Password không giống nhau';
        $errors['pass'] = 'Password và Confirm Password không giống nhau';
    }
if (empty($data['acc'])){
        $errors['acc'] = 'Chưa nhập tên';
    }

if ($errors){
   setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0); 
   echo '<script>alert("Đăng ký không thành công!")</script>';
}

// var_dump($errors);
if (!$errors) {
    register($data['user'], $data['pass'], $data['acc']);
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

disconnect_db();
}
	?>