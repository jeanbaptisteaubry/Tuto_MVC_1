<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_Connexion extends Vue_Composant
{

    private string $msgErreur;
    public function __construct($msgErreur = "")
    {
        $this->msgErreur = $msgErreur;
    }

    function donneTexte(): string
    {
        return "
        <form action='?case=connexion' method='post'>
            <h2>Connexion</h2>
            <label for='nom'>Nom d'utilisateur:</label><br>
            <input type='text' id='pseudo' name='pseudo' value=''><br>
            <label for='motDePasse'>Mot de passe:</label><br>
            <input type='password' id='motDePasse' name='motDePasse' value=''><br><br>
            <input type='hidden' name='case' value='connexion'>
            <button type='submit' value='connecter' name='action'>Se connecter</button>
                $this->msgErreur
        </form>
        ";
    }
}