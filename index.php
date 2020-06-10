<?php
include 'includes/header.php';
include 'includes/connection.php';

if (!empty(filter_input(INPUT_POST, 'player'))) {
    $playerusername = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $playeremail = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $playerpassword = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $playerclass = filter_input(INPUT_POST, 'class', FILTER_SANITIZE_STRING);
}
?>
<link rel="stylesheet" type="text/css" href="includes/style.css">
<body>
    <div id="main">
        <div id="header">
            <div class="login-container">            
                <form method="post" action="includes/authenticate.php">
                <input type="text" class="username" placeholder="Username" name="username">
                <input type="password" class="password" placeholder="Password" name="password">
                <button type="submit" name="loginbtn" class="loginbtn" >Login</button>
                
                <div class="forgot_txt"><a href="forgot">Forgot Password</a></div>
                </form>
            </div>  <!-- LOGIN-CONTAINER -->

            <div class="linkbar">
                <a class="active" href="index">Home</a>
                <a class="reg_link" href="register">Register</a>
                <a class="about_link" href="about">About</a>
                <a class="contact_link" href="contact">Contact</a>
            </div>  <!-- LINKBAR -->

            <div id="base">
                <h1 class="header1">SaveFate</h1>
                <p class ="p1">IN EARLY dddd DEVELOPMENT</p>
                <p class ="p2">Expected release data: October 12th, 2020</p>
                
                
                <?php
                if (isset($_SESSION[id]))
                {
                    header("Location:citadel");
                    echo '<p class = "login-status">YOU ARE CURRENTLY LOGGED IN</p>';
                }
                else 
                {
                    //echo '<p class = "login-status">Feel free to register an account in advance and secure a unique Username!</p>'; 
                }
                ?>
                   
            </div> <!-- BASE -->
        </div>  <!-- HEADER -->
    </div>  <!-- MAIN -->
</body> <!-- BODY -->
        
<?php    
include 'includes/footer.php';