<?php 
include 'includes/header.php';
include 'includes/checklogin.php';
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
<LINK rel='STYLESHEET' href='css/style.css' Type='text/css'>
</head>
<body>

<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<?php include 'javamaps.php';?>
<table width="1200" height="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<?php include 'leftnav.php';?>
<?php include 'midnav.php';?>
<?php include 'rightnav.php';?>
<td rowspan="3" width="255" style="background-image:url(imgs/darkspace2.jpg); background-repeat:no-repeat;"></td>
</tr>
<tr>
    
    <?php include 'midleftnav.php';?>
    <?php include 'headernav.php';?>

<table>
<tr><td width=150 valign=top>
        <img src=><br>	
	[<a href=lessons>Lessons</a>]<br>
        [<a href=fishing>Fishing</a>] <br>
	[<a href=farming>Farming</a>] <br>
        [<a href=mining>Mining</a>]<br>
	[<a href=praying>Praying</a>]<br>
	[<a href=crafting>Crafting</a>] <br>        
	[<a href=blacksmith>Blacksmith</a>]<br>
	<br>
</td><td width=150 valign=top style="padding-top: 23px;">
	<!--<img src= width="120" height="22"><br> -->
	[<a href=stafflist>Staff List</a>]<br>
	[<a href=guardian>Guardian</a>]<br>
	[<a href=oni>Oni</a>]<br>
	[<a href=fate>Fate</a>]<br>
	[<a href=nocturne>Nocturne</a>]<br>
	[<a href=blessedfountain>Blessed Fountain</a>]<br>
        [<a href=search>Player Search</a>]<br>
	
	<br>
</td><td width=120 valign=top>
	<img src=><br>
        [<a href=subscribe>Subscriptions</a>]<br>
	[<a href=spalace>Sapphires Palace</a>]<br />
	[<a href=opalmountains>Opal Mountains</a>]<br>
        [<a href=sapsmine>Sapphires Mines</a>] <br>
	[<a href=sapscraft>Sapster</a>]<br>
	[<a href=eleswiz>Eleswiz</a>]<br>
	[<a href=highskills>Higher Learning</a>]<br />
	<br>
</td></tr>
<tr><td width=150 valign=top>
	<img src=><br>
	[<a href=weaponshop>Weapons</a>] <br>
	[<a href=shieldshop>Shields</a>]<br>
 	[<a href=helmetshop>Helmets</a>]<br>
	[<a href=armorshop>Armor</a>]<br>
        [<a href=beltshop>Belts</a>] <br>
        [<a href=bootshop>Boots</a>]<br>
	[<a href=ringshop>Rings</a>]<br>
	[<a href=icecream>Ice Cream</a>]<br>
	<br>
</td><td width=150 valign=top>
	<img src=><br>	
	[<a href=guilds>Guilds</a>]<br>
        [<a href=battlefield>Battlefield</a>]<br>
        [<a href=hitlist>Hitlist</a>]<br>
	[<a href=gameinfo>Fates Hub</a>]<br>
	[<a href=walloffame>Wall of Fame</a>]<br>
	[<a href=mail>Mail</a>]<br>
	[<a href=memberlist>Member List</a>]<br>
	[<a href=jail>Banned Players</a>]<br>
	<br>
</td><td width=120 valign=top>
	<img src=><br />
        [<a href=arena>Arena</a>]<br>
	[<a href=hightower>High Tower</a>] <br>
	[<a href=deeplevel>Deep Level</a>]<br />
	[<a href=oldgreg>Old Gregory</a>]<br>
	[<a href=wisetree>Wise Tree</a>]<br>
	[<a href=unknown>The Unknown</a>]<br>
        [<a href=honeymoon>Honeymoon</a>]<br>
        [<a href=friend>Friends</a>]<br>
    <br>
	<br>
</td></tr>
<tr><td width=150 valign=top>
	<img src=><br>
	[<a href=market>The Market</a>]<br>
	[<a href=club>The Club</a>] <br>
        [<a href=polls>Polls & Feedback</a>]<br>	
        [<a href=news>Recent Updates</a>]<br>
	[<a href=refshop>Referral Shop</a>]<br>
	[<a href=referrals>Referral Help</a>]<br>
	[<a href=gsubby>Gift Subscription</a>]<br>
	<br>
</td><td width=150 valign=top>
	<img src=><br>
	[<a href=auction>Auctions</a>]<br>
	[<a href=trades>Player Trade</a>]<br>
	[<a href=itemsmarket>Items Market</a>]<br>
	[<a href=omarket>Ore Market</a>]<br>
        [<a href=diasmarket>Diamonds Market</a>]<br>
        [<a href=sapsmarket>Sapphires Market</a>]<br>
        [<a href=elesmarket>Elements Market</a>]<br>
        [<a href=opalsmarket>Opals Market</a>]<br>
	<br>
</td><td width=120 valign=top>
	<img src=><br>
        [<b><a href=quests>Quests</a></b>]<br>
        [<a href=workers>Workers</a>]<br>
	[<a href=angels>Angels</a>]<br>
        [<a href=elders>Elders</a>]<br>
	[<a href=dawnbridge>Dark Alley</a>]<br>
        [<a href=dfortress>Psychic</a>]<br>
	[<a href=castle>Castle</a>]<br>
	[<a href=guardiansway>Guardians Way</a>]<br>
	<br>
</td></tr></tr>
</table>
<?php 
if ($user_level>1){
	echo "<a class='admin' href=adminmenu style=position:relative;right:264px;bottom:617px;font-size: 13px;>[Admin]</a>";
}
?>
</div></td>
  </tr>
</table>

    </td>
  </tr>
</table><img src=""><a class ="ponline" href=playersonline>Players Online: <font style="color:white"><?php echo $playersonline?></a></td>
  </tr>
</table>

        </td>
	</tr>
	<tr>
		<td valign="top" width="216" height="472" style="vertical-align:top;"></td>
	</tr>
</table>
</body>
</html>