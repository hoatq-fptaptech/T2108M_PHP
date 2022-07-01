<?php
include "IModel.php";
include "helpers/Connector.php";

class Student implements IModel
{
    protected $_table = "Students";
    protected $_primaryKey = "id";

    public $id;
    public $studentName;
    public $dateOfBirth;
    public $address;
    public $email;
    public $phoneNumber;

    function all()
    {
        $conn = Connector::createInstance();
        $sql_txt = "select * from ".$this->_table;


    }

    function save()
    {
        // TODO: Implement save() method.
    }

    function update()
    {
        // TODO: Implement update() method.
    }

    function delete()
    {
        // TODO: Implement delete() method.
    }

    function find($id)
    {
        // TODO: Implement find() method.
    }
}
