<?php
include_once('config.php');
include_once('connection.php');
if(isset($_SESSION['user_state']))
{
	if($_SESSION['user_state']=="logged")
	{
		$user=$_SESSION['user_name'];
		$query = mysql_query("SELECT * FROM customer where (email='".$user."')")
		or die(mysql_error());
		$row=mysql_fetch_array($query);
		echo "خوش آمدید ".$row['name']. " " .$row['family'] ;
		echo "<br/>";
		echo '<a href="basket.php">سبد خرید شما</a>';
		echo "<br/>";
		echo '<a href="logout.php"> خروج </a>';
	}
}
else
echo '
<form id="contact-form" method="post" enctype="multipart/form-data"  action="login_code.php" >                    
                                                        <fieldset dir="ltr"  >
                                                              <label><input name="username" style="width:150px; height:10px;" id="username" type="text" /><span class="text-form">نام کاربری</span></label>
                                                              <label><input name="password" style="width:150px; height:10px;" id="password" type="password" /><span class="text-form">رمز عبور</span></label>   
                                                              <div style="margin-bottom:10px; float:left;" class="buttons" >
                                                                  <a class="button" href="register.php" style="height:12px; font-size:12px; font-family:bbcnassim; padding:10px 20px 10px 20px;  ">ثبت نام</a>
                                                                  <a class="button" href="#" style="height:12px; font-size:12px; font-family:bbcnassim; padding:10px 20px 10px 20px; " onClick="document.getElementById('."'contact-form'".').submit()">ورود</a>
                                                              </div>                             
                                                        </fieldset>						
                                                    </form>
';



?>
