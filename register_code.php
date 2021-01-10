<?php 
include_once('connection.php');

$name='بی نام';
$email='email';
$tell='null';
$family='بی نام';

$address=$_POST['address'];
if(isset($_POST['name']))
	$name=$_POST['name'];
if(isset($_POST['family']))
	$family=$_POST['family'];
if(isset($_POST['tell']))
	$tell=$_POST['tell'];
if(isset($_POST['address']))
	$address=$_POST['address'];
if(isset($_POST['zipCode']))
	$zipCode=$_POST['zipCode'];
if(isset($_POST['pass1']))
	$pass1=$_POST['pass1'];
if(isset($_GET['pass2']))
	$pass2=$_POST['pass2'];
if(isset($_POST['email']))
	$email=$_POST['email'];

$query="select email from customer where (email='".$email."')";

if(mysql_num_rows($query)>0)
{
	header("Location: message.php?msg=3");
  	die();
}
	
$query="INSERT INTO customer values(null,'".$name."','".$family."','".$email."','".$pass1."','".$address."','".$zipCode."','".$tell."')";
 
if (!mysql_query($query)) {
	header("Location: message.php?msg=2");
  die();
}
header("Location: message.php?msg=1");
?>
