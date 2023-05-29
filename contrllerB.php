<?php 

require "./src/model.php";
$student_model = new student_school();

$fn = $_POST['fn'];
$ln = $_POST['ln'];
$age = $_POST['old'];

if(isset($_POST['submit'])){
        $students = $student_model->create($fn,$ln,$age);
        header("Location:view.php");
}



