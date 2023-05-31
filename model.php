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

public function create($c,$n,$m,$g)
{
  $statement =  $this->cnx->prepare("INSERT into student values($c,$n,$m,$g)");
  // $statement->bindParam(1,$c);
  // $statement->bindParam(2,$n);
  // $statement->bindParam(3,$m);
  // $statement->bindParam(4,$g);
  // $statement->execute([$c,$n,$m,$g]);
  $statement->execute();


}

public function delete($c)
{
  $statement =  $this->cnx->prepare("DELETE from student where id = ?");
  $statement->bindParam(1,$c);
   $statement->execute();

}

}
?>