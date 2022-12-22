<?php
//lấy dữ liệu từ id cần xóa
$data = $_GET["idp"];
//echo $id;
//kết nối
require_once 'config.php';
//câu lệnh sql
$xoa_sql = "DELETE FROM products WHERE id=$data";
mysqli_query($conn, $xoa_sql);
//echo "Đã xóa thành công";
// Trở về trang bảng sinh viên (showsv.php)
header("location: list.php");
?>