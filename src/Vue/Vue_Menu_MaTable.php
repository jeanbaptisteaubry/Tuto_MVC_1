<?php
namespace App\Vue;
use App\Utilitaire\Vue_Composant;

class Vue_Menu_MaTable extends Vue_Composant
{
    public function __construct( )
    {           }
    function donneTexte(): string
    {

                return "
             <nav id='menu'>
              <ul id='menu-closed'> 
                <li><a href='?case=A'>cas A</a></li>
                <li><a href='?case=B'>cas B</a></li>   
                <li><a href='?case=maTable'>****Ma Table****</a></li>   
                <li><a href='?case=utilisateur'>Utilisateur</a></li>     
                <li><a href='?case=connexion'>Se connecter</a></li>   
                   </ul>
            </nav> 
";
              
    }
}
