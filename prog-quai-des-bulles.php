<?php
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Borne Tactile Festival - Places de spectacles</title>
    <link rel="stylesheet" href="ihm_places.css">
    <script type="text/javascript" src="btn_script.js"></script>
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
            <img src="img/Logo-Quai-des-Bulles.jpg" alt="Logo Quai des Bulles" style="width: 40%">
            <img src="img/etonnants-voyageurs-2022.jpg" alt="Affiche Étonnants Voyageurs 2022" style="width: 60%">
        </div>
    </div>
    <!---->
    <!-- Main -->
    <div class="main">
        <!-- Titre / Festival -->
        <div class="main-titre row">
            <h2>Spectacles et Évènements</h2>
            <h3>/</h3>
            <h3>Quai des Bulles</h3>
            <!-- Bouton choix du festival -->
            <a id="switch_btn" href="prog-etonnants-voyageurs.php">Changer de festival</a>
            <!-- <input id="switch_btn" type="button" value="Changer de festival"> -->
            <!-- Retour Accueil -->
            <a id="switch_btn" href="">Retourner à l'accueil</a>
            <!-- Administration -->
            <a id="switch_btn" href="">
                <img src="img/icone-admin.png" alt="Icone Administrateur"
            </a>
        </div>
        <!---->
        <!-- Filtres -->
        <!--
        <nav class="filtres row">
            <div class="filtre-btn">
                <input type="radio" name="rdo_j1" id="btn_jour1" onclick="setColor('btn_jour1')">
                <label for="btn_jour1">Jour 1</label>
            </div>
            <div class="filtre-btn">
                <input type="radio" name="rdo_j2" id="btn_jour2" onclick="setColor('btn_jour2')">
                <label for="btn_jour2">Jour 2</label>
            </div>
            <div class="filtre-btn">
                <input type="radio" name="rdo_j3" id="btn_jour3" onclick="setColor('btn_jour3')">
                <label for="btn_jour3">Jour 3</label>
            </div>
        </nav>
        -->
        <!-- Liste des évènements -->
        <div class="liste-event row">
            <!-- 1 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-1.php">
                        <img class="affiche-film" src="img/films/cinema-hors-normes.jpg"
                             alt="Affiche du film Hors normes"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Hors normes</h3>
                </div>
            </div>
            <!-- 2 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-2.php">
                        <img class="affiche-film" src="img/films/cinema-en-liberte.jpg"
                             alt="Affiche du film En liberté !"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>En liberté !</h3>
                </div>
            </div>
            <!-- 3 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-3.php">
                        <img class="affiche-film" src="img/films/cinema-nott-hill.jpg"
                             alt="Affiche du film Coup de foudre à Notting Hill"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Coup de foudre à Notting Hill</h3>
                </div>
            </div>
            <!-- 4 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-4.php">
                        <img class="affiche-film" src="img/films/cinema-les-grands-ducs.jpg"
                             alt="Affiche du film Les Grands Ducs"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Les Grands Ducs</h3>
                </div>
            </div>
            <!-- 5 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-5.php">
                        <img class="affiche-film" src="img/films/cinema-effet-aquatique.jpg"
                             alt="Affiche du film L'effet aquatique"
                             style="
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div>
                    <h3>L'effet aquatique</h3>
                </div>
            </div>
            <!-- 6 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-6.php">
                        <img class="affiche-film" src="img/films/cinema-ce-qui-nous-lie.jpg"
                             alt="Affiche du film Ce qui nous lie"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Ce qui nous lie</h3>
                </div>
            </div>
            <!-- 7 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-7.php">
                        <img class="affiche-film" src="img/films/cinema-le-grand-bain.jpg"
                             alt="Affiche du film Le grand bain"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Le grand bain</h3>
                </div>
            </div>
            <!-- 8 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-8.php">
                        <img class="affiche-film" src="img/films/cinema-calamity.jpg"
                             alt="Affiche du film Calamity, une enfance de Martha Jane Cannaryf"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Calamity</h3>
                </div>
            </div>
            <!-- 9 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-9.php">
                        <img class="affiche-film" src="img/films/cinema-brisby.jpg"
                             alt="Affiche du film Brisby et le secret de Nimh"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Brisby et le secret de Nimh</h3>
                </div>
            </div>
            <!-- 10 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-10.php">
                        <img class="affiche-film" src="img/films/cinema-fievel.jpg"
                             alt="Affiche du film Fievel et le Nouveau Monde"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Fievel et le Nouveau Monde</h3>
                </div>
            </div>
            <!-- 11 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films-quai-des-bulles/film-11.php">
                        <img class="affiche-film" src="img/films/les-sans-dents.jpg"
                             alt="Affiche du film Les sans-dents"
                             style="
                             max-width: 300px;
                             max-height: 400px;
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div class="titre-event">
                    <h3>Les sans-dents</h3>
                </div>
            </div>
            <!---->
        </div>
        <!---->
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

