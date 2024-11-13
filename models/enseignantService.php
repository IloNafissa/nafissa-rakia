<?php
require_once('Provider.php');

class enseignantService
{
    private $connexion;

    function __construct()
    {
        $p = new Provider();
        $this->connexion = $p->getconnection();
    }


    public function add($id, $nom, $prenom, $sexe, $email, $address)
    {
        $requete = 'insert into enseignant (id, nom, prenom, sexe, email, address) values (:ide, :nm, :pr, :sx, :mail, :adr)';
        $stat = $this->connexion->prepare($requete);
        $rs = $stat->execute([
            'ide' => $id,
            'nm' => $nom,
            'pr' => $prenom,
            'sx' => $sexe,
            'mail' => $email,
            'adr' => $address
        ]);



    }

    public function editEgn($id, $nom, $prenom, $sexe, $email, $address)
    {

        $requete='update enseignant set nom=:nm, prenom=:pr, sexe=:sx, email=:mail, address=:adr where id=:ide';
        $stmt=$this->connexion->prepare($requete);
        $result=$stmt->execute([
            'nm'=> $nom,
            'pr'=> $prenom,
            'sx'=> $sexe,
            'mail'=> $email,
            'adr'=> $address,
            'ide'=> $id
        ]);

    }


    public function getByMatricule($id)
    {
        $requete="select * from enseignant where id=:ide";
        $stmt=$this->connexion->prepare($requete);
        $res=$stmt->execute([
            'ide'=> $id
        ]);
        $enseignant=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $enseignant[0];
    }

    public function getAll()
    {
        $requete = 'select * from enseignant order by id desc';
        $st = $this->connexion->query($requete);
        $enseignant = $st->fetchAll(PDO::FETCH_ASSOC);
        return $enseignant;
    }

    public function delete($id)
    {
        $requete='delete from enseignant where id=:ide';
        $sta=$this->connexion->prepare($requete);
        $res=$sta->execute([
            'ide'=> $id
        ]);
    }

}