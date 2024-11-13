<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification etudiant</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>
<body>
    <?php
    $matricule=$_GET['matricule'];
    require_once('../../models/EtudiantService.php');
    $etService=new EtudiantService();
    $etudiant=$etService->getByMatricule($matricule);
    //var_dump($etudiant);
    ?>
<h1>Formulaire modification étudiant </h1>
  
    <form action="../../controllers/EtudiantCtrl.php" method="post">
   
    <table  align="center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Modification etudiant
                
                    <div class="modal-body">

                       Matricule
                        <input type="text" name="matricule" class="form-control" readOnly value="<?= $etudiant['matricule'] ?>" autocomplete="off" required>
                        <br>
                        Nom
                        <input type="text" name="nom" class="form-control" value="<?php echo $etudiant['nom']; ?>" autocomplete="off" required><br>
                        Prenom
                        <input type="text" name="prenom" class="form-control" value="<?= $etudiant['prenom'] ?>" required>
                        <br>
                       Sexe
                       H <input type="radio" name="sexe" value="H"> 
                       F <input type="radio" name="sexe" value="F"> 
                          <br><br>
                        Date naissance
                        <input type="date" class="form-control" value="<?= $etudiant['ddn'] ?>" name="ddn" required> 
                        <br>
                        Numero Telephone
                        <input type="number" class="form-control" value="<?= $etudiant['tel'] ?>" name="tel" required>
    
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