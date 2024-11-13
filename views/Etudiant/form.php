<html>

<head>
    <title>Formulaire ajout étudiant</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>

<body>
    
    <h1>Formulaire ajout étudiant</h1>
    <a href="../../controllers/EtudiantCtrl.php?action=liste" >Go to students list</a> <br >
  
    <form action="../../controllers/EtudiantCtrl.php" method="post">

    <table  align="center">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Nouveau etudiant
                
                <div class="modal-body">

                       Matricule
                        <input input type="text" name="matricule" autocomplete="off" class="form-control" required placeholder="Entrer le matricule">
                        <br>
                        Nom
                        <input type="text" name="nom" class="form-control" required placeholder="Entrer le nom"><br>
                        Prenom
                        <input type="text" name="prenom" class="form-control" required placeholder="Entrer le prenom">
                        <br>
                       Sexe
                       H <input type="radio" name="sexe" value="H"> 
                       F <input type="radio" name="sexe" value="F"> 
                    <br><br>
                        Date naissance
                        <input input type="date" name="ddn" class="form-control" required placeholder="Entrer la Date">
                        <br>
                        Numero Telephone
                        <input type="number" name="tel" class="form-control" required placeholder="Numero Telephone">
                        <input type="hidden" name="action" value="ajout">
                          <td colspan="2" style="text-align: center">  
                            <input type='reset' style="background-color: red; color: white" value="VIDER"> 
                              &nbsp; &nbsp; &nbsp;&nbsp;
                               <input type='submit' style="background-color: green; color: white" value="AJOUTER">
                </div>
            </div>
        </div>

    </form> 
</body>

</html>