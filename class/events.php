<?php
class User{

    // conn
    private $conn;

    // table
    private $dbTable = "events";

    // col
    public $event_id;
    public $titre_event;
    public $nb_places;
    public $horaire;
    public $salle;

    // db conn
    public function __construct($db){
        $this->conn = $db;
    }

    // GET Events
    public function getEvents(){
        $sqlQuery = "SELECT event_id, titre_event, nb_places, horaire, salle FROM " . $this->dbTable . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    // UPDATE Event
    public function updateUser(){
        $sqlQuery = "UPDATE
                        ". $this->dbTable ."
                    SET
                        titre_event = :titre_event, 
                        nb_places = :nb_places, 
                        horaire = :horaire, 
                        salle = :salle
                    WHERE 
                        event_id = :event_id";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->titre_event=htmlspecialchars(strip_tags($this->titre_event));
        $this->nb_places=htmlspecialchars(strip_tags($this->nb_places));
        $this->horaire=htmlspecialchars(strip_tags($this->horaire));
        $this->salle=htmlspecialchars(strip_tags($this->salle));
        $this->event_id=htmlspecialchars(strip_tags($this->event_id));

        // bind data
        $stmt->bindParam(":titre_event", $this->titre_event);
        $stmt->bindParam(":nb_places", $this->nb_places);
        $stmt->bindParam(":horaire", $this->horaire);
        $stmt->bindParam(":salle", $this->salle);
        $stmt->bindParam(":event_id", $this->event_id);

        if($stmt->execute()){
            return true;
        }
        return false;
    }
}
?>