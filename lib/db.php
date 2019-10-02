<?php

class Connection 
{

    // Credentials
    private $server = "mysql:host=localhost;dbname=jeancenter";
    private $user = "root";
    private $pass = "";

    // Opties
    public $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);

    // Connectie variabel
    protected $connection;

    public function OpenConnection() 
    {
        // Probeer verbinding te maken
        try
        {
            $this->Connection = new PDO($this->server, $this->user,$this->pass,$this->options);
            return $this->Connection;
        }catch (PDOException $e)
        {
            echo "Er is een probleem met de mysql verbinding: " . $e->getMessage();
        }
    }

    public function closeConnection() 
    {
        $this->Connection = null;
    }

}
?>