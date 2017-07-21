<?php

/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 14/07/2017
 * Time: 16:43
 */
class Tram extends Mezzi
{
    protected $modello;

    /**
     * @return mixed
     */
    public function getModello()
    {
        return $this->modello;
    }

    /**
     * @param mixed $modello
     */
    public function setModello($modello)
    {
        $this->modello = $modello;
    }


}