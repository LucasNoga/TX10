<?php

/**
 * Class View
 * Permet la transmission de n'importe quelles données vers n'importe quelle vue
 */
class View
{
    /**
     * Fonction de rendu, construit la vue désiré avec les données en entrees
     * @param $path, chemin vers la vue
     * @param $params, données à inclure dans la vue (sous forme de table de hashage)
     * @return string
     */
    public function render($path, $params)
    {
        //extraction le tableau de hashage en variables
            //Ex : ["nom"=> "Joe", "surnom" => "leRigolo"] donne deux variables : nom = "Joe et surnom = "leRigolo"
        extract($params);

        //Interruption des interactions avec le client le temps de remplir un tampon
        // tout ce qui suit jusqu'a "ob_get_clean()" est mis en tampon.
        //Avec "ob_get_clean()" : tout ce qui a été "enmagasiné" est restitué
        ob_start();

        //inclusion de la vue demandée
        include($path);
        //inclusion du layout par defaut
        include(SITE_PATH.'ressources/layout.php');
        // renvoie des données sous forme de page construite
        return ob_get_clean();
    }
}