<?php
class DB {
    private $host = "localhost";
    private $db = "gestionplaces";
    private $username = "root";
    private $password = "root";

    public  $conn;

    public function getConnection()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db, $this->username, $this->password);
            $this->conn->exec("set name utf8");
        } catch (PDOException $exception) {
            echo "Impossible de se connecter à la base de données : " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>