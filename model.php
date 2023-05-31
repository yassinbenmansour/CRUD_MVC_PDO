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
    $statement =  $this->cnx->prepare("SELECT * FROM groupes");
    $statement->execute();
    $data=$statement->fetchAll();
    return $data;
}

public function add_Student($fn,$ln,$old,$gr){
  $statement =  $this->cnx->prepare("INSERT into student (fn,ln,old,groupe) values (?,?,?,?)");
  $statement->bindParam(1,$fn);
  $statement->bindParam(2,$ln);
  $statement->bindParam(3,$old);
  $statement->bindParam(4,$gr);
  $statement->execute();
}
public function add_Student_old($id){
  $statement =  $this->cnx->prepare("DELETE * FROM student where id = '$id'");
  $statement->execute();
}
}
