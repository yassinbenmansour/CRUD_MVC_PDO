<?php
require('../src/model.php');
$cmd = $_REQUEST["cmd"];

$model_st = new model_student();

if ($cmd == "list") {
        $result = $model_st->getAll();
        require("../template/list.php");
}
if($cmd == "std_create"){
        $result = $model_st->getAllGroups();
        require("../template/create.php");
}

if($cmd == "create"){
         $c=$_REQUEST["fn"];
         $n=$_REQUEST["ln"];
         $m=$_REQUEST["old"];
         $g=$_REQUEST["grp"];
         
         $model_st->create($c,$n,$m,$g);

        $result = $model_st->getAll();
        require("../template/list.php");
}
if ($cmd == "delete") {
        $c = $_REQUEST["id"];
        $model_st->delete($c);
        $result = $model_st->getAll();
        require("../template/list.php");
}

if($cmd == "std_update"){
        $id = $_GET['id'];
        $result = $model_st->getdata($id);
        $rGrp = $model_st->getAllGroups();
        require('../template/update.php');

}
if($cmd == "update"){
        $fn=$_REQUEST["fn"];
        $ln=$_REQUEST["ln"];
        $old=$_REQUEST["old"];
        $grp=$_REQUEST["grp"];
        $id = $_REQUEST["id"];
        
        $model_st->update($id, $fn, $ln, $old, $grp);
        $result = $model_st->getAll();
        require("../template/list.php");
}
