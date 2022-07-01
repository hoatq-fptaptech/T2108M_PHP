<?php
session_start();// khởi chạy phiên làm việc
$user = [
  "fullname"=>$_POST["fullname"],
  "email"=>$_POST["email"],
  "pwd"=>$_POST["pwd"],
];

$_SESSION["user"] = $user;
echo "DONE";
