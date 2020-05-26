<?php

include "db.php";

///////////////////////////////// USER SCRIPTS //////////////////////////////////////////

//INSERT USER

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
        else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $pass1))
        {

            header("Location: addUser.php?msg=passwordRequirement");
            exit();
        }
        else
        {
            $hashed_pass = password_hash($pass1, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(name,email,password) VALUES('$name','$email','$hashed_pass')";
            $res = mysqli_query($dbconn,$sql);

            header("Location: users.php?msg=success");
            exit();
        }
    }
}


//READ USER DATA

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id='$id'";
    $res = mysqli_query($dbconn,$sql);

    while($row = mysqli_fetch_array($res))
    {
        $id         = $row['id'];
        $name       = $row['name'];
        $email      = $row['email'];
        $password   = $row['password'];
    }

}

//UPDATE USER DATA

if(isset($_POST['updateUser']))
{
    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $updateUserQuery = "UPDATE users SET name='$name',email='$email',password='$password' WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$updateUserQuery);

    header("Location: users.php?msg=updateUser");
    exit();
}

//DELETE USER DATA

if(isset($_GET['delete_id']))
{
    $id = $_GET['delete_id'];
    $userDeleteQuery = "DELETE FROM users WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$userDeleteQuery);

    header("Location: ../users.php?msg=deleteUser");
    exit();
}


//////////////////////////////////// END OF USER SCRIPT ///////////////////////////////////////////////////////////








/////////////////////////////////// MEMBER SCRIPTS  ///////////////////////////////////////////////////////////////



//CREATE MEMBER

if(isset($_POST['addMember']))
{
    $memberId       = strtoupper($_POST['id']);
    $memberName     = strtoupper($_POST['name']);
    $memberPhone    = $_POST['phone'];
    $memberAddress  = strtoupper($_POST['address']);

    $checkMemberSql = "SELECT * FROM member_tbl WHERE id='$memberId'";
    $resultQuery = mysqli_query($dbconn,$checkMemberSql);
    $memberRows = mysqli_num_rows($resultQuery);

    if($memberRows > 0)
    {
        header("Location: addMember.php?msg=memberExist");
        exit();
    }


    else
    {
         $checkPhoneSql = "SELECT * FROM member_tbl WHERE phone='$memberPhone'";
         $resultQuery = mysqli_query($dbconn,$checkPhoneSql);
         $phoneRows = mysqli_num_rows($resultQuery);

        if($phoneRows > 0)
        {

            header("Location: addMember.php?msg=phoneNumberExist");
            exit();
        }
        else
        {
             $insertMemberQuery = "INSERT INTO member_tbl(id,name,phone,address) VALUES('$memberId','$memberName','$memberPhone','$memberAddress')";
             $resultQuery = mysqli_query($dbconn,$insertMemberQuery);

             header("Location: member.php?msg=success");
             exit();
        }

    }

}


//READ MEMBER DATA

if(isset($_GET['member_id']))
{
    $id = $_GET['member_id'];
    $selectMemberQuery = "SELECT * FROM member_tbl WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$selectMemberQuery);

    while($row=mysqli_fetch_array($resultQuery))
    {
        $memberId       = $row['id'];
        $memberName     = $row['name'];
        $memberPhone    = $row['phone'];
        $memberAddress  = $row['address'];

    }

}


//UPDATE MEMBER DATA

if(isset($_POST['updateMember']))
{

    $memberId       = $_POST['id'];
    $memberName     = $_POST['name'];
    $memberPhone    = $_POST['phone'];
    $memberAddress  = $_POST['address'];

    $updateMemberQuery = "UPDATE member_tbl SET name='$memberName,phone='$memberPhone',address='$memberAddress' WHERE id='$memberId'";
    $resultQuery = mysqli_query($dbconn,$updateMemberQuery);

    header("Location: member.php?msg=updateMember");
    exit();
}


//DELETE MEMBER DATA

