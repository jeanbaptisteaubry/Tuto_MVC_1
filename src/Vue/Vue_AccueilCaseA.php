<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilCaseA extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Vous êtes dans le contexte A!</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Page d'accueil du contexte A
    <form action='index.php' method='post'>
            <input type='hidden' name='case' value='A'>
            <button type='submit' name='action' value='pageSuivante'>
                Aller à la page suivante
            </button>
    </form>
    
     
</div>
        $this->msgErreur
    ";
        return $str ;
    }
}