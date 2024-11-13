<html>

<head>
    <title>Formulaire ajout salle</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>

<body>
    <h1>Formulaire ajout salle</h1>
    <a href="../../controllers/sallectrl.php?action=listeSal" >Go to salle list</a> <br >
  
    <form action="../../controllers/sallectrl.php" method="post">
    <table  align="center">

    <table  align="center">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Nouvelle salle
                
                    <div class="modal-body">

                    
            Identifiant
            <input type="number" name="idsal" class="form-control" autocomplete="off" required>
       
           Numero
            <input type="number" name="num" class="form-control" autocomplete="off" required>
       
            libelle
            <input type="text" name="libelle" class="form-control" required>
      
            Nombre d'etudiant
            <input type="number" name="nbret" class="form-control" required>

                
            <input type="hidden" name="action" value="ajout">
            <td colspan="2" style="text-align: center">  
             <input type='reset' style="background-color: red; color: white" value="VIDER"> 
                 &nbsp; &nbsp; &nbsp;&nbsp;
                 <input type='submit' style="background-color: green; color: white" value="AJOUTER">
       
                </div>
            </div>
        </div>


  
    </table>
    </form>
</body>

</html>