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
}

?>