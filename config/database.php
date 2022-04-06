<?php
$hostname = "localhost";
$username = "root";
$password = "bonjour";
$dbname = "gestionplaces";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Impossible de se connecter à la base de données " . $e->getMessage();
}
?>