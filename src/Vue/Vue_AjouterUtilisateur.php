<?php

namespace App\Vue;

use App\Utilitaire\Vue_Composant;

class Vue_AjouterUtilisateur extends Vue_Composant
{

    private string $msgErreur;

    public function __construct( string $msgErreur ="")
    {
        $this->msgErreur=$msgErreur;
    }

    function donneTexte(): string
    {
        $str= "
        <h1>Ajouter un utilisateur</h1>
        <div  style='    width: 50%;    display: block;    margin: auto;'> 
        <form>
            <table> 
                <tr> <td>id</td><td>Automatique !</td> </tr>
                 <tr>    <td>nom</td><td> <input type='text' name='nomUtilisateur'> </td></tr>
                <tr>     <td>prenom</td> <td> <input type='text' name='prenomUtilisateur'> </td></tr>
                <tr>     <td>mot de passe</td> <td> <input type='text' name='motDePasse'> </td></tr>
            </table>
            <input type='hidden' name='case' value ='utilisateur'>
            <button type='submit' name = 'action' value='enregistrerAjouter'> Ajouter !!</button>
            </form>
        </div>
        $this->msgErreur
        ";
        return $str ;
    }

}