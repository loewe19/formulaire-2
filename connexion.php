<?php
// Informations de connexion à la base de données
$servername = 'localhost';
$nom = 'root';
$motdepasse = '';
$dbname = 'test';

// Établir la connexion
$conn = new mysqli($servername, $nom, $motdepasse, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die('Erreur de connexion : ' . $conn->connect_error);
}

// Vérifier les identifiants de l'utilisateur
if (isset($_POST['nom'], $_POST['motdepasse'])) {
    $log_username = $_POST['nom'];
    $log_password = $_POST['motdepasse'];

    // Requête SQL directe - NE PAS UTILISER EN PRODUCTION
    $sql = "SELECT motdepasse FROM formulaire WHERE motdepasse='$log_password'";
    $result = $conn->query($sql);

    if ($result->num_rows >  0) {
        header('Location: bullet.php');
        
    } else {
        echo "Mot de passe incorrect";
    }
}

// Fermer la connexion
$conn->close();
?>