if(isset($_GET['delete_member']))
{
    $memberId = $_GET['delete_member'];
    $deleteMemberQuery = "DELETE FROM member_tbl WHERE id='$memberId'";
    $resultQuery = mysqli_query($dbconn,$deleteMemberQuery);

    header("Location: ../member.php?msg=deleteMember");
    exit();
}

/////////////////////////////////// END OF MEMBER SCRIPTS  ////////////////////////////////////////////////////////





//////////////////////////////////// APPLICATION INFORMATION DETAILS  ///////////////////////////////////////////////////

if(isset($_POST['addInfo']))
{
    $id         = $_POST['id'];
    $name       = $_POST['name'];
    $phone      = $_POST['phone'];
    $region     = $_POST['region'];
    $city       = $_POST['city'];
    $business_name = $_POST['business_name'];
    $dependant   = $_POST['dependant'];
    $loan_amount = $_POST['loan_amount'];
    $description = $_POST['description'];
    $gname = $_POST['gname'];
    $grelation = $_POST['grelation'];
    $gphone = $_POST['gphone'];
    $gaddress = $_POST['gaddress'];
    $status = "pending";


    $checkMemberExist = "SELECT * FROM personal_info_tbl WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$checkMemberExist);
    $memberRows = mysqli_num_rows($resultQuery);

    if($memberRows > 0)
    {
        header("Location: addInfo.php?msg=memberExists");
        exit();
    }

    else
    {
        $checkMemberExist = "SELECT * FROM member_tbl WHERE id='$id'";
        $resultQuery = mysqli_query($dbconn,$checkMemberExist);

        while($row=mysqli_fetch_array($resultQuery))
        {
            $nameData = $row['name'];
            $phoneData = $row['phone'];
        }

        if($name != $nameData)
        {
            header("Location: addInfo.php?msg=checkName");
            exit();
        }

        else if($phone != $phoneData)
        {
            header("Location: addInfo.php?msg=checkPhone");
            exit();
        }
        else
        {
            $createMemberQuery = "INSERT INTO personal_info_tbl(id,name,phone,region,city,business_name,dependant,loan_amount,description,gname,grelation,gphone,gaddress,status) VALUES('$id','$name','$phone','$region','$city','$business_name','$dependant','$loan_amount','$description','$gname','$grelation','$gphone','$gaddress','$status')";
            $resultQuery = mysqli_query($dbconn,$createMemberQuery);

            $toRequest = "INSERT INTO request_tbl(id,amount) VALUES('$id','$loan_amount')";
            $resultQuery = mysqli_query($dbconn,$toRequest);

            header("Location: addInfo.php?msg=doneWithPersonalInfo");
            exit();
                }
    }
}


/////////////////////// END OF PERSONAL INFORMATION SCRIPTS  ///////////////////////////////////////





//////////////////////        CHANGE PASSWORD FOR USER       /////////////////////////////////////////////

if(isset($_POST['changePassword']))
{
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $repeatPassword = $_POST['repeatPassword'];

    $selectPassword = "SELECT * FROM users";
    $resultQuery = mysqli_query($dbconn,$selectPassword);

    while($row=mysqli_fetch_array($resultQuery))
    {
        $name = $row['name'];
        $password = $row['password'];
    }

    if($currentPassword != $password)
    {
        header("Location: editUser.php?msg=currentPassword");
        exit();
    }
    else if($newPassword != $repeatPassword)
    {
         header("Location: editUser.php?msg=passwordMatch");
         exit();
    }
    else if($newPassword == $repeatPassword && $newPassword == $currentPassword)
    {
         header("Location: editUser.php?msg=newPasswordExist");
         exit();
    }
             else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $newPassword))
             {
                 header("Location: editUser.php?msg=passwordRequirement");
                 exit();
             }

             else
             {
                 $hashPassword = password_hash($newPassword,PASSWORD_DEFAULT);
                 $updatePasswordQuery = "UPDATE users SET password = $hashPassword";
                 $resultQuery = mysqli_query($dbconn,$updatePasswordQuery);

                 header("Location: users.php?msg=passwordSuccess");
                 exit();
             }

}



?>
