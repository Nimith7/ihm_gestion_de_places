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

if (isset($_POST['submit'])) {
    $titre_event = $_POST['film'];
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $places = $_POST['places'];
    $event_id_sur_cette_page = $_POST['event_id'];

    $sql = "INSERT INTO clients ( nom, email, tel, nb_place_res, titre_event, event_id) VALUES ('$nom','$email','$tel','$places', '$titre_event', '$event_id_sur_cette_page')";

    if (!mysqli_query($dbconnect, $sql)) {
        die('Une erreur s’est produite. Votre réservation n’a pas été soumise.');
    } else {
        echo "Merci pour votre réservation. ";
    }
}
?>
