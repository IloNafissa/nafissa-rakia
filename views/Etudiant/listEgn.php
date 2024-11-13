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
        <h1 class="text-center mt-4">Liste des enseignants</h1>
        <div class="text-center">
            <a href="../../controllers/enseignantctrl.php?action=formEdn" class="btn btn-primary">Ajouter un enseignant</a>
        </div>
<?php 
        if(isset($_GET['message'])){
            ?>
              <span style="color: green; font-size: large"><?php echo $_GET['message']; ?></span>
        <?php }
    ?>

<?php
require_once('../../models/enseignantService.php');
$enService=new enseignantService();
$enseignant=$enService->getAll();
?>    

<table class="table table-bordered table-striped table-hover">
<thead>
						<tr class="info">
							<th>identifiant</th>
							<th>Nom</th>
							<th>Prenom</th>
							<th>Sexe</th>
                            <th>E-mail</th>
							<th>Addresse</th>
							<th>Actions</th>
						</tr>
					</thead>
    <?php
foreach($enseignant as $en){
 ?>   
    <tr>
    <td><?php echo $en['id']; ?></td>
    <td><?php echo $en['nom']; ?></td>
    <td><?php echo $en['prenom']; ?></td>
    <td><?php echo $en['sexe']; ?></td>
    <td><?php echo $en['email']; ?></td>
    <td><?php echo $en['address']; ?></td>
    <td><a href="../../controllers/enseignantctrl.php?action=editEgn&id=<?php echo $en['id']; ?>" class="btn btn-warning btn-sm">MODIFIER</a>
    <a href="../../controllers/enseignantctrl.php?action=delete&id=<?php echo $en['id']; ?>" class="btn btn-danger btn-sm"   onClick="return window.confirm('Etes-vous sûre de vouloir supprimer cet enseignant')">SUPPRIMER</a></td>
    </tr>
<?php } ?>
   
</table>

<!--
<input type="hidden" name="action" value="editForm" form="f1" />
<input form="f1"  type="submit" value="MODIFIER" />
<input type="hidden" name="matricule" value="UIN" form="f1" />
-->

<form action="../../controllers/enseignantctrl.php" method="GET" id="f1"></form>
</body>
</html>