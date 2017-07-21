<?php

/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 17/07/2017
 * Time: 10:19
 */
class Config
{
    // parametri per la connessione al database
    private $nomehost = "localhost";
    private $nomeuser = "root";
    private $password = "";
    private $db = "atm";
    protected $connection;
    // controllo sulle connessioni attive
    private $attiva = false;


    // funzione per la connessione a MySQL
    public function __construct()
    {
        if(!$this->attiva)
        {
            $this->connection = mysqli_connect($this->nomehost,$this->nomeuser,$this->password,$this->db);
            $this->attiva = true;
            return $this;
        }else{
            return true;
        }
    }

       public function getCon()
    {
        return $this->connection;
    }
}
?>