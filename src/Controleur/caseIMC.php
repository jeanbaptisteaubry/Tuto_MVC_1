<?php

$Vue->setMenu(new \App\Vue\Vue_Menu_IMC());
switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_AccueilIMC());
        break;
    case "calcImc":
        $ok = true;
        if(isset($_REQUEST["poids"]) && isset($_REQUEST["taille"])) {
            if(is_numeric($_REQUEST["poids"]) && is_numeric($_REQUEST["taille"])) {

            }
            else {
                $ok = false;
                $msgErreur = "Veuillez renseigner des valeurs numériques pour le poids et la taille";
            }
        }
        else{
            $ok = false;
            $msgErreur = "Veuillez renseigner les champs poids et taille";
        }
        if ($ok) {
            $poids = $_REQUEST["poids"];
            $taille = $_REQUEST["taille"];
            $imc = $poids / ($taille/100 * $taille/100);
            $Vue->addToCorps(new \App\Vue\Vue_AfficherIMC($imc));
                 }
        else
        {
            $Vue->addToCorps(new \App\Vue\Vue_AccueilIMC($msgErreur));

        }

        break;
}