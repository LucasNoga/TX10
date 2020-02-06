<?php
/**
 * Page de controleur pour la page Commentaires
 * Intercepte les requetes : localhost/mvc1/commentaires.php
 */

//definition du chemin absolut du repertoire
define('SITE_PATH',realpath(dirname(__FILE__)).'/');

//Inclusion de la vue qui nous servira à faire le lien entre la vue (ici IndexView) et les données du controleur
require(SITE_PATH.'Vues/View.php');


//instanciation de la Classe View
$view = new View();
//instanciantion du controleur pour recuperer les données du model (ici CommentairesModel)
$ctrl = new CommentCtrl();

//Transmission des données fournies par le model à la bonne vue
echo $view->render(SITE_PATH."Vues/CommentairesView.php", ['vars' => $ctrl->index()]);

/**
 * Class CommentCtrl
 * Controleur à proprement parler
 */
class CommentCtrl
{
    //Une reference sur le modèle associé
    private $model;

    /**
     * CommentCtrl constructor.
     * instanciation d'un objet de la classe modèle
     */
    public function __construct()
    {
        //recuperation des sources
        require(SITE_PATH."Modeles/CommentairesModel.php");
        //instanciation
        $this->model = new CommentModel();
    }

    /**
     * renvoie des variables du model a passer à la vue
     * @return array
     */
    public function index()
    {
        $vars = $this->model->getComments();
        return $vars;
    }
}

