<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilIMC extends Vue_Composant
{

    private string $msgErreur;
    public function __construct(string $msgErreur="")
    {
        $this->msgErreur = $msgErreur;
    }

    public function donneTexte(): string
    {
        $str="
        <h1>Calcul de l'IMC</h1>
        <form>
            <input type='hidden' name='case' value='IMC'>
            <label for='poids'>Poids (kg)</label>
            <input type='number' name='poids' id='poids'>
            <label for='taille'>Taille (cm)</label>
            <input type='number' name='taille' id='taille'>
            <button type='submit' name='action' value='calcImc'>
                Calculer l'IMC
            </button>
            
 
             <p>$this->msgErreur</p>
        
        </form>
        ";
        return $str;
    }
}