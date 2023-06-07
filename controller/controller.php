<?php
require('../src/model.php');
$cmd = $_REQUEST["cmd"];

$model_st = new model_student();

if ($cmd == "list") {
        $result = $model_st->getAll();
        require("../template/list.php");
}
if($cmd == "create"){
        $result = $model_st->getAllGroups();
        require("../template/create.php");
}

if ($cmd == "delete") {
        $c = $_REQUEST["id"];
        $model_st->delete($c);
        $result = $model_st->getAll();
        require("../template/list.php");
}
