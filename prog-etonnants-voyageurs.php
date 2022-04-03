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
            <h3>Étonnants Voyageurs</h3>
            <!-- Bouton choix du festival -->
            <a id="switch_btn" href="prog-quai-des-bulles.php">Changer de festival</a>
            <!-- <input id="switch_btn" type="button" value="Changer de festival"> -->
            <!---->
        </div>
        <!---->
        <!-- Filtres -->
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
        <!---->
        <!-- Liste des évènements -->
        <div class="liste-event row">
            <!-- Première ligne d'évènements -->
            <!-- 1.1 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-1.php">
                        <img class="affiche-film" src="img/films/acasa.jpg" alt="Affiche du film Acasa, my home"
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
                    <h3>Acasa, my home</h3>
                </div>
            </div>
            <!-- 1.2 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-2.php">
                        <img class="affiche-film" src="img/films/en-route-pour-le-milliard.jpg"
                             alt="Affiche du film En route pour le milliard"
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
                    <h3>En route pour le milliard</h3>
                </div>
            </div>
            <!-- 1.3 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-3.php">
                        <img class="affiche-film" src="img/films/enseignez-a-vivre.jpg"
                             alt="Affiche du film Enseignez à vivre ! - Edgar Morin et l’éducation innovante"
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
                    <h3>Enseignez à vivre !</h3>
                </div>
            </div>
            <!-- 1.4 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-4.php">
                        <img class="affiche-film" src="img/films/kamtchatka.jpg"
                             alt="Affiche du film Kamtchatka - Un été en pays Evène"
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
                    <h3>Kamtchatka</h3>
                </div>
            </div>
            <!-- 1.5 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-5.php">
                        <img class="affiche-film" src="img/films/kongo.jpg" alt="Affiche du film Kongo"
                             style="
                             width: 300px;
                             height: 400px;
                             border-radius: 0.5em;
                        ">
                    </a>
                </div>
                <div>
                    <h3>Kongo</h3>
                </div>
            </div>
            <!---->
            <!-- Deuxième ligne d'évènements -->
            <!-- 2.1 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-6.php">
                        <img class="affiche-film" src="img/films/laventure.jpg" alt="Affiche du film L’aventure"
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
                    <h3>L’aventure</h3>
                </div>
            </div>
            <!-- 2.2 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-7.php">
                        <img class="affiche-film" src="img/films/la-cordillere-des-songes.jpg"
                             alt="Affiche du film La cordillère des songes"
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
                    <h3>La cordillère des songes</h3>
                </div>
            </div>
            <!-- 2.3 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-8.php">
                        <img class="affiche-film" src="img/films/les-identites-de-mona-ozouf.jpg"
                             alt="Affiche du film Les identités de Mona Ozouf"
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
                    <h3>Les identités de Mona Ozouf</h3>
                </div>
            </div>
            <!-- 2.4 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-9.php">
                        <img class="affiche-film" src="img/films/mustang-le-royaume-de-la-lumiere.jpg"
                             alt="Affiche du film Mustang, le royaume de la lumière"
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
                    <h3>Mustang, le royaume de la lumière</h3>
                </div>
            </div>
            <!-- 2.5 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-10.php">
                        <img class="affiche-film" src="img/films/simone-et-andre-schwarz-bart-la-memoire-en-partage.jpg"
                             alt="Affiche du film Simone et André Schwarz-Bart, la mémoire en partage"
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
                    <h3>Simone et André Schwarz-Bart</h3>
                </div>
            </div>
            <!---->
            <!-- Troisième ligne d'évènements -->
            <!-- 3.1 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-11.php">
                        <img class="affiche-film" src="img/films/stray.jpg" alt="Affiche du film Stray"
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
                    <h3>Stray</h3>
                </div>
            </div>
            <!-- 3.2 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-12.php">
                        <img class="affiche-film" src="img/films/taming-the-garden.jpg"
                             alt="Affiche du film Taming the garden"
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
                    <h3>Taming the garden</h3>
                </div>
            </div>
            <!-- 3.3 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-13.php">
                        <img class="affiche-film" src="img/films/the-earth-is-blue-as-an-orange.jpg"
                             alt="Affiche du film The earth is blue as an orange"
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
                    <h3>The earth is blue as an orange</h3>
                </div>
            </div>
            <!-- 3.4 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-14.php">
                        <img class="affiche-film" src="img/films/the-filmakers-house.jpg"
                             alt="Affiche du film The filmmaker’s house"
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
                    <h3>The filmmaker’s house</h3>
                </div>
            </div>
            <!-- 3.5 -->
            <div class="card-event">
                <div class="affiche-event">
                    <a href="form-films/film-15.php">
                        <img class="affiche-film" src="img/films/the-last-hillbilly.jpg"
                             alt="Affiche du film The Last Hillbilly"
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
                    <h3>The Last Hillbilly</h3>
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

