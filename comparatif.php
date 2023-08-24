<?php
include 'connexion.php';
// Récupérer la donnée insérée dans le formulaire //
$modele = $_POST["modele"];

// Premier bloc pour la comparaison //
$nom = 'renault_c3';
$autonomie = 390;
$acceleration = 7.3;
$puissance_moteur = 93;
$prix = 25000;
$batterie = 52;

// Deuxième bloc pour la comparaison //
$nom1 = 'ford_400';
$autonomie1 = 240;
$acceleration1 =15.5;
$puissance_moteur1 = 58;
$prix1 = 14920;
$batterie1 = 30;

$sql = "INSERT INTO renault_c3 (nom, autonomie, acceleration, puissance_moteur, prix) VALUES ('$nom', '$autonomie', '$acceleration', ' $puissance_moteur','$prix','$batterie')";
$sql = "INSERT INTO ford_400 (nom, autonomie, acceleration, puissance_moteur, prix) VALUES ('$nom', '$autonomie', '$acceleration', ' $puissance_moteur','$prix','$batterie')";
$sql = "SELECT* FROM renault_c3 WHERE nom = 'Renault', autonomie = 390, acceleration = 7.3, puissance_moteur = 93, prix = 25000,batterie = 52";
$sql = "SELECT* FROM ford_400 WHERE nom = 'Ford', autonomie = 240, acceleration = 15.5, puissance_moteur = 58, prix = 14920,batterie = 30";

if($autonomie >$autonomie1){
    echo $autonomie;
} else {
    echo $autonomie1;
}
if($acceleration>$acceleration1){
    echo $acceleration;
}else{
    echo $acceleration1;
}
if($puissance_moteur>$puissance_moteur1){
    echo $puissance_moteur;
}else{
    echo $puissance_moteur1;
}
if($prix>$prix1){
    echo $prix;
}else{
    echo $prix1;
}
if($batterie>$batterie1){
    echo $batterie;
}else{
    echo $batterie1;
}
?>