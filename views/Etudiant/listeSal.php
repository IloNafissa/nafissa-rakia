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
        <h1 class="text-center mt-4">Liste des salles</h1>
        <div class="text-center">
            <a href="../../controllers/sallectrl.php?action=formSal" class="btn btn-primary">Ajouter une salle</a>
        </div>
<?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

<?php
require_once('../../models/salleService.php');
$etService=new salleService();
$salle=$etService->getAll();
?>    


<table class="table table-bordered table-striped table-hover">
<thead>
						<tr class="info">
							<th>Identifiant</th>
							<th>Numero de la salle </th>
							<th>Libelle</th>
							<th>Nombre d'etudiant</th>
							<th>Actions</th>
						</tr>
					</thead>
    <?php
foreach($salle as $et){
 ?>   
    <tr>
    <td><?php echo $et['idsal']; ?></td>
    <td><?php echo $et['num']; ?></td>
    <td><?php echo $et['libelle']; ?></td>
    <td><?php echo $et['nbret']; ?></td>
    <td><a href="../../controllers/sallectrl.php?action=editSal&idsal=<?php echo $et['idsal']; ?>" class="btn btn-warning btn-sm">MODIFIER</a>
    <a href="../../controllers/sallectrl.php?action=delete&idsal=<?php echo $et['idsal']; ?>" class="btn btn-danger btn-sm"  onClick="return window.confirm('Etes-vous sûre de vouloir supprimer cette salle')">SUPPRIMER</a></td>
    </tr>
<?php } ?>
   
</table>


<form action="../../controllers/sallectrl.php" method="GET" idsal="f1"></form>
</body>
</html>