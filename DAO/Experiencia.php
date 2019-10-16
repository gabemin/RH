<?php
include_once ("../Controller/Connect.php");

class Experiencia
{
    private $conn;
    public function __construct()
    {
        $this->conn=new Connect();
        $this->conn->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
}

function create() {
    //Todo
}
function update(){
    //Todo
}
function delete(){
    //Todo
}
