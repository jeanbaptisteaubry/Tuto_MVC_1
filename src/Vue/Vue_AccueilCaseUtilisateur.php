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
                    <th>action</th>
                </tr>
            ";
        if($this->listeUtilisateur==null)
        {
            $str.="
            <tr><td colspan='5'>table vide</td> </tr>
            ";
        }
        foreach ($this->listeUtilisateur as $item) {
            $str.="
            <tr>
                <td><a href='index.php?case=utilisateur&action=modifier&id=$item[id]'>  $item[id]</a></td>
                <td>$item[nom]</td>
                <td>$item[prenom]</td>
                <td>$item[motDePasse]</td>
                <td>
                    <form method='post'>
                        <input type='hidden' name='case' value ='utilisateur'>
                        <input type='hidden' name='id' value ='$item[id]'>
                        <button type='submit' name = 'action' value='supprimer'> Supprimer</button>
                    </form>
                </td>
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
