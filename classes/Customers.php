<?php

class Customers
{

    public function __construct($dbh)
    {
        $this->db = $dbh;
    }

    public function getAll()
    {
        $sqlQuery = $this->db->prepare("SELECT * FROM Customers");
        $sqlQuery->execute();

        return $sqlQuery->fetchAll();
    }
}