<?php
require_once('Config.php');

/**
 * Created by PhpStorm.
 * User: Utente
 * Date: 14/07/2017
 * Time: 16:23
 */
class Mezzi extends Config
{
    protected $id;
    protected $capienza;
    protected $peso;
    protected $revisione;
    protected $tipo;
    protected $tipomezzo;

    /**
     * getCollection
     *
     * Process a query and return a selection of data.
     * @return array|boolean
     */
    public function getCollection()
    {   // connettermi al DB
        $connection = new Config();

        // ottenere le righe per questa classe
        $query = "SELECT * FROM mezzi";
        $result = mysqli_query($connection->getCon(), $query);
        $_returnValues = array();
        // cotrolla se ci sono rows
        if ($result && $result->num_rows > 0) {
            while ($response = mysqli_fetch_assoc($result)) {
                array_push($_returnValues, $response);
            }
            return $_returnValues;
        }
        return false;
    }

    /**
     * @return bool|mysqli_result
     */
    public function save()
    {
        // connettermi al DB
        $connection = new Config();

        try {
            $query = "INSERT INTO mezzi (capienza, peso, revisione, tipo, tipomezzo)" .
                "VALUES ('$this->capienza', '$this->peso', '$this->revisione', '$this->tipo', '$this->tipomezzo')";
            $result = mysqli_query($connection->getCon(), $query);

        } catch (Exception $e) {
            die('There was an error when saving an entity. Message: ' . $e);
        }
        return $result;
    }

    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function edit($id)
    {
        // connettermi al DB
        $connection = new Config();

        try {
            $query = "UPDATE mezzi 
                     SET `capienza`='$this->capienza',`peso`='$this->peso',`revisione`='$this->revisione',`tipo`='$this->tipo',`tipomezzo`='$this->tipomezzo'
                WHERE  `ID`='$id';";
            $result = mysqli_query($connection->getCon(), $query);
        } catch (Exception $e) {
            die('There was an error when edit an entity. Message: ' . $e);
        }
        return $result;

    }


    /**
     * @param $id
     * @return bool|mysqli_result
     */
    public function delete($id)
    {
        // connettermi al DB
        $connection = new Config();

        try {

            $query = "DELETE FROM mezzi WHERE ID='$id'";
            $result = mysqli_query($connection->getCon(), $query);

        } catch (Exception $e) {
            die('There was an error when delete an entity. Message: ' . $e);
        }
        return $result;
    }

    /**
     * @param $id
     * @return array|bool
     */
    public function load($id)
    {
        // connettermi al DB
        $connection = new Config();
        $query = "SELECT * FROM mezzi WHERE ID='$id'";
        $result = mysqli_query($connection->getCon(), $query);
        $_returnValues = array();
        // cotrolla se ci sono rows
        if ($result && $result->num_rows > 0) {
            while ($response = mysqli_fetch_assoc($result)) {
                array_push($_returnValues, $response);
            }
            return $_returnValues;
        }
        return false;

    }

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
    public function getCapienza()
    {
        return $this->capienza;
    }

    /**
     * @param mixed $capienza
     */
    public function setCapienza($capienza)
    {
        $this->capienza = $capienza;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @return mixed
     */
    public function getRevisione()
    {
        return $this->revisione;
    }

    /**
     * @param mixed $revisione
     */
    public function setRevisione($revisione)
    {
        $this->revisione = $revisione;
    }

    /**
     * @return array
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param array $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return mixed
     */
    public function getTipomezzo()
    {
        return $this->tipomezzo;
    }

    /**
     * @param mixed $tipomezzo
     */
    public function setTipomezzo($tipomezzo)
    {
        $this->tipomezzo = $tipomezzo;
    }


}