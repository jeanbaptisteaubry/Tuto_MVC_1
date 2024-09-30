<?php



switch ($action) {
    case "defaut":
        $Vue->addToCorps(new \App\Vue\Vue_Connexion());
        break;
    case "connecter":
        if(isset($_REQUEST["pseudo"])) {
            $pseudo = $_REQUEST["pseudo"];
            $data = \App\Modele\Modele_Utilisateur::Utilisateur_SelectParPseudo($pseudo);
            if (count($data) == 1) {
                if (isset($_REQUEST["motDePasse"])) {
                    if ($data[0]["motDePasse"] == $_REQUEST["motDePasse"]) {
                        $_SESSION["idUtilisateur"] = $data[0]["id"];
                        $Vue->addToCorps(new \App\Vue\Vue_BienvenueConnexion($pseudo));
                    } else {
                        $Vue->addToCorps(new \App\Vue\Vue_Connexion("Mot de passe incorrect"));
                    }
                } else {
                    $Vue->addToCorps(new \App\Vue\Vue_Connexion("Login incorrect 2"));
                }
            }else {
                $Vue->addToCorps(new \App\Vue\Vue_Connexion("Mot de passe erroné"));
            }

        }
        else
        {
            $Vue->addToCorps(new \App\Vue\Vue_Connexion("Login incorrect 1"));
        }
        break;
    case "seDeconnecter":
        unset($_SESSION["idUtilisateur"]);
        $Vue->addToCorps(new \App\Vue\Vue_Connexion());
        break;
    default:
        $Vue->addToCorps(new \App\Vue\Vue_Connexion("default $action"));
        break;
}