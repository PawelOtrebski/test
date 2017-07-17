<?php
   
class Database{

    const DNS = 'sqlite:/test.db';    

    protected $host;
    protected $port;
    protected $db;
    protected $user;
    protected $password;

    private $pdo;

    protected $connected;

    protected $errorStack = [];

    public function __construct()
    {
        try{
            $pdo = new PDO(Database::DNS);
        }catch(PDOException $e){
            $this->pdo = null;
        }
    }
    
    public function getConnection()
    {
        return $this->pdo;
    }
       
}
