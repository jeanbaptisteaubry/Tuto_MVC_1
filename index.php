<?php
@session_start();
include_once "vendor/autoload.php";

use App\Utilitaire\Vue;
use App\Vue\Vue_BienvenueAllerPagePrecedente;
use App\Vue\Vue_BienvenueAllerPageSuivante;

if (isset($_REQUEST["case"]))
    $case = $_REQUEST["case"];
else
    $case = "defaut";

if (isset($_REQUEST["action"]))
    $action = $_REQUEST["action"];
else
    $action = "defaut";

if (isset($_SESSION["idUtilisateur"])) {
    $typeUtilisateur = "connecté";
} else {
    $typeUtilisateur = "non connecté";
}


$Vue = new Vue();
switch ($typeUtilisateur) {
    case "connecté":
        switch ($case) {
            case "A":
            case "defaut":
                include ".\src\Controleur\caseA.php";
                break;
            case "B":
                include ".\src\Controleur\caseB.php";
                break;
            case "maTable":
                include ".\src\Controleur\caseMaTable.php";
                break;
            case "utilisateur":
                include ".\src\Controleur\caseUtilisateur.php";
                break;
            case "connexion" :
                include ".\src\Controleur\caseConnexion.php";
                break;

        }
        break;
    case "non connecté":
        switch ($case) {
            case "defaut":
            case "connexion" :
                include ".\src\Controleur\caseConnexion.php";
                break;
                break;
        }
}
$Vue->afficher();