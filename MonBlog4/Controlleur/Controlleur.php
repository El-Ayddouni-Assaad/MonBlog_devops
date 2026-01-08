<?php require 'Modele/Billet.php'; 
require 'Modele/Commentaire.php';
// Affiche la liste de tous les billets du blog 
function accueil() { 
    $billetObj=new Billet();

$billets = $billetObj->getBillets();   
require 'Vue/vueAccueil.php'; } 
// Affiche les détails sur un billet 
function billet($idBillet) { 
    $billetObj=new Billet();
    $commentaireObj=new Commentaire();
$billet =$billetObj->getBillet($idBillet); 
$commentaires = $commentaireObj->getCommentaires($idBillet);   
require 'Vue/vueBillet.php'; } 
// Affiche une erreur 
function erreur($msgErreur) {   
require 'Vue/vueErreur.php'; 
}
?>