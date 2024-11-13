<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
    <style>
        table th, table td {
            text-align: center;
            white-space: nowrap;
        }

        .table-container {
            margin-top: 20px;
        }

        .alert-message {
            color: green;
            font-size: large;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
        <h1 class="text-center mt-4">Liste des etudiants</h1>
        <div class="text-center">
            <a href="../../controllers/EtudiantCtrl.php?action=form" class="btn btn-primary">Ajouter un etudiants</a>
        </div>
<?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

<?php
require_once('../../models/EtudiantService.php');
$etService=new EtudiantService();
$etudiants=$etService->getAll();
?>    


<table class="table table-bordered table-striped table-hover">
<thead>
						<tr class="info">
							<th>Matricule</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Sexe</th>
                            <th>Telephone</th>
							<th>Date de naissance</th>
							<th>Actions</th>
						</tr>
					</thead>
   <!-- <tr>
    <th>MATRICULE</th><th>NOM</th><th>PRENOM</th><th>SEXE</th><th>TELEPHONE</th><th>DATE DE NAISSANCE</th><th>ACTIONS</th>
    </tr> -->
    <?php
foreach($etudiants as $et){
 ?>   
    <tr>
    <td><?php echo $et['matricule']; ?></td>
    <td><?php echo $et['nom']; ?></td>
    <td><?php echo $et['prenom']; ?></td>
    <td><?php echo $et['sexe']; ?></td>
    <td><?php echo $et['tel']; ?></td>
    <td><?php echo $et['ddn']; ?></td>
    <td><a href="../../controllers/EtudiantCtrl.php?action=editForm&matricule=<?php echo $et['matricule']; ?> " class="btn btn-warning btn-sm">MODIFIER</a>
    <a href="../../controllers/EtudiantCtrl.php?action=delete&matricule=<?php echo $et['matricule']; ?>" class="btn btn-danger btn-sm"   onClick="return window.confirm('Etes-vous sûre de vouloir supprimer cet étudiant')">SUPPRIMER</a></td>
    </tr>
<?php } ?>
   
</table>

<form action="../../controllers/EtudiantCtrl.php" method="GET" id="f1"></form>
</body>
</html>