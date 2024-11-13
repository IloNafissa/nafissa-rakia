<?php
require_once('../models/coursService.php');

$etService = new coursService();

if (isset($_GET['action']))
    $action = $_GET['action'];
if (isset($_POST['action']))
    $action = $_POST['action'];





if ($action == 'formC') {
    Header('Location:../views/Etudiant/formC.php');
}

if ($action == 'listeC') {
    Header('Location:../views/Etudiant/listeC.php');
}

if ($action == 'delete') {
    //recuperation des donnees
    $idcours=$_GET['idcours'];

    //appel du model
    $etService->delete($idcours);

    //redirection vers la vue
    Header('Location:../views/Etudiant/listeC.php?message=cours supprimé');
 
}




if ($action == 'ajout') {
    //1. recupertaion de donnees
    $idcours = $_POST['idcours'];
    $nm_module = $_POST['nm_module'];
    $niveau = $_POST['niveau'];
    $nbr_heure = $_POST['nbr_heure'];
    $etudiants = $_POST['etudiants'];
    $nm_enseignant = $_POST['nm_enseignant'];
    $numsal = $_POST['numsal'];


    //2. Appel du model
    $etService->add($idcours, $nm_module, $niveau, $nbr_heure, $etudiants, $nm_enseignant, $numsal);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listeC.php?message=cours ajouté');
}


if($action=='editC'){
    $idcours=$_GET['idcours'];
    Header('Location:../views/Etudiant/editC.php?idcours='.$idcours);
}




if ($action == 'modifier') {
    //1. recupertaion de donnees
    $idcours = $_POST['idcours'];
    $nm_module = $_POST['nm_module'];
    $niveau = $_POST['niveau'];
    $nbr_heure = $_POST['nbr_heure'];
    $etudiants = $_POST['etudiants'];
    $nm_enseignant = $_POST['nm_enseignant'];
    $numsal = $_POST['numsal'];

    //2. Appel du model
    $etService->editC($idcours, $nm_module, $niveau, $nbr_heure, $etudiants, $nm_enseignant, $numsal);

    //3. appel de la vue
    Header('Location:../views/Etudiant/listeC.php?message=cours modifié');
}