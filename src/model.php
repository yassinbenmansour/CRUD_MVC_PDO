<?php 
require "db_conn.php" ;
class student_school
{
        private $cnx;
        function __construct(){
                $this->cnx = connection();
        }

        function getAll(){
                $statement =  $this->cnx->prepare("select * from student");
                $statement->execute();
                $data=$statement->fetchAll();
                return $data;
        }


        function create($fn,$ln,$age){
                $statement = $this->cnx->prepare("insert into student (fn,ln,old) values (? ,? , ?)");
                $statement->bindParam(1,$fn);
                $statement->bindParam(2,$ln);
                $statement->bindParam(3,$age);
                $statement->execute();
        }
}

?>