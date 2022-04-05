<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Borne Tactile Festival - Places de spectacles</title>
    <link rel="stylesheet" href="form-film.css">
    <script src="form-film.js" type="text/javascript"></script>

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
            <img src="../img/Logo-Quai-des-Bulles.jpg" alt="Logo Quai des Bulles" style="width: 40%">
            <img src="../img/etonnants-voyageurs-2022.jpg" alt="Affiche Étonnants Voyageurs 2022" style="width: 60%">
        </div>
    </div>
    <!---->
    <!-- Main -->
    <div class="main">
        <!-- Titre Film -->
        <div class="main-titre">
            <h2>Les identités de Mona Ozouf</h2>
            <h3>de Catherine BERNSTEIN (Paris-Brest Productions / 2020 / 52’)</h3>
        </div>
        <!---->
        <div class="main-container row">
            <!-- Affiche du filme -->
            <div class="affiche-event">
                <img class="affiche-film" src="../img/films/les-identites-de-mona-ozouf.jpg"
                     alt="Affiche du film Les identités de Mona Ozouf">
            </div>
            <!-- Formulaire de réservation -->
            <div class="res-form">
                <form class="resform" action="" name="resForm" method="post" enctype="multipart/form-data">
                    <h2>Formulaire de réservation</h2>
                    <div class="form-group">
                        <label for="res-nom">Nom</label><input type="text" class="form-control" name="nom" id="res-nom">
                    </div>
                    <div class="form-group">
                        <label for="res-email">E-mail</label><input type="email" class="form-control" name="email"
                                                                    id="res-email">
                    </div>
                    <div class="form-group">
                        <label for="res-tel">Téléphone</label><input type="text" class="form-control" name="tel"
                                                                     id="res-tel">
                    </div>
                    <div class="form-group">
                        <label for="res-places">Nombre de places</label><input type="text" class="form-control"
                                                                               name="places"
                                                                               id="res-places">
                    </div>
                    <a class="res-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Réserver
                    </a>
                </form>
            </div>
            <!---->
        </div>
        <!-- Bouton retour -->
        <div class="btn-retour">
            <a href="../prog-etonnants-voyageurs.php">Retour à la liste des films</a>
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

