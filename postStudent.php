<?php
if(!$_POST["email"]){
    header("Location: addStudent.php");
}
$serverName = "localhost";
$userName = "root";
$password = "root";
$dbName = "T2108M";
// connect db
$conn = new mysqli($serverName,$userName,$password,$dbName);
if($conn->connect_error){
    die($conn->connect_error);
}
$sql_txt = "insert into Students(studentName,dateOfBirth,address,email,phoneNumber) values(?,?,?,?,?);";
$stt = $conn->prepare($sql_txt);
$stt->bind_param("sssss",$name,$birth,$address,$email,$phone);
// set params and execute
$name = $_POST["studentName"];
$birth = $_POST["dateOfBirth"];
$address = $_POST["address"];
$email = $_POST["email"];
$phone = $_POST["phoneNumber"];
$stt->execute();

header("Location: databaseDemo.php");
