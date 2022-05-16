<!-- php -S localhost:8000 -t public -->
<!-- frontcontroller pour que toutes les requetes passent par public index -->
<?php
require_once "../vendor/autoload.php";
//  une variable d'une Classe
// manipuler un objet 
// 1-il faut charger le fichier qui contient la Classe
// require_once "./models/User.php";
//2-instancier l'objet
// fonction qui s'appelle le constructeur => __construct
//$user=new User();
// Donner un etat a l'objet => donnez une valeur a ses attributs
// -> operateur de portée d'instance 
//$user->: interface de la classe(ensemble des methodes ou attributs publics)
//$user->setId(1);
// Autoloading => chargement automatique
// namespace => package : ensemble de classe du meme domaine
//namespace reprtoire virtuel utiliser pour ranger mes classes 
// installer composer un gestionnaire de dependances
    // gestionnaire => tELECHARGER + configurer une dependance dans votre projet
    // dependances => dossier core est une dependance(classe reutilisable)
    // https://packagist.org
    // Hub de dependance => site qui offre bcp de dependance suivant le langage
Use  App\Models\RP;
    $rp=new RP();
   