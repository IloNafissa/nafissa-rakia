<?php
require_once('../models/enseignantService.php');

$enService = new enseignantService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'formEgn') {
    Header('Location:../views/Etudiant/formEgn.php');
}

if ($action == 'listEgn') {
    Header('Location:../views/Etudiant/listEgn.php');
}

if ($action == 'delete') {
    //recuperation des donnees
    $id=$_GET['id'];

    //appel du model
    $enService->delete($id);

    //redirection vers la vue
    Header('Location:../views/Etudiant/listEgn.php?message=Enseignant supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    //2. Appel du model
    $enService->add($id, $nom, $prenom, $sexe, $email, $address);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listEgn.php?message=Enseignant ajouté');
}


if($action=='editEgn'){
    $id=$_GET['id'];
    Header('Location:../views/Etudiant/editEgn.php?id='.$id);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $sexe = $_POST['sexe'];
    $email = $_POST['email'];
    $address = $_POST['address'];


    //2. Appel du model
    $enService->editEgn($id, $nom, $prenom, $sexe, $email, $address);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listEgn.php?message=Enseignant modifié');
}