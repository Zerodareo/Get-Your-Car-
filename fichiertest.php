<?php

include 'connexion.php';

// Code qui permet l'enregistrement des valeurs lors de la saisie de données dans la barre de recherche //

// Récupérer les données du formulaire
$marque = $_POST["marque"];
$modele = $_POST["modele"];
$annee = $_POST["annee"];

// Préparer la requête SQL
$sql = "INSERT INTO vehicules (marque, modele, annee) VALUES ('$marque', '$modele', '$annee')";

// Exécuter la requête SQL
if ($connexion->query($sql) === TRUE) {
    echo "Le véhicule a été enregistré avec succès !";
} else {
    echo "Une erreur est survenue lors de l'enregistrement du véhicule : " . $connexion->error;
}

// Fermer la connexion à la base de données
$connexion->close();

// Méthode pour générer des nombres randoms
for ($i = 0; $i < 10; $i++) {
    $random_number = rand(1, 20000);
    echo $random_number . "<br>";
  }
?>
