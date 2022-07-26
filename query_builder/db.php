<?php

include_once __DIR__.'/dbconnect.php';
class DB {

    protected $db;
    public function __construct()
    {
        global $conn;
        $this->db = $conn;
    }
    public function getConnection()
    {
        return $this->db;
    }
}
$db = new DB();