
<?php
$cmd=$_REQUEST["cmd"];
require "model.php";
$student_model=new student_model();
if($cmd=="list")
{
    $students=$student_model->getAll();
    require "read.php";

}

if($cmd=="cr")
{
    $groupes=$student_model->getAllGroups();
    require "create.php";

}

if($cmd=="create")
{
   if(isset($_POST['submit'])){
        $c=$_POST["fn"];
        $n=$_POST["ln"];
        $m=$_POST["old"];
        $g=$_POST["grp"];

        $student_model->create($c,$n,$m,$g);
        $students=$student_model->getAll();
        require "read.php";
   }
}

if($cmd=="delete")
{
   $c=$_POST["id"];
   $student_model->delete($c);
   $students=$student_model->getAll();
    require "read.php";

}


?>