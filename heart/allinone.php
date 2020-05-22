<?php

include "db.php";

if(isset($_POST['addUser']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass1 = $_POST['password'];
    $pass2 = $_POST['repeat_password'];

    $checkUserSql = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($dbconn,$checkUserSql);
    $userRows = mysqli_num_rows($res);

    if($userRows > 0)
    {
        header("Location: addUser.php?msg=UserExist");
        exit();
    }

    else
    {
        if($pass1 !== $pass2)
        {
            header("Location: addUser.php?msg=PasswordCheck");
            exit();
        }
        else
        {
            $hashed_pass = password_hash($pass1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$hashed_pass')";
            $res = mysqli_query($dbconn,$res);

            header("Location: users.php?msg=success");
            exit();
        }
    }
}

?>
