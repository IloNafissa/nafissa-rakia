<html>

<head>
    <title>Formulaire ajout enseignant</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
    <script type="text/javascript" src="../../js/jquery.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
</head>

<body>
    <h1>Formulaire ajout enseignant</h1>
    <a href="../../controllers/enseignantctrl.php?action=listEgn" >Go to teacher list</a> <br >
  
    <form action="../../controllers/enseignantctrl.php" method="post">
    <table  align="center">

    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Nouveau enseignant
                
                    <div class="modal-body">
                            
           Identifiant
            <input type="text" name="id" autocomplete="off"  class="form-control" required placeholder="Entrer le l'identifiant"><br>
      
            NOM
            <input type="text" name="nom" autocomplete="off" class="form-control" required placeholder="Entrer le nom"><br>
      
            PRENOM
            <input type="text" name="prenom" class="form-control" required placeholder="Entrer le prenom"><br>
       
            SEXE
            
               H <input type="radio" name="sexe" value="H"> 
                F <input type="radio" name="sexe" value="F"> 
                <br><br>
            E-mail
              <input type="email" name="email" class="form-control" required placeholder="Entrer le mail"><br>
       
            Addresse
           ><input type="text" name="address" class="form-control" required placeholder="Entrer votre addresse"><br>

            <input type="hidden" name="action" value="ajout">
            <td colspan="2" style="text-align: center">  
<input type='reset' style="background-color: red; color: white" value="VIDER"> 
&nbsp; &nbsp; &nbsp;&nbsp;
<input type='submit' style="background-color: green; color: white" value="AJOUTER">
       
    </table>
    </form>
</body>

</html>