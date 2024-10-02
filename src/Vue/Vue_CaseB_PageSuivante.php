<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_CaseB_PageSuivante extends Vue_Composant
{
    private string $msgErreur;
    public function __construct(string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
<h1>Vous êtes dans le contexte B!</h1>
<div  style='    width: 50%;    display: block;    margin: auto;'>  
    Page suivante du contexte B
    <form action='index.php' method='post'>
            <input type='hidden' name='case' value='B'>
            <button type='hidden' name='action' value='pageAccueil'>
                Retour à l'accueil
            </button>
    </form>
</div>

 
        $this->msgErreur
    ";
        return $str ;
    }
}