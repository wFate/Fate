<?php
require 'includes/connection.php';
include 'includes/header.php';
require 'includes/checklogin.php';

if (!isset($_SESSION[id]))
{
    header("Location:../index.php?loginsilly");
}

if (isset($_SESSION[id]))
{
    $sql = mysqli_query($db, "SELECT * FROM player where id = ($_SESSION[id]) ");
    $playerdata = mysqli_fetch_row($sql);
    $active = $db->query("UPDATE player SET active=0 WHERE id={$_SESSION[id]}");
    header("Location:includes/loggingout.php");
}
