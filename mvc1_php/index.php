<?php
/**
 * Page de controleur de l'index
 * Intercepte les requetes : localhost/mvc1 (ou localhost/mvc1/index.php
 */

//definition du chemin absolut du repertoire
define('SITE_PATH',realpath(dirname(__FILE__)).'/');

//Inclusion de la vue qui nous servira à faire le lien entre la vue (ici IndexView) et les données du controleur
require(SITE_PATH.'Vues/View.php');

//instanciation de la Classe View
$view = new View();
//instanciantion du controleur pour recuperer les données du model (ici IndexModel)
$controller = new IndexCtrl();

//Transmission des données fournies par le model à la bonne vue
echo $view->render(SITE_PATH."Vues/IndexView.php", ['vars' => $controller->index(), 'form' => $controller->getNewForm("monForm", "GET")]);

/**
 * Class IndexCtrl
 * Controleur à proprement parler
 */
class IndexCtrl
{
    //Une reference sur le modèle associé
    private $modele;

    /**
     * IndexCtrl constructor.
     * instanciation d'un objet de la classe modèle
     */
    public function __construct()
    {
        //recuperation des sources
        require(SITE_PATH."Modeles/IndexModel.php");
        //instanciation
        $this->modele = new IndexModel();
    }


    /**
     * renvoie des variables du model a passer à la vue
     * @return array
     */
    public function index()
    {
        $vars = array($this->modele->getTitle(), $this->modele->getMessage());
        return $vars;
    }

    /**
     * Petit module pour créer simplement un formulaire
     * @param $nom, nom du formulaire
     * @param $methode, POST ou GET
     * @return mixed, le HTML du formulaire créé
     */
    public function getNewForm($nom, $methode)
    {
        //inclusion du modele pour construire le formulaire
        require(SITE_PATH."Modeles/Form.php");

        //instanciation
        $form = new Form();
        //création
        $form->createForm($nom, $methode);
        //ajout de champs
        $form->addField("login", 'text');
        $form->addField("password", 'password');
        //fermeture du formulaire
        $form->endForm();

        return $form->getForm();
    }

}