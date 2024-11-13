<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification salle</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>
<body>
    <?php
    $idsal=$_GET['idsal'];
    require_once('../../models/salleService.php');
    $etService=new salleService();
    $salle=$etService->getByMatricule($idsal);
    ?>
<h1>Formulaire modification salle</h1>
  
    <form action="../../controllers/sallectrl.php" method="post">
    <table  align="center">

    <table  align="center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   
                
           Identifiant
            <input type="number" name="idsal" class="form-control" readOnly value="<?= $salle['idsal'] ?>" autocomplete="off" required><br>
      
           Numero
            <input type="number" name="num" class="form-control" value="<?php echo $salle['num']; ?>" autocomplete="off" required><br>
       
            Libelle
            <input type="text" name="libelle" class="form-control" value="<?= $salle['libelle'] ?>" required><br>
       
           Nombre d'etudiant
           <input type="number" class="form-control" value="<?= $salle['nbret'] ?>" name="nbret" required>
  
            <input type="hidden" name="action" value="modifier">
            <td colspan="2" style="text-align: center">  
            &nbsp; &nbsp; &nbsp;&nbsp;
                              <input type='submit' style="background-color: green; color: white" value="MODIFIER">
    </table>
    </form>
</body>
</html>