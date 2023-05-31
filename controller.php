<?php
$cmd = $_REQUEST["cmd"];
require "./model.php";

$model_student = new student_model();

if ($cmd == "list") {
        $students = $model_student->getAll();
        require "./read.php";
}elseif($cmd = "create"){
        $groupes = $model_student->getAllGroups();
        require "./create.php";
}

?>