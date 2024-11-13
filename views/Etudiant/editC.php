<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification courst</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>
<body>
    <?php
    $idcours=$_GET['idcours'];
    require_once('../../models/coursService.php');
    $etService=new coursService();
    $cours=$etService->getByMatricule($idcours);
    var_dump($cours);
    ?>
<h1>Formulaire modification cours </h1>
  
    <form action="../../controllers/coursctrl.php" method="post">
   
    <table  align="center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Modification cours
                
                    <div class="modal-body">

                       identifiant
                        <input type="number" name="idcours" class="form-control" readOnly value="<?= $cours['idcours'] ?>" autocomplete="off" required>
                        <br>
                        Nom module
                        <input type="text" name="nm_module" class="form-control" value="<?php echo $cours['nm_module']; ?>" autocomplete="off" required><br>
                        Numero de la salle
                        <input type="number" name="numsal" class="form-control" value="<?= $cours['numsal'] ?>" required>
                        <br>
                       Nombre d'heure
                       <input type="number" name="nbr_heure" class="form-control" value="<?= $cours['nbr_heure'] ?>" required>
                       <br>
                        Niveau 
                        <input type="text" class="form-control" value="<?= $cours['niveau'] ?>" name="niveau" required> 
                        <br>
                        Faculte 
                        <input type="text" class="form-control" value="<?= $cours['etudiants'] ?>" name="etudiants" required>
                        <br>
                        Nom de l'enseignant 
                        <input type="text" class="form-control" value="<?= $cours['nm_enseignant'] ?>" name="nm_enseignant" required>
    
                              <input type="hidden" name="action" value="modifier">
                               <td colspan="2" style="text-align: center">  

                                &nbsp; &nbsp; &nbsp;&nbsp;
                              <input type='submit' style="background-color: green; color: white" value="MODIFIER">

                </div>
            </div>
        </div>
    </form>
</body>
</html>