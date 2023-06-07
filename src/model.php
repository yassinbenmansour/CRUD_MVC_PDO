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

        public function getAllGroups()
        {
                $statement =  $this->cnx->prepare("SELECT groupe from groupes");
                $statement->execute();
                $result = $statement->fetchAll();
                return $result;
        }

        public function create($c, $n, $m, $g)
        {
                $statement = $this->cnx->prepare("INSERT INTO student (fn, ln, old, groupe) VALUES (:c, :n, :m, :g)");
                $statement->bindParam(':c', $c);
                $statement->bindParam(':n', $n);
                $statement->bindParam(':m', $m);
                $statement->bindParam(':g', $g);
                $statement->execute();
        }

        public function delete($id)
        {
                $statement = $this->cnx->prepare("DELETE from student where id = ?");
                $statement->bindParam(1, $id);
                $statement->execute();
        }

        public function update($id, $fn, $ln, $old, $groupe)
        {
                $statement = $this->cnx->prepare("UPDATE student SET fn = ?, ln = ?, old = ?, groupe = ? WHERE id = ?");
                $statement->bindParam(1, $fn);
                $statement->bindParam(2, $ln);
                $statement->bindParam(3, $old);
                $statement->bindParam(4, $groupe);
                $statement->bindParam(5, $id);
                $statement->execute();
        }
}
