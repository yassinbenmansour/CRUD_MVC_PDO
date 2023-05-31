<?php
require "./db.php";

class student
{
        private $cnx;
        public function __construct()
        {
                $this->cnx = connexion();
        }

        public  function get_Student()
        {
                $statement = $this->cnx->prepare("SELECT * FROM student");
                $statement->execute();
                $data = $statement->fetchAll();
                return $data;
        }


        public function get_Groupes()
        {
                $statement = $this->cnx->prepare("SELECT groupe FROM groupes");
                $statement->execute();
                $data = $statement->fetchAll();
                return $data;
        }
}
