<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_A());
switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        break;
    case "pageSuivante":
        $Vue->addToCorps(new \App\Vue\Vue_CaseA_PageSuivante());
        break;
    case "pageAccueil":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de faire un retour à l'accueil du A"));
        break;
    case "versA":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseA());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de changer de case !"));
        break;
}