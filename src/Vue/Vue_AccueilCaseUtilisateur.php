<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AccueilCaseUtilisateur extends Vue_Composant
{

    private array $listeUtilisateur;
    private string $msgErreur;

    public function __construct($listeDonnee, string $msgErreur ="")
    {
        $this->listeUtilisateur=$listeDonnee;
        $this->msgErreur=$msgErreur;
    }
    
    function donneTexte(): string
    {
        //Vue générale permettant la gestion des utilisateurs avec leurs propriétés : nom, prenom et mot de passe (en claire mais c'est pédagoique !)
        $str= "
        <h1>Vous affichez la table 'utilisateur' !</h1>
        <div  style='    width: 50%;    display: block;    margin: auto;'> 
            <table> 
                <tr>
                    <th>id</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>mot de passe</th>
                </tr>
            ";
        if($this->listeUtilisateur==null)
        {
            $str.="
            <tr><td colspan='4'>table vide</td> </tr>
            ";
        }
        foreach ($this->listeUtilisateur as $item) {
            $str.="
            <tr>
            <td>$item[id]</td
            <td>$item[nom]</td>
            <td>$item[prenom]</td>
            <td>$item[motDePasse]</td>
             </tr>
            ";
        }
        $str.="</table>
        <form method='post'>
            <input type='hidden' name='case' value ='utilisateur'>
            <button type='submit' name = 'action' value='ajouter'> Ajouter un utilisateur</button>
        </form>
        $this->msgErreur
        ";
        return $str ;
    }
}
