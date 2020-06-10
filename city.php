<?php
//session_start();

//include 'includes/connection.php';
include 'includes/header.php';
require 'includes/checklogin.php';
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/stylenew.css" type="text/css" />
<script language="JavaScript" src="includes/overlib.js"></script> 

<?php
//echo '<h1>Welcome - '.$currentuser.'</h1>';
echo '<h1>SaveFate is in early development.</h1>';


//$sql = mysqli_query($db, "SELECT * FROM player");
//$print_data = mysqli_fetch_row($sql);
//echo $print_data[0];

?>
<div class='MainTable'>
    
<?php include 'PItable.php';?>
    
    
</div>

    
    
    
<div class='navi_mid'><ul>
        
        

<?php
print "

<li> <a class='link0' href='overview.php'>Overview</a></li>
<li> <a class='link1' href='city.php'>Capital</a></li>
<li> <a class='link2' href='castle.php'>Castle</a></li>
<li> <a class='link3' href='tavern.php'>Tavern</a></li>
<li> <a class='link4' href='wizard.php'>The Wizard</a></li> 
<li> <a class='link5' href='inventory.php'>Inventory</a></li>

<li> <a class='link6' href='preferences.php'>Preferences</a></li>
<li> <a class='link7' href='preport.php'>Player Report</a></li>
<li> <a class='link8' href='helptutorial.php'>Help Tutorial</a></li>
<li> <a class='link9' href='gamerules.php'>Game Rules</a></li>
<li> <a class='link10' href='viewuser.php?u={$currentuser}'>My Profile</a></li>
<li> <a class='link11' href='logout.php'>Logout</a></li>

"
?>
</div>




    