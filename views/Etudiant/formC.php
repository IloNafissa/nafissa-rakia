<html>

<head>
    <title>Formulaire ajout étudiant</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>

<body>
    
    <h1>Formulaire ajout cours</h1>
    <a href="../../controllers/coursctrl.php?action=listeC" >Go to course list</a> <br >
  
    <form action="../../controllers/coursctrl.php" method="post">

    <table  align="center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Nouveau cours                
                    <div class="modal-body">

                       Identifiant
                        <input input type="number" name="idcours" autocomplete="off" class="form-control" required >
                        <br>
                       Nom du module 
                        <input type="text" name="nm_module" class="form-control" required placeholder="Entrer le nom du module"><br>
                        Nombre d'heure du cours
                        <input type="number" name="nbr_heure" class="form-control" required placeholder="Entrer le nombre d'heure du cours">
                        <br>
                       Niveau
                        <input type="text" name="niveau" class="form-control" required placeholder="Entrer le niveau du cours">
                        <br>
                       Nom de l'enseignant
                       <input type="text" name="nm_enseignant" class="form-control" required placeholder="Entrer le nom de l'enseignant">
                        <br>                                                           
                       Numero de la salle
                        <input type="number" name="numsal" class="form-control" required placeholder="Entrer le numero de la salle"><br> 
                       Faculte
                       <input type="text" name="etudiants" class="form-control" required placeholder="Faculte">                   
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