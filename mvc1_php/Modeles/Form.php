<?php

/**
 * Class Form
 * Petit test à l'ancienne
 * Permet de generer un formulaire customisé
 */
class Form
{
    //variable sockant le texte qui va être interpreté comme du HTML
    protected $form;

    /**
     * Création de la balise ouvrante du formulaire
     * @param $action
     * @param $method
     */
    public function createForm ($action, $method)
    {
        $this->form = '<form action="'.$action.'" method="'.$method.'">';
    }

    /**
     * Ajout de champs customisables
     * @param $name, le nom du champ
     * @param $type, le type (text, button, textarea, ...)
     * @param string $default, valeur par defaut
     */
    public function addField ($name, $type, $default ="")
    {
        $this->form .= '<label for="'.$name.'">'.$name.' : </label>';
        $this->form .= '<input type="'.$type.'" name="'.$name.'" value="'.$default.'"/></br>';
    }

    /**
     * Création du bouton de validation et de la balise fermante du formulaire
     */
    public function endForm()
    {
        $this->form .= ' <input type="submit" value="Submit"/>';
        $this->form .= '</form>';
    }

    /**
     * Getter du formulaire
     * @return mixed
     */
    public function getForm()
    {
        return $this->form;
    }
}