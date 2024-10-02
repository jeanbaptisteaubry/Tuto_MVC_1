<?php

namespace App\Modele;

use App\Utilitaire\Singleton_ConnexionPDO;

class Modele_Utilisateur
{

    public static function Utilisateur_Select()
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $sql = "SELECT * FROM utilisateur";
        $requetePreparee = $connexionPDO->prepare($sql);
        $reponse = $requetePreparee->execute();
        $tableauReponse = $requetePreparee->fetchAll();
        return $tableauReponse;
    }

    public static function Utilisateur_Insert(mixed $pseudo, mixed $nomUtilisateur, mixed $prenomUtilisateur, mixed $motDePasse)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $sql = "INSERT INTO utilisateur (pseudo, nom, prenom, motDePasse) VALUES (:pseudoUtilisateur, :nomUtilisateur, :prenomUtilisateur, :motDePasse)";
        $requetePreparee = $connexionPDO->prepare($sql);
        $reponse = $requetePreparee->execute(array(
            "pseudoUtilisateur" => $pseudo,
            "nomUtilisateur" => $nomUtilisateur,
            "prenomUtilisateur" => $prenomUtilisateur,
            "motDePasse" => $motDePasse
        ));
        return $reponse;
    }

    public static function Utilisateur_SelectParId(mixed $id)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $sql = "SELECT * FROM utilisateur WHERE id = :id";
        $requetePreparee = $connexionPDO->prepare($sql);
        $reponse = $requetePreparee->execute(array(
            "id" => $id
        ));
        $tableauReponse = $requetePreparee->fetch();
        return $tableauReponse;
    }

    public static function Utilisateur_Update(mixed $id, mixed $pseudo, mixed $nomUtilisateur, mixed $prenomUtilisateur, mixed $motDePasse)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $sql = "UPDATE utilisateur SET pseudo = :pseudoUtilisateur, nom = :nomUtilisateur, prenom = :prenomUtilisateur, motDePasse = :motDePasse WHERE id = :id";
        $requetePreparee = $connexionPDO->prepare($sql);
        $reponse = $requetePreparee->execute(array(
            "pseudoUtilisateur" => $pseudo,
            "id" => $id,
            "nomUtilisateur" => $nomUtilisateur,
            "prenomUtilisateur" => $prenomUtilisateur,
            "motDePasse" => $motDePasse
        ));
        return $reponse;
    }

    public static function Utilisateur_Delete(mixed $id)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $sql = "DELETE FROM utilisateur WHERE id = :id";
        $requetePreparee = $connexionPDO->prepare($sql);
        $reponse = $requetePreparee->execute(array(
            "id" => $id
        ));
        return $reponse;
    }

    public static function Utilisateur_SelectParPseudo(mixed $pseudo)
    {
        $connexionPDO = Singleton_ConnexionPDO::getInstance();
        $sql = "SELECT * FROM utilisateur WHERE pseudo = :pseudo";
        $requetePreparee = $connexionPDO->prepare($sql);
        $reponse = $requetePreparee->execute(array(
            "pseudo" => $pseudo
        ));
        $tableauReponse = $requetePreparee->fetch();
        return $tableauReponse;
    }
}