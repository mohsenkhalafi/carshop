<?php 
include_once('config.php');
include_once('connection.php');
$message="";
$submit='document.getElementById('."'submit_order'".').submit()';
if(isset($_SESSION['user_state']))
{
	if($_SESSION['user_state']=="logged")
	{
		$user=$_SESSION['user_name'];
		$query = mysql_query("SELECT * FROM customer where (email='".$user."')")
		or die(mysql_error());
		$milliseconds = round(microtime(true) * 1000);
		$row=mysql_fetch_array($query);
		$message='<a style="font-size:25px; font-family: bbcnassim">'."کاربر : ".$row['name']."   ". $row['family']."</a>"."<br/><br/>";
		$message.='<a style="font-size:20px">'."آدرس : ".$row['address']."</a>"."<br/><br/>";
		$message.='<a style="font-size:20px">'."شماره تماس : ".$row['tell']."</a>"."<br/><br/>";
		$message.='<a style="font-size:20px">'."کد سفارش : ".$milliseconds."</a>"."<br/><br/>";
		
$sum=0;									
if(isset($_SESSION['BasketListSession']))
{
	
	$BasketList=$_SESSION['BasketListSession'];
	$i=1;
	$sum=0;
	foreach ($BasketList as $value)
		{  
		if($value!=-1)
		{
			$query = mysql_query("SELECT title,price FROM products where (ID="
			.$value.")")or die(mysql_error());
			
			while($row2 = mysql_fetch_array($query))
				{
					
					$sum=$sum+$row2['price'];
				}
		}
		}
		
}
else
{
	
}
$message.='<br/><a style="font-size:22px">'."مبلغ کل سفارش : ".$sum."</a>"."<br/><br/>";
	}
}
else
{
	$message.='<a style="font-size:20px" href="index.php">'."شما وارد نشده اید برای ورود کلیک کنید"."</a>"."<br/><br/>";
	$submit="";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>سبد خرید</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>    
    
    
         <script language="javascript">
	$(document).ready(function(){
 		$("#ProductsDIV").load("pricing/Products.php?page=1");
		$("#BasketDIV").load("List.php");
		
	
		//$("NextPage").click(function(){
		//	alert("as");
   		//	$("#newsDiv").load("news/news.php?page=2");
  		//});
	});

    
    </script> 
	<!--[if lt IE 7]>
        <div style=' clear: both; text-align:center; position: relative;'>
            <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0"  alt="" /></a>
        </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
	<![endif]-->
</head>
<body id="page5">
	<!--==============================header=================================-->
    <header>
    	<div class="row-1">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_12">
                    	<nav>
                            <ul class="menu">
                            	<li><a href="contacts.php">تماس با ما</a></li>
                                <li><a href="pricing.php">محصولات</a></li>
                                <li><a href="services.php">خدمات</a></li>
                                <li><a href="index.php">صفحه اصلی</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="row-2">
        	<div class="main">
            	<div class="container_12">
                	<div class="grid_9">
                    	<h1>
                          <img src="images/Logo.png" />
                            <span><img src="images/Saipa-Slogan.png"/></span>
                        </h1>
                    </div>
                    <div class="grid_3">
                    	<form id="search-form" action="search_result.php" method="post" enctype="multipart/form-data">
                            <fieldset>	
                                <div class="search-field">
                                    <input name="search" type="text" />
                                    <a class="search-button" href="#" onClick="document.getElementById('search-form').submit()"><span>search</span></a>	
                                </div>						
                            </fieldset>
                        </form>
                     </div>
                     <div class="clear"></div>
                </div>
            </div>
        </div>    	
    </header><div class="ic">More Website Templates  @ TemplateMonster.com - August22nd 2011!</div>
    
<!-- content -->
    <section id="content">
        <div class="bg-top">
        	<div class="bg-top-2">
                <div class="bg">
                    <div class="bg-top-shadow">
                        <div class="main">
                            <div class="box">
                                <div class="padding">
                                    <div class="container_12">
                                        <div class="wrapper">
                                            <div class="grid_12">
                                            	<div class="indent-left">
                                                	<h3 class="p2" dir="rtl">سبد خرید</h3>
                                                    <div id="messageDIV"></div>
                                                    <div style="width:40%; float:left;padding:20px;" dir="rtl">سفارشات <br/> <br/> <br/><div id="BasketDIV" style="overflow: auto; height:200px;">

                                 </div></div>
                                                    <div style="width:40%; float:right;padding:20px;" dir="rtl">مشخصات شما <br/> <br/> <br/><?php echo $message; ?></div>
                                                    
                                                    <div style="clear:both;"></div>
                                                    <form action="set_order.php" method="post" id="submit_order">
                                                    <input name="code" type="hidden" value="<?php echo $milliseconds; ?>">
                                                     <a class="button" href="#" style="height:12px; font-size:18px; font-family:bbcnassim; padding:10px 20px 10px 20px; " onClick="<?php echo $submit; ?>">تایید نهایی</a>
                                                     </form>
                                                     <div style="font-size:14px;color:#F30;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12"></div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
                    	<div>Pouya Design &copy; 2011 <a class="link color-3" href="#">Privacy Policy</a></div>
                        <div><a rel="nofollow" target="_blank" href="http://www.templatemonster.com/">Website </a> by Pouya taghavi| <a rel="nofollow" target="_blank" href="http://www.html5xcss3.com/">html5xcss3.com</a></div>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <div class="grid_4">
                    	<span class="phone-numb"><span>+98(21)</span> 44196550-5</span>
                    </div>
                    <div class="grid_4">
                    	<ul class="list-services">
                        	<li><a href="#"></a></li>
                            <li><a class="item-2" href="#"></a></li>
                            <li><a class="item-3" href="#"></a></li>
                            <li><a class="item-4" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
