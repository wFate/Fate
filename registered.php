<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="includes/style.css">
</html>

<?php
//if user is already logged on, don't let them access this file
if (isset($_SESSION[id]))
{
    header("Location:city.php");
}

if (!isset($_POST['register-user']))
{
    header("Location:register.php");
}

if (!isset($_POST['terms']))
{
    header("refresh:2;url=register.php?error=readterms");
        echo "You must agree to the terms";
        exit();
}

if (isset($_POST['register-user']))
{
    
    //Creating connection for mysqli

    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "savefate";
    $conn = new mysqli($server, $user, $pass, $dbname);

    //Checking connection

    if($conn->connect_error){
     die("Connection failed:" . $conn->connect_error);
    }

    //$salt = uniqid(mt_rand(), true);
    //$iterations = 1000;
    //$securepassword = password_hash($playerpassword, PASSWORD_DEFAULT);
    //$securepassword = hash_pbkdf2("sha256", $playerpassword, $salt, $iterations, 17);
    $playerip = $_SERVER['REMOTE_ADDR'];

    $playerusername = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING));
    $playeremail = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    $playerpassword = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING)); 
    $confirm_password = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING)); 
    $playerclass = mysqli_real_escape_string($conn, filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING));

    //make sure user has successfull registration by checking errors
    if (empty($playerusername) || empty($playeremail) || empty($playerpassword) || empty($confirm_password))  
    {
        header("refresh:2;url=register.php?error=missingfields");
        echo "You must fill in all of the fields";
        exit();
    }
    elseif (!filter_var($playeremail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $playerusername))
    {
        header("refresh:2;url=register.php?error=invalid");
        echo "You must enter a valid username and email";
        exit();
    }
    elseif (!filter_var($playeremail, FILTER_VALIDATE_EMAIL))
    {
        header("refresh:2;url=register.php?error=invalidemail");
        echo "You must enter a valid email";
        exit();
    }
    elseif (!preg_match("/^[a-zA-Z0-9]*$/", $playerusername))
    {
        header("refresh:2;url=register.php?error=invalidusername");
        echo "You must enter a valid username";
        exit();
    }
    elseif ($playerpassword !== $confirm_password)
    {
        header("refresh:2;url=register.php?error=confirmpassword");
        echo "Your password does not match";
        exit();
    }
    elseif (strlen($playerpassword) < 4)
    {
        header("refresh:2;url=register.php?error=passwordlength");
        echo "Your password was not strong enough";
        exit();
    }
    elseif (strlen($playerusername) > 13)
    {
        header("refresh:2;url=register.php?error=usernamelength");
        echo "Your username was too long";
        exit();
    }

    else //start a prepared statement
    {
        $sql2 = "SELECT username, email FROM player WHERE username=? OR email=?";
        $stmt2 = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt2, $sql2))
        {
            header("Location:register.php?error=prepare");
            exit();
        }
        else 
        {
            mysqli_stmt_bind_param($stmt2, "ss", $playerusername, $playeremail);
            mysqli_stmt_execute($stmt2);
            mysqli_stmt_store_result($stmt2);
            $checkusername = mysqli_stmt_num_rows($stmt2);
            if ($checkusername > 0) //this is checking username AND email
            {
                header("refresh:2;url=register.php?error=usernametaken");
                echo "Sorry, that username is taken";
                exit();
            }
            else 
            {
                $IP = $_SERVER['REMOTE_ADDR'];
                $sql2 = "INSERT INTO player (username, email, password, class, lastip_signup) VALUES (?, ?, ?, ?, ?)";
                $stmt2 = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt2, $sql2))
                {
                    header("Location:register.php?error=here");
                    exit();
                }
                else 
                {
                    $securepassword = password_hash($playerpassword, PASSWORD_DEFAULT);
                    
                    mysqli_stmt_bind_param($stmt2, "sssss", $playerusername, $playeremail, $securepassword, $playerclass, $IP);
                    mysqli_stmt_execute($stmt2);
                    header("refresh:2;url=index.php");
                    echo "You have successfully registered an account!";
                    exit();
                }
            }
        }
    }  
}

$conn->close();
