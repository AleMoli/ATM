<?php
require_once('Config.php');
/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 14/07/2017
 * Time: 16:52
 */
class Linea extends Config
{
    protected $id;
    protected $mezzi;
    protected $primo;
    protected $ultimo;
    protected $capolinea;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getMezzi()
    {
        //cercare il mezzo con questo ID e ritornarlo
        return ;//oggetto mezzi e non ID mezzi
    }

    /**
     * @param mixed $mezzi
     */
    public function setMezzi(Mezzi $mezzi)
    {
        $this->mezzi = $mezzi->getId();
    }

    /**
     * @return mixed
     */
    public function getPrimo()
    {
        return $this->primo;
    }

    /**
     * @param mixed $primo
     */
    public function setPrimo($primo)
    {
        $this->primo = $primo;
    }

    /**
     * @return mixed
     */
    public function getUltimo()
    {
        return $this->ultimo;
    }

    /**
     * @param mixed $ultimo
     */
    public function setUltimo($ultimo)
    {
        $this->ultimo = $ultimo;
    }

    /**
     * @return mixed
     */
    public function getCapolinea()
    {
        return $this->capolinea;
    }

    /**
     * @param mixed $capolinea
     */
    public function setCapolinea($capolinea)
    {
        $this->capolinea = $capolinea;
    }



}