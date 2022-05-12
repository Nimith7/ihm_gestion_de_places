<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/events.php';

$database = new DB();
$db = $database->getConnection();

$item = new Event($db);

$data = json_decode(file_get_contents("php://input"));

$item->event_id = $data->event_id;

// events values
$item->event_id = $data->event_id;
$item->titre_event = $data->titre_event;
$item->nb_places = $data->nb_places;
$item->horaire = $data->horaire;
$item->event_id = $data->event_id;

if($item->updateEvent()){
    echo json_encode("Evenement modife !");
} else{
    echo json_encode("Evenement n'a pas ete modife !");
}
?>
