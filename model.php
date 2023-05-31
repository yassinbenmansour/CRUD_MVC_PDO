<?php
require "db.php";
class student_model
{
 private $cnx;
 public function __construct()
 {
   $this->cnx= cnx();
 }

 public function getAll()
{
    $statement =  $this->cnx->prepare("select * from student");
    $statement->execute();
    $data=$statement->fetchAll();
    return $data;
}

public function getAllGroups()
{
    $statement =  $this->cnx->prepare("select groupe from groupes");
    $statement->execute();
    $data=$statement->fetchAll();
    return $data;
}
}
?>