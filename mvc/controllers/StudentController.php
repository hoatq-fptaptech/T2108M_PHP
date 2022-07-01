<?php

include "models/Student.php";

class StudentController
{
    public function getStudents(){
        $studentObj = new Student();
        $list = $studentObj->all();
    }
}
