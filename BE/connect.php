<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


function connection() {
    $servername = "localhost";
    $dbname = "qlbds";
    $username = "root";
    $password = "";
   // $port = '3306';
        // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo $conn->connect_error;

      // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
      
}

// Create connection
// them sinh viên mới
function insertSV () {
    $_conn = connection();
    // them moi
    $sql = "INSERT INTO student (name, birthday , village ,image )
    VALUES ('John1', '2000-01-01', 'USA', 'image.png')";

    if ($_conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $_conn->error;
    }

    $_conn->close();

}

//
// lấy thông tin sinh 
function selectSV () {
    $_conn = connection();
    // them moi
    $sql = "SELECT * FROM student";
    $result = $_conn->query($sql);
    $_conn->close();
    return $result;
    
}

// viênthem sinh viên mới
function chitietSV ($id = 1) {
    $_conn = connection();
    // them moi
    $sql = "SELECT * FROM student where id=".$id;
    $result = $_conn->query($sql);
    $_conn->close();
    return $result;
    
}