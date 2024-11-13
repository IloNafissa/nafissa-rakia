<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification enseignant</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>
<body>
    <?php
    $id=$_GET['id'];
    require_once('../../models/enseignantService.php');
    $enService=new enseignantService();
    $enseignant=$enService->getByMatricule($id);
   
    ?>
<h1>Formulaire modification enseignant </h1>
  
    <form action="../../controllers/enseignantctrl.php" method="post">
    <table  align="center">



    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Modification etudiant
    
           Identifiant
            <input type="text" name="id" class="form-control" readOnly value="<?= $enseignant['id'] ?>" autocomplete="off" required><br>
      
           NOM
            <input type="text" name="nom" class="form-control" value="<?php echo $enseignant['nom']; ?>" autocomplete="off" required><br>
       
            PRENOM
            <input type="text" name="prenom" class="form-control" value="<?= $enseignant['prenom'] ?>" required><br>
      
        Sexe
                       H <input type="radio" name="sexe" value="H"> 
                       F <input type="radio" name="sexe" value="F"> 
                          <br><br>
            E-mail
            <input type="email" class="form-control" value="<?= $enseignant['email'] ?>" name="email" required><br>
       
            addresse
            <input type="text"  class="form-control" value="<?= $enseignant['address'] ?>" name="address" required><br>
      
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