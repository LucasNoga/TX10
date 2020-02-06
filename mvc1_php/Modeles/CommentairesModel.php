<?php

/**
 * Created by PhpStorm.
 * User: PAF
 * Date: 30/09/2016
 * Time: 09:45
 */
class CommentModel
{
    private $arr;

    public function __construct()
    {
        $this->arr = array("Joe : Je suis super cool ", "Jim : Non c'est moa !");
    }

    public function getComments()
    {
        return $this->arr;
    }
}