<?php

namespace bzshop\Data;
use PDO;
use PDOException;

class Database
{
    public $objetoPDO = null;
    public $user = "root";
    public $password = "";
    public $dbname = "ejemplo_1";

    public function __construct(string $dbname, string $user, string $password)
    {
        $this->dbname = $dbname;
        $this->user = $user;
        $this->passoword = $password;
    }

    public function getPDO()
    {
        try
        {   
            $host = "mysql:host=localhost;dbname=$this->dbname";
            $objetoPDO = new PDO($host,$this->user,$this->password);
            return $objetoPDO;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }

    public function desconectarDB()
    {
        $objetoPDO = null;
    }

}

?>