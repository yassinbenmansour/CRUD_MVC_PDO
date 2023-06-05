<?php

$host = 'localhost';
$dbname = 'scool';
$username = 'root';
$password = '';

$cnx = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
try {
        echo "connected";
} catch (Exception $e) {
        echo "error" . $e->getMessage();
}
