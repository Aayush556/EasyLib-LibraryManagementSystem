<?php
class database
{
    protected $connection;

    function setconnection()
    {
        try {
            $this->connection = new PDO("mysql:host=localhost; dbname=liblibrary_management_system", "root", "");
            // echo "Connection Done";
        } catch (PDOException $e) {
            echo "Error";
        }
        //     //die();
    }
}
