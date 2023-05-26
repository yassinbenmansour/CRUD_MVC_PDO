<?php
function connection()
{
        $host = "localhost";
        $db = "school";
        $password = "";
        $user = "root";

        try {
                $con = new PDO("mysql:host=$host;dbname=$db", $user, $password);
                return $con ;
        } catch (Exception $e) {
                return  $e->getMessage();
        }
}
