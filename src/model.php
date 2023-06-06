<?php
require('../dbcnx.php');
class model_student
{
        private $cnx;
        public function __construct()
        {
                $this->cnx = cnx();
        }
        public function getAll()
        {
                $statement =  $this->cnx->prepare("select * from student");
                $statement->execute();
                $result = $statement->fetchAll();
                return $result;
        }
}
