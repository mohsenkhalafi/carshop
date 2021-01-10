
<?php
include_once('config.php');
include_once('connection.php');

if(isset($_POST['username']) && isset($_POST['password']))
{
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$query = mysql_query("SELECT email FROM customer where (email='".$user."' AND password='".$pass."' )") 
	or die(mysql_error());
	if(mysql_affected_rows()>0)
	{
		$_SESSION['user_state']='logged';
		$_SESSION['user_name']=$user;
		header("Location: index.php");
		die();
	}
	header("Location: index.php?msg=failed");
	die();
}


?>

