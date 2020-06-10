<?php
//include 'includes/connection.php';
include 'includes/header.php';
include 'includes/checklogin.php';
?>
<link rel="stylesheet" type="text/css" href="css/stylenew.css">
<?php
 
if ($class == "Mage" && $rank != "Admin")
{
    echo "You have chosen to be a Grand Mage. Here is an Intelligence boost!";
    $intelligence = $db->query("UPDATE player SET intelligence=intelligence+10 WHERE id={$_SESSION['id']}");
}

elseif ($class == "Warrior")
{
    echo "A mighty Warrior has joined our ranks! Here is a Strength boost!";
    $strength = $db->query("UPDATE player SET strength=strength+10 WHERE id={$_SESSION['id']}");
}

elseif ($class == "Ranger")
{
    echo "You are a cunning Ranger, use this Dexterity to your advantage!";
    $dexterity = $db->query("UPDATE player SET dexterity=dexterity+10 WHERE id={$_SESSION['id']}");
    
}

elseif ($rank == "Admin")
{
    echo "Hi boss! Enjoy all of these bonus stats! ~*\n";
    //echo "If you are active, there will be a 1. If not, there will be a 0 : ".$active;
    //$active = $db->query("UPDATE player SET active=0 WHERE id={$_SESSION['id']}");

    $strength = $db->query("UPDATE player SET strength=strength+10 WHERE id={$_SESSION['id']}");

    $dexterity = $db->query("UPDATE player SET dexterity=dexterity+10 WHERE id={$_SESSION['id']}");

    $intelligence = $db->query("UPDATE player SET intelligence=intelligence+100 WHERE id={$_SESSION['id']}");
    
    $armor = $db->query("UPDATE player SET armor=armor+10 WHERE id={$_SESSION['id']}");
    
    $faith = $db->query("UPDATE player SET faith=faith+10 WHERE id={$_SESSION['id']}");

    $maxhealth = $db->query("UPDATE player SET maxhealth=maxhealth+1000 WHERE id={$_SESSION['id']}");
    
    $maxenergy = $db->query("UPDATE player SET maxenergy=maxenergy+10 WHERE id={$_SESSION['id']}");
    
    $maxability = $db->query("UPDATE player SET maxability=maxability+10 WHERE id={$_SESSION['id']}");
    
    $elements = $db->query("UPDATE player SET elements=elements+10 WHERE id={$_SESSION['id']}");
    
    $exp = $db->query("UPDATE player SET exp=maxexp WHERE id={$_SESSION['id']}");
    
}

else
{
    echo "An error has occured! Blame Caleb!!!";
}

header("refresh:2;url=citadel");
exit();
?>