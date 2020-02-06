<?php
namespace App\Controller {

    use Silex\Application;
    use Silex\ControllerProviderInterface;

    class IndexController implements ControllerProviderInterface{

        public function index(){
            return 'Bonjour';
        }

        public function info(){
            return phpinfo();
        }

        public function test(){
            return "Ceci est un test";
        }

        public function connect(Application $app){
            // créer un nouveau controller basé sur la route par défaut
            $index = $app['controllers_factory'];
            //$index->match("/", 'App\Controller\IndexController::index');
            $index->match("/index", 'App\Controller\IndexController::index');
            $index->match("/info", 'App\Controller\IndexController::info');
            $index->match("/test", 'App\Controller\IndexController::test');
            return $index;
        }
    }
}
