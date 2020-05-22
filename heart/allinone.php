<?php

class addNewUser() {

    if(isset($_POST['addUser'])) {

        private $dbconn = mysqli_connect('localhost','root','','wc');
        private $name = $_POST['uid'];
        private $email = $_POST['email'];
        private $pass1 = $_POST['password'];
        private $pass2 = $_POST['repeat_password'];

        if(checkUserExists()) {
            header("Location: users.php?msg=UserExists");
            exit();
        }

        else {

            if(pass1 !== pass2) {
                header("Location: users.php?msg=PasswordMatch");
                exit();
            }

            else {
                private $sql = "INSERT INTO users(name,email,password) VALUES(?,?,?)";
                private $stmt = mysqli_stmt_init($dbconn);
                if(!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: users.php?msg=sqlerror");
                    exit();
                }

                else {
                    $hashed_pass = password_hash($pass1, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $name,$email,$hashed_pass);
                    mysqli_stmt_execute($stmt);
                    header("Location: users.php?msg=success");
                    exit();

                }
            }
        }
    }



//User Defined Function

public function checkUserExists() {

    private $dbconn = mysqli_connect("localhost","root","","wc");

    $sql = "SELECT * FROM users WHERE email=?";
    $stmt = mysqli_stmt_init($dbconn);
    if(!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: users.php?msg=sqlerror");
        exit();
    }
    else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $userRows = mysqli_stmt_num_rows($stmt);

        if($userRows >= 1) {
            return true;
        }
        else {
            return false;
        }

    }

}

}

?>
