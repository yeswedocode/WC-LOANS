<?php

class Database {

    private $connection;
    private $server = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "wc";

    public function __construct() {

        $this->connection = mysqli_connect($this->server,$this->user,$this->pass,$this->dbname);
        if(!$this->connection) {
            header("Location: addUser.php?msg=sqlerror");
            exit();
        }
    }
}

$obj = new Database;

?>
