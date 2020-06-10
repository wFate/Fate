<?php
include "includes/connection.php";
include 'includes/header.php';
include "includes/checklogin.php";
?>

<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
<LINK rel='STYLESHEET' href='css/style.css' Type='text/css'>
</head>
<body>

<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div><?php include 'javamaps.php';?>
<table width="1500" height="1000" border="0" align="center" cellpadding="0" cellspacing="0" id="Table_01">
<?php include 'leftnav.php';?>
<?php include 'midnav.php';?>
<?php include 'rightnav.php';?>
<td rowspan="3" width="255" style="background-image:url(imgs/darkspace2.jpg); background-repeat:no-repeat;"></td>
</tr>
<tr>
    <?php include 'midleftnav.php';?>
    <?php include'headernav.php';?>
    </div>
<body>
    <header class="ponlinehead"> <b><font style="color:yellowgreen">Players online</b> </header>
<?php 
echo nl2br("\n");
echo nl2br("\n");
?>
<div class="poheadcontent">
<?php
$sql1 = mysqli_query($db, "SELECT * FROM player where active=1 ORDER BY last_login DESC");
while ($playerdata = mysqli_fetch_array($sql1))
{
    echo "<font style='color:#ff3300'>";
    print_r($playerdata[1]);
    echo "<font style='color:white'>";
    print_r(" [".$playerdata[0]."]");
    echo nl2br("\n");
    echo nl2br("\n");
}?>
</div>
</body>