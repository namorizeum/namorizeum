<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";

// Connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];

// Préparer et exécuter la requête d'insertion
$query = "INSERT INTO bdd (nom, email) VALUES ('$nom', '$email')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo "Données enregistrées avec succès";
} else {
    echo "Erreur lors de l'enregistrement des données : " . mysqli_error($conn);
}

//Fermeture de la connexion
mysqli_close($conn);
?>
