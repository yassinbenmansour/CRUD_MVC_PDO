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

        public function getdata($id)
        {
                $statement = $this->cnx->prepare("SELECT * FROM student WHERE id = ?");
                $statement->bindParam(1, $id);
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

        public function update($id, $fn, $ln, $old, $grp)
        {
                $statement = $this->cnx->prepare("UPDATE student SET fn = :fn , ln = :ln , old = :old , groupe = :grp WHERE id = :id");
                $statement->bindParam(':fn', $fn);
                $statement->bindParam(':ln', $ln);
                $statement->bindParam(':old', $old);
                $statement->bindParam(':grp', $grp);
                $statement->bindParam(':id', $id);
                $statement->execute();
        }
}
