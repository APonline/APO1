<?php

class DatabaseConnection
{

    private $conn = null;

    function connectDB(){
        try {

            $this->conn = new PDO("mysql:host=208.97.173.114;dbname=burgerdex", "apanemia", "milkmilk1");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $e){

            $this->conn = null;

            die ("Major Error" . $e->getMessage());
        }

       return $this->conn;

    }

}
?>
