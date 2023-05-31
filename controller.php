<?php
$cmd = $_REQUEST["cmd"];
require "./model.php";

$model_student = new student_model();

if ($cmd == "list") {
        $students = $model_student->getAll();
        require "./read.php";
}
elseif($cmd = "cr"){
        $groupes = $model_student->getAllGroups();
        require "./create.php";
}
elseif($cmd = "create"){
        $fn = $_POST['fn'];
        $ln = $_POST['ln'];
        $old = $_POST['old'];
        $gr = $_POST['grp'];
        $model_student->add_Student($fn,$ln,$old,$gr);
        $model_student->getAll();
        require "./read.php";
}
