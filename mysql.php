<?php
$host = "localhost";
$name = "tutorial";
$user = "root";
$passwort = "";
try {
    $mysql = new PDO("mysql:host = $host; dbname=$name", $user, $passwort);
} catch (PDOExeption $e) {
    echo "SQL Error: " .$e->getMessage();
}
?>