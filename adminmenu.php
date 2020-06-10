<!DOCTYPE html>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<?php
include 'includes/header.php';
include "includes/checklogin.php";

//you can't be on this page if you're not an admin
if($user_level <= 1)
{
    print("Player: Access Denied");
    header("Location:citadel.php");
    $h->endpage();
    exit;
}
?>

<body>

<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<?php include 'javamaps.php';?>
<table width="1500" height="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<?php include 'leftnav.php';?>
<?php include 'midnav.php';?>
<?php include 'rightnav.php';?>
<td rowspan="3" width="255" style="background-image:url(imgs/darkspace2.jpg); background-repeat:no-repeat;"></td>
</tr>
<tr>
    
    <?php include 'midleftnav.php';?>
    <?php include 'headernav.php';?>

<div class='navipart'><div class='navitop'><p><h2 class='h2'><strong>   Admin Online</strong></h2></p></div><div class='navi_mid'><ul>  
<div class='adminmhead'>

<?php
$sql1 = mysqli_query($db, "SELECT * FROM player where active=1 AND user_level>1 ORDER BY id ASC");
while ($playerdata = mysqli_fetch_array($sql1))
{
    echo "<font style='color:#e6e6ff;font-size: 24px;'>";
    print_r($playerdata[1]);
    echo "<font style='color:white;'>";
    print_r(" [".$playerdata[0]."]");
    echo nl2br("\n");
    echo nl2br("\n");
}
?>
</div>


    
<center><img src=><br>
<table class="content">
<tr><td width=150 valign=top>
<img src=><br>	
<p><h2><strong>General</strong></h2></p>
[<a href='admin.php?action=basicset'>Basic Settings</a>]<br>
[<a href=fishing>Fishing</a>] <br>
[<a href=farming>Farming</a>] <br>
[<a href=mining>Mining</a>]<br>
[<a href=praying>Praying</a>]<br>
[<a href=crafting>Crafting</a>] <br>        
[<a href=blacksmith>Blacksmith</a>]<br>
<br>

<?php

if($user_level==2)
{
print "

<li> <a class='link1' href='admin.php?action=basicset'>Basic Settings</a></li>
<li> <a class='link1' href='admin.php?action=announce'>Add Announcement</a></li>
<li> <a class='link1' href='admin.php?action=cmanual'>Manual Cron Jobs</a></li>

</div><div><img src='images/navi_btm.gif' alt='' /></div></div>  

";
}
if($user_level <= 3)
{
print "
<div class='navipart'>
<div class='navitop'>
<p><h2><strong>   Users</strong></h2></p>
</div>
<div class='navi_mid'><ul>
";
if($user_level==2)
{
print "  
<li> <a class='link1' href='admin_users.php?action=newuser'>Create New User</a></li>
<li> <a class='link1' href='admin_users.php?action=edituser'>Edit User</a></li>
<li> <a class='link1' href='admin_users.php?action=deluser'>Delete User</a></li>";
}
print "<li> <a class='link1' href='admin_users.php?action=invbeg'>View User Inventory</a></li>
<li> <a class='link1' href='admin_users.php?action=creditform'>Credit User</a></li>";
if($user_level==2)
{
print "<li> <a class='link1' href='admin_users.php?action=masscredit'>Mass Payment</a></li>
<li> <a class='link1' href='admin_users.php?action=forcelogout'>Force User Logout</a></li>";
}
print " 
<li> <a class='link1' href='admin_users.php?action=reportsview'>Player Reports</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div> 

";
print " 
<div class='navipart'><div class='navitop'><p><h2><strong>   Items</strong></h2></p></div><div class='navi_mid'><ul>
";
if($user_level==2)
{
print "<li> <a class='link1' href='admin_items.php?action=newitem'>Create New Item</a></li>";
}
if($user_level==2)
{
print "<li> <a class='link1' href='admin_items.php?action=edititem'>Edit Item</a></li>
<li> <a class='link1' href='admin_items.php?action=killitem'>Delete An Item</a></li>
<li> <a class='link1' href='admin_items.php?action=newitemtype'>Add Item Type</a></li>
";
}
print "<li> <a class='link1' href='admin_items.php?action=giveitem'>Give Item To User</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div> ";
}
print "
<div class='navipart'><div class='navitop'><p><h2><strong>   Logs</strong></h2></p></div><div class='navi_mid'><ul>
<li> <a class='link1' href='admin_logs.php?action=atklogs'>Attack Logs</a></li>
<li> <a class='link1' href='admin_logs.php?action=goldlogs'>Gold Xfer Logs</a></li>
<li> <a class='link1' href='admin_logs.php?action=opallogs'>Opal Xfer Logs</a></li>
<li> <a class='link1' href='admin_logs.php?action=banklogs'>Bank Xfer Logs</a></li>
<li> <a class='link1' href='admin_logs.php?action=itmlogs'>Item Xfer Logs</a></li>";
if($user_level == 2)
{
print "<li> <a class='link1' href='admin_logs.php?action=adminlogs'>Admin Logs</a></li>";
}
print " <li> <a class='link1' href='admin_logs.php?action=maillogs'>Mail Logs</a></li> 
</div><div><img src='images/navi_btm.gif' alt='' /></div></div> "; 

