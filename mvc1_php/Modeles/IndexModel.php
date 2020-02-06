<?php

/**
 * Class IndexModel
 * Modèle de données pour la page index
 * On imagine ici une classe dont les attributs sont issus d'une base de données.
 */
class IndexModel
{
    private $title;
    private $message;

    /**
     * IndexModel constructor.
     */
    public function __construct()
    {
        $this->title = "Je suis un titre";
        $this->message = "Je suis un message";

    }

    /**
     * Getter de title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Getter de message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}