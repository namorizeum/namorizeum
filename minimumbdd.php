<?php
//code minimum pour enregistre sur la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulaire";
$conn = @mysqli_connect($servername, $username, $password, $dbname);
$nom = $_POST['nom'];
$email = $_POST['email'];
$query = "INSERT INTO bdd (nom, email) VALUES ('$nom', '$email')";
$result = mysqli_query($conn, $query);
?>