if($user_level <= 3)
{
print "

<div class='navipart'><div class='navitop'><p><h2><strong>   Guilds</strong></h2></p></div><div class='navi_mid'><ul>
<li> <a class='link1' href='admin_Guilds.php?action=grecord'>Guild Record</a></li>
<li> <a class='link1' href='admin_Guilds.php?action=gcredit'>Credit Guild</a></li>
<li> <a class='link1' href='admin_Guilds.php?action=gwar'>Manage Guild Wars</a></li>
<li> <a class='link1' href='admin_Guilds.php?action=gedit'>Edit Guild</a></li>
<li> <a class='link1' href='admin_Guilds.php?action=gedel'>Delete Guild</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div> ";
}
if($user_level==2)
{
print " 

<div class='navipart'><div class='navitop'><p><h2><strong>   Shops</strong></h2></p></div><div class='navi_mid'><ul>
<li> <a class='link1' href='admin_shops.php?action=newshop'>Create New Shop</a></li>
<li> <a class='link1' href='admin_shops.php?action=newstock'>Add Item To Shop</a></li>
<li> <a class='link1' href='admin_shops.php?action=delshop'>Delete Shop</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div> 
<div class='navipart'><div class='navitop'><p><h2><strong>   Polls</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_polls.php?action=spoll'>Start Poll</a></li>
<li> <a class='link1' href='admin_polls.php?action=endpoll'>End A Poll</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>   Jobs</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_jobs.php?action=newjob'>Make a new Job</a></li>
<li> <a class='link1' href='admin_jobs.php?action=jobedit'>Edit a Job</a></li>
<li> <a class='link1' href='admin_jobs.php?action=jobdele'>Delete a Job</a></li>
<li> <a class='link1' href='admin_jobs.php?action=newjobrank'>Make a new Job Rank</a></li>
<li> <a class='link1' href='admin_jobs.php?action=jobrankedit'>Edit a Job Rank</a></li>
<li> <a class='link1' href='admin_jobs.php?action=jobrankdele'>Delete a Job Rank</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>   Houses</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_houses.php?action=addhouse'>Add House</a></li>
<li> <a class='link1' href='admin_houses.php?action=edithouse'>Edit House</a></li>
<li> <a class='link1' href='admin_houses.php?action=delhouse'>Delete House</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>   Planets</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_planet.php?action=addcity'>Add Planet</a></li>
<li> <a class='link1' href='admin_planet.php?action=editcity'>Edit Planet</a></li>
<li> <a class='link1' href='admin_planet.php?action=delcity'>Delete Planet</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>   Forums</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_forums.php?action=addforum'>Add Forum</a></li>
<li> <a class='link1' href='admin_forums.php?action=editforum'>Edit Forum</a></li>
<li> <a class='link1' href='admin_forums.php?action=delforum'>Delete Forum</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>
<div class='navipart'><div class='navitop'><p><h2><strong>   Lessons</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_lessons.php?action=addcourse'>Add Course</a></li>
<li> <a class='link1' href='admin_lessons.php?action=editcourse'>Edit Course</a></li>
<li> <a class='link1' href='admin_lessons.php?action=delcourse'>Delete Course</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>



<div class='navipart'><div class='navitop'><p><h2><strong>   Battle Tent</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_battletent.php?action=addbot'>Add Challenge Bot</a></li>
<li> <a class='link1' href='admin_battletent.php?action=editbot'>Edit Challenge Bot</a></li>
<li> <a class='link1' href='admin_battletent.php?action=delbot'>Remove Challenge Bot</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>

<div class='navipart'><div class='navitop'><p><h2><strong>   Battle Ladder</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_ladder.php?act=CreateLadder'>Create Ladder</a></li>
<li> <a class='link1' href='admin_ladder.php?act=DeleteLadder'>Remove Ladder</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>

";
}
print "
<div class='navipart'><div class='navitop'><p><h2><strong>   Punishments</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_punit.php?action=mailform'>Mail Ban User</a></li>
<li> <a class='link1' href='admin_punit.php?action=unmailform'>Un-Mailban User</a></li>
<li> <a class='link1' href='admin_punit.php?action=forumform'>Forum Ban User</a></li>
<li> <a class='link1' href='admin_punit.php?action=unforumform'>Un-Forumban User</a></li>
<li> <a class='link1' href='admin_punit.php?action=fedform'>Jail User</a></li>
<li> <a class='link1' href='admin_punit.php?action=fedeform'>Edit Fedjail Sentence</a></li>
<li> <a class='link1' href='admin_punit.php?action=unfedform'>Unjail User</a></li>
<li> <a class='link1' href='admin_punit.php?action=ipform'>Ip Search</a></li>
</div><div><img src='images/navi_btm.gif' alt='' /></div></div>
";
if($user_level==2)
{
print "
<div class='navipart'><div class='navitop'><p><h2><strong>   Specials</strong></h2></p></div><div class='navi_mid'><ul>  
<li> <a class='link1' href='admin_special.php?action=editnews'>Edit Newspaper</a></li>
<li> <a class='link1' href='admin_special.php?action=massmailer'>Mass mailer</a></li>
<li> <a class='link1' href='admin_special.php?action=adminlist'>Admin List</a></li>
<li> <a class='link1' href='admin_special.php?action=userlevelform'>Adjust User Level</a></li>
<li> <a class='link1' href='admin_special.php?action=givesub'>Give User Subscription</a></li>";
}


?>