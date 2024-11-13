<?php
require_once('Provider.php');

class coursService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }

    public function add($idcours, $nm_module, $niveau, $nbr_heure, $etudiants, $nm_enseignant, $numsal)
    {
        $requete = 'insert into cours (idcours, nm_module, nbr_heure, niveau, nm_enseignant, numsal, etudiants) values (:idc, :nm, :nh, :niv, :nme, :ns, :et)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'idc' => $idcours,
            'nm' => $nm_module,
            'nh' => $nbr_heure,  
            'niv' => $niveau,
            'nme' => $nm_enseignant,
            'ns' => $numsal,                         
            'et' => $etudiants  
                      
        ]);

    }

    public function editC($idcours, $nm_module, $niveau, $nbr_heure, $etudiants, $nm_enseignant, $numsal)
    {
        $requete='update cours set nm_module=:nm, nbr_heure=:nh, niveau=:niv, nm_enseignant=:nme, numsal=:ns, etudiants=:et where  idcours=:idc ';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'idc' => $idcours,
            'nm' => $nm_module,
            'nh' => $nbr_heure,  
            'niv' => $niveau,
            'nme' => $nm_enseignant,
            'ns' => $numsal,                         
            'et' => $etudiants 
        ]);

    }

    public function getByMatricule($idcours)
    {
        $requete = "SELECT * FROM cours WHERE idcours = :idc";
        $stmt = $this->connexion->prepare($requete);
        $res = $stmt->execute([
            'idc' => $idcours
        ]);
    
        // Récupérer les résultats sous forme de tableau associatif
        $cours = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        // Vérification si des résultats ont été retournés
        if (empty($cours)) {
            // Aucun cours trouvé
            return null;
        }
    
        // Vérification si l'index 0 existe bien
        if (isset($cours[0])) {
            return $cours[0];  // Accès au premier élément du tableau
        } else {
            return null;  // Si l'index 0 n'est pas défini, retourner null
        }
    }
    

    public function getAll()
    {
        $requete = 'select * from cours order by idcours desc';
        $st = $this->connexion->query($requete);
        $cours = $st->fetchAll(PDO::FETCH_ASSOC);
        return $cours;
    }

    public function delete($idcours)
    {
        $requete='delete from cours where idcours=:idc';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'idc' => $idcours
        ]);
    }

}