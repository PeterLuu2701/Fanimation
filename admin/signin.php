<?php
include 'header.php';
?>
<?php 
// $id = $_GET['sid'];
// kết nối dữ liệu
require_once 'connect.php';

//Câu lệnh lấy thông tin về sinh viên
// $edit_sql = "SELECT * FROM login_lipstick WHERE id=$id";
// $result = mysqli_query($conn, $edit_sql);
// $row = mysqli_fetch_assoc($result);
//hiển thị lên form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-login.css" />
    <title>Login</title>
   
</head>
<body>
    <div class="container">
        <h1>Đăng nhập</h1>
        <form action="signin.php" method= "POST" enctype="multipart/form-data">
        <!-- <input type="hidden" name="sid" value="<?php echo $id;?>" id=""> -->
            <div class="form-group">
                <label >Username</label>
                <input type="text" id= "user" class="form-control" name="user">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" id= "password" class="form-control" name="password">
            </div>        
            <input class="btn btn-success" type="submit" value="Login" name="login">
        </form>
    </div>
</body>
</html>
<?php 
    require "connect.php";
    if (isset($_POST["login"])){
        $user=isset($_POST["user"])?$_POST["user"]:"";
        $password=isset($_POST["password"])?$_POST["password"]:"";
        $errors = array();
if(empty($user)){
	$errors['user'] = 'Chưa nhập userName';
}
if(empty($password)){
	$errors['password'] = 'Chưa nhập password';
}



if ($errors){
   setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0); 
}

if (!$errors) {
    $user = addslashes($user);
    $password = addslashes($password);
    $sql = "
            SELECT * FROM login_med WHERE user = '$user' AND password = '$password'
            ";
//  echo $sql;
    // Thực hiện câu truy vấn
    $query = mysqli_query($conn, $sql);
    
    $count = mysqli_num_rows($query);
    if($count==1){
				$_SESSION["loged"] = true;
        // $_SESSION['username'] = $userLogin;
        header("location: list-product.php");
    }else{
        echo '<script>alert("Đăng nhập không thành công!")</script>';
				// header("location:loginlipstick.php");
				setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
			}

	// // $_SESSION["loged"] = "true";
    // $_SESSION['username'] = $data['userLogin'];
        // setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
    }
    // Truy vấn 
    }
    ?>

<?php
include 'footer.php';
?>