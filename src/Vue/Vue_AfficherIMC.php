<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AfficherIMC extends Vue_Composant
{
    private int|float $imc;
    /**
     * @var mixed|string
     */
    private mixed $msgErreur;

    /**
     * @param float|int $imc
     */
    public function __construct($imc, $msgErreur="")
    {
        $this->imc = $imc;
        $this->msgErreur = $msgErreur;
    }

    public function donneTexte(): string
    {
        $str="
        <p>Votre IMC est de $this->imc</p>
        ";
        return $str;
    }

}