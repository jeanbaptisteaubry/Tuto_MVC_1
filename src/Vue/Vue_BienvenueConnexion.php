<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_BienvenueConnexion extends Vue_Composant
{

    /**
     * @param mixed $pseudo
     */
    public function __construct(mixed $pseudo)
    {
    }

    public function donneTexte(): string
    {
        return "
        <h1>Bienvenue</h1>
        <p>Vous êtes connecté</p>
        <p>Vous pouvez maintenant accéder à votre espace personnel</p>
        <p><a href='index.php?case=connexion&action=seDeconnecter'>Se déconnecter</a></p>
        ";
    }
}