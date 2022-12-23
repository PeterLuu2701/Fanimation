<?php
// session_start();

// define('HOST', 'localhost');
// define('USER','root');
// define('PASSWORD','');
// define('DB_name','fanimation');

// include_once 'libraries/DB.php';
// include_once 'libraries/functions.php';


// $conn = mysqli_connect('localhost','root','','fanimation'); 
// mysqli_set_charset($conn, 'utf8');


$host = "localhost:3306";
$username = "root";
$password = "";
$conn = mysqli_connect($host, $username, $password, "fanimation");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

