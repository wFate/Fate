<?php
//session_start();
//include 'includes/connection.php';
//include 'includes/header.php';

//if user is already logged in, they dont need to be able to access this page
if (isset($_SESSION[id]))
{
    header("Location:city.php");
}

if (! empty(filter_input(INPUT_POST, 'player'))) 
{  
    $playerusername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $playeremail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $playerpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $confirm_password = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
    $playerclass = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
}
?>

<!DOCTYPE HTML>

<html>
<head>
<title>Register Account</title>

<?php
if (isset($_GET['error']))
{
    if ($_GET['error'] == "missingfields")
    {
        echo '<p class="signuperror">Fill in all the fields!</p>';
    }
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<link href="includes/style.css" rel="stylesheet" type="text/css" />
<link href="includes/regstyle1.css" rel="stylesheet" type="text/css" />
<link rel="icon" type="image/png" href="/imgs/icon2.png" sizes="32x32" />
</head>
<body>
     <!-- Side navigation -->
<div class="sidenav">
  <a href="index">Home</a>
  <a href="about">About</a>
  <a href="contact">Contact</a>
  <a href="developments">Updates</a>
</div>

<!-- Page content -->
<div class="main">
  ...
</div> 
    
    
    
    <form name="frmRegistration" method="post" action="registered.php">
        <div class="demo-table"> 
        <div class="form-head">Registration</div>
            
            <div class="field-column">
                <label>Username</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="username">
                </div>
            </div>
            
            <div class="field-column">
                <label>Email</label>
                <div>
                    <input type="text" class="demo-input-box"
                        name="email">
                </div>
            </div>
        
            <div class="field-column">
                <label>Password</label>
                <div><input type="password" class="demo-input-box"
                    name="password" value=""></div>
            </div>
        
            <div class="field-column">
                <label>Confirm Password</label>
                <div>
                    <input type="password" class="demo-input-box"
                        name="confirm_password" value="">
                </div>
            </div>
        
            <div class="field-class">
                <label for="playerclass"></label>
                <select id ="class" name="class" class="playerClass">
                    
                    <option value = "Warrior">Warrior</option>
                    <option value = "Ranger">Ranger</option>
                    <option value = "Mage">Magician</option>
                </select>
            </div>
        
            <div class="field-column">
                <div class="terms">
                    <input class="chkbox" type="checkbox" name="terms">
                    I accept the following <a target = "_blank" href = "rules.php">terms of service</a>.
                </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>  
            </div>
        
        </div>
    </form>
    
</body>
</html>
