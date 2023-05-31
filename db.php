<?php
function cnx()
{
        $host = 'localhost';
        $dbname = 'scool';
        $username = 'root';
        $password = '';
        try {
                $connexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                return $connexion;
        } catch (Exception $e) {
                return null;
        }
}
