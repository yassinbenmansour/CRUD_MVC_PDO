<?php
function connexion()
{
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "scool";

        try {
                $cn = new PDO("mysql:host=$host;db_name=$db", $user, $pass);
                return $cn;
        } catch (Exception $e) {
                echo "Erreur" . $e->getMessage();
        }
}
