<?php
//if(!isset($_COOKIE["PHPSESSID"])){session_start();}
ini_set('session.gc_maxlifetime', 3600);
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

//if (isset($_REQUEST[session_name()])) {session_start();}
session_start();
$_SESSION['SESS'] = session_id();
$SESSID = $_SESSION['SESS'];

//$username = "iddqd_dev";
//$password = "Sterlings99";
//$dbname = "iddqd";
$username = "basearch_phil";
$password = "Sterlings99";
$dbname = "basearch_projectmanager";
$server = "localhost";
//$server = "93.84.119.240";
//$server = "h810380932.mysql";
$connectlink = mysqli_connect($server, $username, $password) OR DIE("Не могу создать соединение");
mysqli_select_db($connectlink, $dbname) or die(mysql_error());
mysqli_query($connectlink, "SET NAMES utf8");
?>