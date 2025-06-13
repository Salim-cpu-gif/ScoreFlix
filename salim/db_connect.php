<?php
// db_connect.php


$host = 'localhost';
$dbname = 'championnat_foot';
$username = 'root';
$password = 'root'; // Change this to your actual password

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    error_log("Erreur de connexion : " . $e->getMessage());
    die("Une erreur est survenue lors de la connexion à la base de données.");
}
?>