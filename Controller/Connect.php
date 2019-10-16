<?php


class Connect extends PDO
{
    private $dsn;
    private $username;
    private $passwd;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=rh;';
        $this->username = 'root';
        $this->passwd = 'R00t';
        parent::__construct($this->dsn, $this->username, $this->passwd);

    }
}