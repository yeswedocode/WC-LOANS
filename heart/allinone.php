<?php

include "db.php";

class crudOperation extends Database {

    public function insertUser($table,$fields) {

        if($_POST['password'] !== $pass2) {
            header("Location: addUser.php?msg=PasswordCheck");
            exit();
        }

        else {
            $sql = "";
            $sql .= "INSERT INTO ".$table;
            $sql .= "(".implode(",", array_keys($fields)).") VALUES ";
            $sql .= "('".implode("','", array_values($fields))."')";

            header("location: users.php?msg=success");
            exit();
        }
    }

}

$obj = new crudOperation;

if(isset($_POST['addUser'])) {
    $myArray = array(
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "password" => $_POST['password']
    );
    $pass2 = $_POST['repeat_password'];

$obj->insertUser("users",$myArray);

}

?>
