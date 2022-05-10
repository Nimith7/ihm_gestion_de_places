<?php
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
            <h1>ACTUELLEMENT AUX FESTIVALS</h1>
        </div>
        <div class="logo row">
            <!-- <img src="img/Logo-Etonnants-Voyageurs.png" alt="Logo Étonnants Voyageurs"> -->
            <img src="./img/Logo-Quai-des-Bulles.jpg" alt="Logo Quai des Bulles" style="width: 40%">
            <img src="./img/etonnants-voyageurs-2022.jpg" alt="Affiche Étonnants Voyageurs 2022" style="width: 60%">
        </div>
    </div>
    <!---->
    <!-- Main -->
    <div class="main">
        <!-- Titre -->
        <div class="main-titre">
            <h2>Gestion des événements</h2>
        </div>
        <!---->
        <div class="main-container row">
            <!-- Tableau evenements -->
            <div>
                <table id="events">
                    <tr>
                        <th>ID</th>
                        <th>Titre de l'événement</th>
                        <th>Nombre de places</th>
                        <th>Horaire</th>
                        <th>Numéro de la salle</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Exemple Tittre</td>
                        <td>100</td>
                        <td>14:30</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Exemple Tittre</td>
                        <td>70</td>
                        <td>15:00</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Exemple Tittre</td>
                        <td>90</td>
                        <td>14:45</td>
                        <td>7</td>
                    </tr>
                </table>
            <!---->
            </div>
            <!-- Formulaire de réservation -->
            <div class="res-form">
                <form class="resform" action="rest-gestion.php" name="resForm" method="post" enctype="multipart/form-data">
                    <h2>Formulaire de modification</h2>
                    <div class="form-group">
                        <label for="res-event-id">ID</label>
                        <input type="number" class="form-control" name="event_id" id="res-event-id">
                    </div>
                    <div class="form-group">
                        <label for="res-nom">Titre</label>
                        <input type="text" class="form-control" name="nom" id="res-nom">
                    </div>
                    <div class="form-group">
                        <label for="res-email">Nombre de places</label>
                        <input type="email" class="form-control" name="email"
                               id="res-email">
                    </div>
                    <div class="form-group">
                        <label for="res-tel">Horaire</label>
                        <input type="text" class="form-control" name="tel"
                               id="res-tel">
                    </div>
                    <div class="form-group">
                        <label for="res-places">Salle</label>
                        <input type="text" class="form-control"
                               name="places"
                               id="res-places">
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
        <div>
            <a id="btn-retour" href="./prog-etonnants-voyageurs.php">Retour à la liste des films</a>
        </div>
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

