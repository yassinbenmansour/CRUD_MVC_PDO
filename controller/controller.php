<?php
require('../src/model.php');

$model_st = new model_student();
$result=$model_st->getAll();

require("../template/list.php");
?>

