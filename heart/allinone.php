<?php

include "db.php";

/////////////// LOGIN SCRIPTS ////////////////////////////////////////////////////////


if(isset($_POST['signIn']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $selectQuery = "SELECT * FROM users WHERE name=?";
    $stmt = mysqli_stmt_init($dbconn);

    if($stmt)
    {
        echo "we are good";
    }

    if(!mysqli_stmt_prepare($stmt,$selectQuery))
    {
        header("Location: login.php?msg=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $resultQuery = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultQuery))
        {
            $password_check = password_verify($password,$row['password']);

            if($password_check == false)
            {
                header("Location: login.php?msg=wrongPassword");
                exit();
            }
            else if($password_check == true)
            {
                $_SESSION['name'] = $row['name'];

                header("Location: index.php?msg=loginSuccess");
                exit();
            }
        }
    }
}









///////////////////////////////// USER SCRIPTS //////////////////////////////////////////

//INSERT USER

if(isset($_POST['addUser']))
{
    $name = strtoupper($_POST['name']);
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
        $id         = strtoupper($row['id']);
        $name       = strtoupper($row['name']);
        $email      = strtoupper($row['email']);
        $password   = strtoupper($row['password']);
    }

}

//UPDATE USER DATA

if(isset($_POST['updateUser']))
{
    $id         = strtoupper($_POST['id']);
    $name       = strtoupper($_POST['name']);
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
        $memberId       = strtoupper($row['id']);
        $memberName     = strtoupper($row['name']);
        $memberPhone    = strtoupper($row['phone']);
        $memberAddress  = strtoupper($row['address']);

    }

}


//UPDATE MEMBER DATA

if(isset($_POST['updateMember']))
{

    $memberId       = strtoupper($_POST['id']);
    $memberName     = strtoupper($_POST['name']);
    $memberPhone    = strtoupper($_POST['phone']);
    $memberAddress  = strtoupper($_POST['address']);

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
    $id         = strtoupper($_POST['id']);
    $name       = strtoupper($_POST['name']);
    $phone      = strtoupper($_POST['phone']);
    $region     = strtoupper($_POST['region']);
    $city       = strtoupper($_POST['city']);
    $business_name = strtoupper($_POST['business_name']);
    $dependant   = strtoupper($_POST['dependant']);
    $loan_amount = strtoupper($_POST['loan_amount']);
    $description = strtoupper($_POST['description']);
    $gname = strtoupper($_POST['gname']);
    $grelation = strtoupper($_POST['grelation']);
    $gphone = strtoupper($_POST['gphone']);
    $gaddress = strtoupper($_POST['gaddress']);
    $status = strtoupper("pending");
    $approve_name = strtoupper("null");
    $approve_phone = strtoupper("null");
    $date = date("d-m-Y");


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
            $nameData = strtoupper($row['name']);
            $phoneData = strtoupper($row['phone']);
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
            $createMemberQuery = "INSERT INTO personal_info_tbl(id,name,phone,region,city,business_name,dependant,loan_amount,description,gname,grelation,gphone,gaddress,status,approve_name,approve_phone) VALUES('$id','$name','$phone','$region','$city','$business_name','$dependant','$loan_amount','$description','$gname','$grelation','$gphone','$gaddress','$status','$approve_name','$approve_phone')";
            $resultQuery = mysqli_query($dbconn,$createMemberQuery);

            $toRequest = "INSERT INTO request_tbl(id,amount,date) VALUES('$id','$loan_amount','$date')";
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

//////////////////////// END CHANGE PASSWORD SCRIPTS   /////////////////////////////////////////////////////////


if(isset($_GET['pending_id']))
{
    $id = $_GET['pending_id'];
    $selectQuery = "SELECT * FROM personal_info_tbl WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$selectQuery);

    while($row=mysqli_fetch_array($resultQuery))
    {
        $id                 = strtoupper($row['id']);
        $name               = strtoupper($row['name']);
        $phone              = strtoupper($row['phone']);
        $region             = strtoupper($row['region']);
        $city               = strtoupper($row['city']);
        $business_name      = strtoupper($row['business_name']);
        $dependant          = strtoupper($row['dependant']);
        $loan_amount        = strtoupper($row['loan_amount']);
        $description        = strtoupper($row['description']);
        $gname              = strtoupper($row['gname']);
        $grelation          = strtoupper($row['grelation']);
        $gphone             = strtoupper($row['gphone']);
        $gaddress           = strtoupper($row['gaddress']);
    }
}

if(isset($_POST['Loan']))
{
    $id         = $_POST['id'];
    $approve_name = strtoupper($_POST['approve_name']);
    $approve_phone = $_POST['approve_phone'];
    $status = $_POST['status'];
    $date = date("d-m-Y");


    $updateQuery = "UPDATE personal_info_tbl SET status='$status',approve_name='$approve_name', approve_phone='$approve_phone', date='$date' WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$updateQuery);

    $deleteQuery = "DELETE FROM request_tbl WHERE id='$id'";
    $resultQuery = mysqli_query($dbconn,$sql);

    header("Location: index.php?msg=newLoan");
    exit();

}


if(isset($_POST['addTransaction']))
{
    $name = strtoupper($_POST['name']);
    $amount = $_POST['amount'];
    $type = strtoupper($_POST['type']);
    $date = date("d-m-Y");

    $insertQuery = "INSERT INTO wallet(name,amount,type,date) VALUES('$name','$amount','$type','$date')";
    $resultQuery = mysqli_query($dbconn,$insertQuery);

    header("Location: wallet.php?msg=paymentAddedSuccess");
    exit();

}

?>
