<!-- api/read.php -->

<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/events.php';

$database = new DB();
$db = $database->getConnection();

$items = new User($db);

$stmt = $items->getEvents();
$itemCount = $stmt->rowCount();


echo json_encode($itemCount);

if($itemCount > 0){

    $eventrArr = array();
    $eventrArr["body"] = array();
    $eventrArr["itemCount"] = $itemCount;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        extract($row);
        $e = array(
            "event_id" => $event_id,
            "titre_event" => $titre_event,
            "nb_places" => $nb_places,
            "horaire" => $horaire,
            "salle" => $salle,
        );

        array_push($eventrArr["body"], $e);
    }
    echo json_encode($eventrArr);
}

else{
    http_response_code(404);
    echo json_encode(
        array("message" => "Data not found.")
    );
}
?>
