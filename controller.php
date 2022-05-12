<?php
if (isset($_POST['submit'])) {
    $host = "localhost";
    $db = "gestionplaces";
    $username = "root";
    $password = "root";

    $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $db, $username, $password);
    $pdo->exec("set name utf8");

    $event_id = $_POST["event_id"];
    $titre_event = $_POST["titre_event"];
    $nb_places = $_POST["nb_places"];
    $horaire = $_POST["horaire"];
    $salle = $_POST["salle"];

    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $sql = "UPDATE evenements SET titre_event='$titre_event', nb_places='$nb_places', horaire='$horaire', salle='$salle' WHERE event_id='$event_id'";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(1,$sid);
    $stmt->execute();

    $pdo = null;

    echo "
<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>Borne Tactile Festival - Places de spectacles</title>
    <link rel='stylesheet' href='gestion-events.css'>
</head>
<body>   
    <div class='column'>
        <!-- Main -->
    <div class='main'>
        <!-- Titre -->
        <div class='main-titre'>
            <h2>Liste mise à jour !</h2>
        </div>
        <!-- Bouton retour -->
        <div>
        <a id='btn-retour' href='./gestion-evens.php'>Retour à la liste des films</a>
    </div>
    </div>
    <!-- Footer -->
    <div class='footer'>
        <h3>PROJET BORNE TACTILE POUR FESTIVALS</h3>
        <p>IHM Gestion de places réalisé par Nicolas Calvi</p>
    </div>
    <!---->
</div>
</body>";
}
