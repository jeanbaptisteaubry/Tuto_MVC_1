<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_Utilisateur());

switch ($action) {
    //Case permettant le CRUD
    case "defaut":
        $data = \App\Modele\Modele_Utilisateur::Utilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseUtilisateur($data));
        break;
    case "ajouter":
        $Vue->addToCorps(new \App\Vue\Vue_AjouterUtilisateur());
        break;
    case "enregistrerAjouter":
        \App\Modele\Modele_Utilisateur::Utilisateur_Insert($_REQUEST["pseudo"], $_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["motDePasse"]);
        $data = \App\Modele\Modele_Utilisateur::Utilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseUtilisateur($data));
        break;
    case "modifier":
        $data = \App\Modele\Modele_Utilisateur::Utilisateur_SelectParId($_REQUEST["id"]);
        $Vue->addToCorps(new \App\Vue\Vue_ModifierUtilisateur($data));
        break;
    case "enregistrerModifier":
        \App\Modele\Modele_Utilisateur::Utilisateur_Update($_REQUEST["id"], $_REQUEST["pseudo"], $_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["motDePasse"]);
        $data = \App\Modele\Modele_Utilisateur::Utilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseUtilisateur($data));
        break;
    case "supprimer":
        \App\Modele\Modele_Utilisateur::Utilisateur_Delete($_REQUEST["id"]);
        $data = \App\Modele\Modele_Utilisateur::Utilisateur_Select();
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseUtilisateur($data));
        break;
}

