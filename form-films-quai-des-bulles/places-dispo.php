<?php
function getNewBddPtr()
{
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=gestionplaces', 'root', 'root');
    } catch (PDOException $e) {
        exit('Connexion échouée : ' . $e->getMessage());
    }
    return $bdd;
}

$event_id_sur_cette_page = 2;

$bdd = getNewBddPtr();
$count = $bdd->prepare("SELECT COUNT(*) AS nb_place_res FROM clients WHERE event_id LIKE ?");
$count->execute(array($event_id_sur_cette_page));
$f = $count->fetch();

$nb_place_res = $f["nb_place_res"];

$count->closeCursor();

$bdd = getNewBddPtr();
$count = $bdd->prepare("SELECT nb_places FROM evenements WHERE event_id LIKE ?");
$count->execute(array($event_id_sur_cette_page));
$f = $count->fetch();

$nb_places = $f["nb_places"];

$count->closeCursor();

$places_restantes = $nb_places - $nb_place_res;

return $places_restantes;
?>