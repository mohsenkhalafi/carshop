<?php
include_once('connection.php');

if(isset($_GET['ID']) && isset($_GET['link']))
{
	$query = mysql_query("UPDATE ads SET click=click+1 WHERE ID=".$_GET['ID'])
	or die(mysql_error());
	header("Location: http://".$_GET['link']);
	die();
}
else
	header("Location: index.php");
	die();
?>