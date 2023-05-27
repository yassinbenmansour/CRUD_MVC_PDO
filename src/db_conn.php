<?php
function connection()
{
        $host = "localhost";
        $db = "scool";
        $password = "";
        $user = "root";

        try {
                $con = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                return $con ;
        } catch (Exception $e) {
                return  $e->getMessage();
        }
}
