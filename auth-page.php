<?php
// Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'gestionplaces');

// Connexion à la base de données MySQL
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}

session_start();
if (isset($_POST['username'])){
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($conn, $username);
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($conn, $password);
  $query = "SELECT * FROM utilisateurs WHERE nom='$username' and password='$password'";
  $result = mysqli_query($conn,$query);
  $rows = mysqli_num_rows($result);

  if($rows==1){
      $_SESSION['username'] = $username;
      header("Location: gestion-evens.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Borne Tactile Festival - Places de spectacles</title>
    <link rel="stylesheet" href="gestion-events.css">
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
            <h2>Connexion</h2>
        </div>
        <!---->
        <div class="main-container row">
            <!-- Formulaire de réservation -->
            <form class="box" action="" method="post" name="login">
                <h1 class="box-title">Entrez vos identifiants</h1>
                <label>
                    <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur">
                </label>
                <label>
                    <input type="password" class="box-input" name="password" placeholder="Mot de passe">
                </label>
                <input type="submit" value="Connexion " name="submit" class="box-button">
                <?php if (! empty($message)) { ?>
                    <p class="errorMessage"><?php echo $message;
                    ?></p>
                <?php } ?>
            </form>
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