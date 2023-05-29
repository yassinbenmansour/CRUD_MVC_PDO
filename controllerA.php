<?php 
require "./src/model.php";
$student_model = new student_school();
$students = $student_model->getAll();
require "readdata.php";
