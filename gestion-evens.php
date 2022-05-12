<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: auth-page.php");
    exit();
}


$host = 'localhost';
$dbname = 'gestionplaces';
$username = 'root';
$password = 'root';

$dsn = "mysql:host=$host;dbname=$dbname";

// récupérer tous les evenements
$sql = "SELECT * FROM evenements";

try {
    $pdo = new PDO($dsn, $username, $password);
    $stmt = $pdo->query($sql);

    if ($stmt === false) {
        die("Erreur");
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Borne Tactile Festival - Places de spectacles</title>
    <link rel="stylesheet" href="gestion-events.css">

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
</head>
<body>
<div class="column">
    <!-- Header -->
    <div class="header">
        <div>
            <h1>ACTUELLEMENT AUX FESTIVALS - ADMINISTRATION</h1>
        </div>
        <div class="logo row">
            <img src="./img/Logo-Quai-des-Bulles.jpg" alt="Logo Quai des Bulles" style="width: 40%">
            <img src="./img/etonnants-voyageurs-2022.jpg" alt="Affiche Étonnants Voyageurs 2022" style="width: 60%">
        </div>
    </div>

    <!---->
    <!-- Main -->
    <div class="main">
        <!-- Titre -->
        <div class="main-titre">
            <h2>Bienvenue <?php echo $_SESSION['username']; ?>!</h2>
            <p>C'est votre tableau de bord.</p>

        </div>
        <!---->
        <div class="main-container row">
            <!-- Tableau evenements -->
            <div>
                <table id="events">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titre de l'événement</th>
                        <th>Nombre de places</th>
                        <th>Horaire</th>
                        <th>Numéro de la salle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['event_id']); ?></td>
                        <td><?php echo htmlspecialchars(utf8_encode($row['titre_event'])); ?></td>
                        <td><?php echo htmlspecialchars($row['nb_places']); ?></td>
                        <td><?php echo htmlspecialchars(utf8_encode($row['horaire'])); ?></td>
                        <td><?php echo htmlspecialchars($row['salle']); ?></td>
                    </tr>
                    <?php endwhile; ?>
                    </tbody>

                </table>
            <!---->
            </div>
            <!-- Formulaire de réservation -->
            <div class="res-form">
                <form class="resform" action="controller.php" name="resForm" method="post" enctype="multipart/form-data">
                    <h2>Formulaire de modification</h2>
                    <div class="form-group">
                        <label for="res-event-id">ID</label>
                        <input type="number" class="form-control" name="event_id" id="res-event-id">
                    </div>
                    <div class="form-group">
                        <label for="res-titre">Titre</label>
                        <input type="text" class="form-control" name="titre_event" id="res-titre">
                    </div>
                    <div class="form-group">
                        <label for="res-places">Nombre de places</label>
                        <input type="number" class="form-control" name="nb_places"
                               id="res-places">
                    </div>
                    <div class="form-group">
                        <label for="res-horaire">Horaire</label>
                        <input type="text" class="form-control" name="horaire"
                               id="res-horaire">
                    </div>
                    <div class="form-group">
                        <label for="res-salle">Salle</label>
                        <input type="number" class="form-control"
                               name="salle"
                               id="res-salle">
                    </div>
                    <button class="res-btn" type="submit" name="submit">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Modifier
                    </button>
                </form>
            </div>
            <!---->
        </div>
        <!-- Bouton retour -->
        <a id="btn-retour" href="logout.php">Déconnexion</a>
        <!--<div>
            <a id="btn-retour" href="./prog-etonnants-voyageurs.php">Retour à la liste des films</a>
        </div>-->
    </div>
    <!---->
    <!-- Footer -->
    <div class="footer">
        <h3>PROJET BORNE TACTILE POUR FESTIVALS</h3>
        <p>IHM Gestion de places réalisé par Nicolas Calvi</p>
    </div>
    <!---->
</div>
<! -- 𝖓𝖎𝖒𝖎𝖙𝖍 𓆩*𓆪 Newt._.Castel -->
</body>
</html>
