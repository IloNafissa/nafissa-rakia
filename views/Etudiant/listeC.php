<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Cours</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.js"></script>
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
        <h1 class="text-center mt-4">Liste des Cours</h1>
        <div class="text-center">
            <a href="../../controllers/coursctrl.php?action=formC" class="btn btn-primary">Aller au formulaire de cours</a>
        </div>

        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success alert-message">
                <?php echo $_GET['message']; ?>
            </div>
        <?php endif; ?>

        <?php
        require_once('../../models/coursService.php');
        $etService = new coursService();
        $etudiants = $etService->getAll();
        ?>

        <div class="table-container">
            <table class="table table-bordered table-striped table-hover table-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>Identifiant</th>
                        <th>Nom du module</th>
                        <th>Numéro de la salle</th>
                        <th>Nombre d'heures</th>
                        <th>Niveau</th>
                        <th>Faculté</th>
                        <th>Nom de l'enseignant</th>                                               
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($etudiants as $et): ?>
                        <tr>
                            <td><?php echo $et['idcours']; ?></td>
                            <td><?php echo $et['nm_module']; ?></td>
                            <td><?php echo $et['numsal']; ?></td>
                            <td><?php echo $et['nbr_heure']; ?></td>
                            <td><?php echo $et['niveau']; ?></td>                                                   
                            <td><?php echo $et['etudiants']; ?></td>
                            <td><?php echo $et['nm_enseignant']; ?></td>
                            <td>
                                <a href="../../controllers/coursctrl.php?action=editC&idcours=<?php echo $et['idcours']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                                <a href="../../controllers/coursctrl.php?action=delete&idcours=<?php echo $et['idcours']; ?>" class="btn btn-danger btn-sm" onClick="return confirm('Etes-vous sûr de vouloir supprimer ce cours ?');">Supprimer</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <form action="../../controllers/coursctrl.php" method="GET" id="f1" style="display:none;"></form>
</body>
</html>
