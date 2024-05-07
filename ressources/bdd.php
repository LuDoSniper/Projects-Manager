<?php

class BDD{
    private string $dsn = 'mysql:host=localhost;dbname=example;charsetutf8';
    private string $username = 'example';
    private string $password = 'example';
    private PDO $bdd;

    public function __construct(){
        $this->bdd = new PDO($this->dsn, $this->username, $this->password);
    }

    public function get_bdd(){
        return $this->bdd;
    }
}