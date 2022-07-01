<?php
include "controllers/StudentController.php";

$routing = $_GET["page"];
switch ($routing){
    case "student_list":{
        $ctr = new StudentController();
        $ctr->getStudents();
        break;
    }
    default: {
        die("404 not found");
    }
}
