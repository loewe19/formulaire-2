<?php
// Informations de connexion à la base de données
$servername = "localhost";
$nom = "root";
$motdepasse = "";
$dbname = "test";

// Créer une connexion
$conn = new mysqli("$servername", "$nom", "$motdepasse", "$dbname");
    

// Vérifier la connexion
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$datedenaissance = $_POST['datedenaissance'];
$motdepasse  = $_POST['motdepasse'];
$email = $_POST['email'];
$numerodetelephone = $_POST['numerodetelephone'];

// Créer une requête SQL pour insérer les données dans la base de données
$sql = "INSERT INTO formulaire (nom, prenom, datedenaissance, motdepasse, email, numerodetelephone) VALUES ('$nom', '$prenom', '$datedenaissance', '$motdepasse', '$email', '$numerodetelephone')";

// Exécuter la requête SQL
if ($conn->query($sql) === TRUE) {
   echo "Record inserted successfully";
} else {
   echo "Error: " . $sql . "<br>" . $conn->error;
}

// Fermer la connexion
$conn->close();
header('Location: bullet.php');
exit;
?>

    