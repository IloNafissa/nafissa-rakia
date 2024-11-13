<?php
require_once('../models/salleService.php');

$etService = new salleService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'formSal') {
    Header('Location:../views/Etudiant/formSal.php');
}

if ($action == 'listeSal') {
    Header('Location:../views/Etudiant/listeSal.php');
}

if ($action == 'delete') {
    //recuperation des donnees
    $idsal=$_GET['idsal'];

    //appel du model
    $etService->delete($idsal);

    //redirection vers la vue
    Header('Location:../views/Etudiant/listeSal.php?message=Salle supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $idsal = $_POST['idsal'];
    $num = $_POST['num'];
    $libelle = $_POST['libelle'];
    $nbret = $_POST['nbret'];


    //2. Appel du model
    $etService->add($idsal, $num, $libelle, $nbret);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listeSal.php?message=Salle ajouté');
}


if($action=='editSal'){
    $idsal=$_GET['idsal'];
    Header('Location:../views/Etudiant/editSal.php?idsal='.$idsal);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $idsal = $_POST['idsal'];
    $num = $_POST['num'];
    $libelle = $_POST['libelle'];
    $nbret = $_POST['nbret'];


    //2. Appel du model
    $etService->editSal($idsal, $num, $libelle, $nbret);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listeSal.php?message=Salle modifié');
}