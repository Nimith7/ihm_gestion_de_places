<?php
// include_once './config/database.php';
$hostname = "localhost";
$username = "root";
$password = "root";
$db = "gestionplaces";

$dbconnect = mysqli_connect($hostname, $username, $password, $db);

if ($dbconnect->connect_error) {
    die("Échec de la connexion à la base de données : " . $dbconnect->connect_error);
}

$event_id_sur_cette_page = 2;

if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $places = $_POST['places'];

    $sql = "INSERT INTO clients ( nom, email, tel, nb_place_res, event_id) VALUES ('$nom','$email','$tel','$places', '$event_id_sur_cette_page')";

    if (!mysqli_query($dbconnect, $sql)) {
        die('Une erreur s’est produite. Votre réservation n’a pas été soumise.');
    } else {
        echo "Merci pour votre réservation. ";
    }
}
?>
