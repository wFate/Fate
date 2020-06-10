<?php
//TODO: clean up code, make it look neat
include 'includes/header.php';
include "includes/checklogin.php";
?>

<!DOCTYPE html>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<div id="overDiv" style="position:absolute; visibility: hidden; z-index:1000;"></div>
<?php // I split up multiple sections of code into different nav files so that I could edit multiple pages at once?>
<?php include 'javamaps.php';?>
<table width="1500" height="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<?php include 'leftnav.php';?>
<?php include 'midnav.php';?>
<?php include 'rightnav.php';?> 
<td rowspan="3" width="255" style="background-image:url(imgs/darkspace2.jpg); background-repeat:no-repeat;"></td>
</tr>
<tr>
    <?php include 'midleftnav.php';?>
		<td rowspan="2" width="570"  valign="top">
<table width="570" border="0" background="imgs/darkspace2.jpg" cellpadding="0" cellspacing="0">
  <tr>
    <td>

<table width="570" height="650" border="0" style="background-image:url(); background-repeat:no-repeat;" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top" align="center">
    <div style="width:500px; font:Verdana;text-align: center; margin-left:0px;"><strong>
	<img src=''><img class="defavi" src='imgs/defaultavi1.png'><img src=''><img src=''><img src=''><img src=''><img src=''><img src=''></strong></div>
<table width="550" border="0" class="content">
  <tr>
    <td>
    <div id="td" class="overviewcontent">
<br />
<br />

<center>You can view your personal information here.<center><table width='300' height='312' border='0' align='center' cellpadding=0 cellspacing=0>
            <td valign="middle"><div class ="ovcenter" align="center"><a href="citadel">Citadel</a></div></td>
  <tr>
    <td valign=top><img style='z-index: 0;position: absolute;' src='images/playerpics/WarriorM.png' alt='' /><img style='z-index: 1;position: absolute;' src='images/playerpics/weapons/rusty-dagger-equipped.png' alt='' /><img style='z-index: 2;position: absolute;' src='images/playerpics/armor/padded-shirt-equipped.png' alt='' /><img style='z-index: 3;position: absolute;' src='images/playerpics/armor/headband-equipped.png' alt='' /><img style='z-index: 4;position: absolute;' src='images/costumes/spacer.gif' alt='' /><img style='z-index: 5;position: absolute;' src='images/playerpics/armor/woven-shield-equipped.png' alt='' /><img style='z-index: 6;position: absolute;' src='imgs/spacer.gif' alt='' /></td></tr></table><br><center><?php echo $userquote?></center><br><br><table width=100%>
	<tr><td class="thiscenter" width=50% valign=top>
	<b><u><font style="color:#8080ff;">Personal Stats<font style="color:white;"></b></u><br><b>Your IP:</b> <?php echo $iplogin?><br><b>Game ID:</b> <?php echo $userid?><br><b>Level:</b> <?php echo $level?><br><b>Experience:</b> <?php echo ceil(100*($exp/$maxexp))?>%<br><b>Health:</b> <?php echo $health?>/<?php echo $maxhealth?><br><b>Energy:</b> <?php echo $energy?>/<?php echo $maxenergy?><br><b>Age:</b> <?php echo $daysold?> Days<br><br><b><u><font style="color:#8080ff;">Battle Stats<font style="color:white;"></b></u><br><b>Record:</b> Default<br><b>Last Killed:</b> <a href=view.php?view=DEFAULT>Default</a><br><b>Last Killed By:</b> <a href=view.php?view=DEFAULT>Default</a><br><b>Class:</b> <?php echo $class?><br><b>AP:</b> 0 [<a href=ap.php>use</a>]<br><b>Reset Tokens:</b> 0 [<a href=rtokens.php>use</a>]<br><b>Dexterity:</b> <?php echo $dexterity?><br><b>Strength:</b> <?php echo $strength?><br><b>Faith:</b> <?php echo $faith?><br><b>Intelligence:</b> <?php echo $intelligence?><br><br><b><u><font style="color:#8080ff;">Member Information</b></u><font style="color:ivory;"><br><b>Status:</b> <?php echo $substatus //TODO: add this variable to db?><br><b>Subscription:</b> <?php echo $donatordays?> Days<br><br></td><td class="thatcenter" width=50% valign=top>
        <b><u><font style="color:#8080ff;">Public Information<font style="color:white;"></b></u><br><b>Rank:</b> <?php if($rank=="Admin"){echo "<a class='admin' href=adminmenu font-size: 13px;>[Admin]</a>";} else{echo $rank;}?> <font style="color:white"><br><b>Game visits:</b> <?php echo $gamevisits?><br><b>Email:</b> <?php echo $email?><br><b>Guild:</b> <?php echo $playerguild?><br><br><br><br><b><u><font style="color:#8080ff;">Currency<font style="color:white;"></b></u><br><b>Gold:</b> <?php echo $gold?><br><b>Bank:</b> <?php echo $bankgold?><br><b>Diamonds:</b> <?php echo $diamonds?><br><b>Sapphires:</b> <?php echo $sapphires?><br><b>Elements:</b> <?php echo $elements?><br><b>Opals:</b> <?php echo $opals?><br><b>Iron:</b> <?php echo $iron?><br><b>Cobalt:</b> <?php echo $cobalt?><br><br><br></td></tr></table></div></td>
  </tr>
</table>

    </td>
  </tr>
</table><img src=""></td>
  </tr>
</table>

        </td>
	</tr>
	<tr>
		<td valign="top" width="216" height="472" style="vertical-align:top;">
</td>
	</tr>
</table>

</body>
</html>