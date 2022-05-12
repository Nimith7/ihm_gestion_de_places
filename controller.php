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
}
