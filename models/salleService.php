<?php
require_once('Provider.php');

class salleService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


    public function add($idsal, $num, $libelle, $nbret)
    {
        $requete = 'insert into salle (idsal, num, libelle, nbret) values (:ide, :nm, :lib, :nbe)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'ide' => $idsal,
            'nm' => $num,
            'lib' => $libelle,
            'nbe' => $nbret
            
        ]);

    }

    public function editSal($idsal, $num, $libelle, $nbret)
    {

        $requete='update salle set num=:nm, libelle=:lib, nbret=:nbe where idsal=:ide';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'nm'=> $num,
            'lib'=> $libelle,
            'nbe'=> $nbret,
            'ide'=> $idsal
        ]);

    }


    public function getByMatricule($idsal)
    {
        $requete="select * from salle where idsal=:ide";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'ide'=> $idsal
        ]);
        $salle=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $salle[0];
    }

    public function getAll()
    {
        $requete = 'select * from salle order by idsal desc';
        $st = $this->connexion->query($requete);
        $salle = $st->fetchAll(PDO::FETCH_ASSOC);
        return $salle;
    }

    public function delete($idsal)
    {
        $requete='delete from salle where idsal=:ide';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'ide'=> $idsal
        ]);
    }

}