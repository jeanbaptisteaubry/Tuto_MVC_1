<?php
$Vue->setMenu(new \App\Vue\Vue_Menu_B());
switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        break;
    case "pageSuivante":
        $Vue->addToCorps(new \App\Vue\Vue_CaseB_PageSuivante());
        break;
    case "pageAccueil":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de faire un retour à l'accueil du B"));
        break;
    case "versB":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilCaseB());
        $Vue->addToCorps(new \App\Vue\Vue_AfficherMessage("Vous venez de changer de case !"));
        break;

}