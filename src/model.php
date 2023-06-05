<?php
require('../dbcnx.php');

$statement = $cnx->prepare("select * from student");
$statement->execute();
$result = $statement->fetchAll();
