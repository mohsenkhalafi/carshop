<?php 
include_once('connection.php');

$name='بی نام';
$email='email';
$tell='null';
$message='پیغام';

if(isset($_GET['name']))
	$name=$_GET['name'];
if(isset($_GET['email']))
	$email=$_GET['email'];
if(isset($_GET['tell']))
	$tell=$_GET['tell'];
if(isset($_GET['message']))
	$message=$_GET['message'];

$message = str_replace("+"," ",$message);
	
$query="INSERT INTO contact values(null,'".$name."','".$email."','".$tell."','".$message."',false,'2014/01/05')";
if(! mysql_query($query)){
	die("<a style=".'"color:#F00"'.">مشکل در ارسال پیام</a>");
	}

echo "<br/><a style=".'"color:#093"'.">پیام  با موفقیت ارسال شد"."</a>";
?>
