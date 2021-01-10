<?php 
include_once('config.php');
include_once('connection.php');
$username="";$userfamily="";$address="";
$list_title=array();
$list_price=array();
$sum=0;
$code="";
$user="";
	if(isset($_SERVER['HTTP_REFERER']))
	{
		$page=$_SERVER['HTTP_REFERER'];
		if(substr($page,-11)=="/basket.php")
		{
			if(isset($_SESSION['user_state']))
				{
					if($_SESSION['user_state']=="logged")
					{
						
						
						$user=$_SESSION['user_name'];
						
						$query1 = mysql_query("SELECT * FROM customer where (email='".$user."')")
		or die(mysql_error());
						$users=mysql_fetch_array($query1);
						$username=$users['name'];
						$userfamily=$users['family'];
						$address=$users['address'];
						echo $username;
						$color="پیشفرض";
						$tip="پیشفرض";
						$code=$_POST['code'];
						if(isset($_SESSION['BasketListSession']))
							{
								$BasketList=$_SESSION['BasketListSession'];
								foreach ($BasketList as $value)
								{  
									if($value!=-1)
									{
				$query = mysql_query("SELECT title,price FROM products where (ID=".$value.")")or die(mysql_error());
				$row = mysql_fetch_array($query);
				array_push($list_title,$row['title']);
				array_push($list_price,$row['price']);
				$today = date("Ymd"); 
				$query2="INSERT INTO orders values(null,'".$user.
				"','".$value."','".$row['price']."',0,'".$color."','".$tip."','".$code."','".$today."','ارسال نشده')";
										if (!mysql_query($query2))
										 {
											  die('error');
										 }
										 echo "ok";
									}
								}
		
							}
					}
				}
		}
		
	}
	
?>
                                                   
<!DOCTYPE html>
<html lang="en">
<head>

    <title>تایید سفارش</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>    
    
    
    <script>
    $(document).ready(function(){
		
		$("#printfactor").click(function(){
			window.print();
		});
 		$("#submitBtn").click(function(){
			var name=$("#name").val();
			var email=$("#email").val();
			var tell=$("#tell").val();
			var message=$("#message").val();
	
			$("#messageDIV").load('contacts_send.php?name='+name+'&email='+email+'&tell='+tell+'&message='+message);
			
		});
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
                                                	<h3 class="p2" align="center">فاکتور فروش</h3>
                                                    <div id="messageDIV">
                                                    	<?php
$query = mysql_query("SELECT * FROM customer where (email='".$user."')")
		or die(mysql_error());
		
?>
<div style="border:1px solid #00C;">
<div dir="rtl" style="padding:10px; padding-right:80px; font-size:16px;">مشخصات خریدار : 
<?php echo $username. "    ".$userfamily; ?>
</div>
<div dir="rtl" style="padding:10px; padding-right:80px; font-size:16px;">آدرس : 
<?php echo $address; ?>
</div>
<div dir="rtl" style="padding:10px; padding-right:80px; font-size:16px;">کد سفارش
 : 
<?php echo $code; ?></div>
<div dir="rtl" style="padding:10px; padding-right:80px; font-size:16px;">وضعیت سفارش : 

پرداخت نشده
</div>
</div>
<div dir="rtl" style="padding:10px; padding-right:80px;">

<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr >
    <td style="border:1px solid #00C;" width="18%" align="center">ردیف</td>
    <td style="border:1px solid #00C;" width="48%" align="center">محصول</td>
    <td style="border:1px solid #00C;" width="34%" align="center">قیمت</td>
  </tr>
  
  <?php 
  if(isset($list_title))
  {
	for ($j=0;$j<count($list_title); $j++)
	{
  		echo  '<tr  style="border:1px solid #00C;"><td  width="18%" align="center"> '.($j+1).' </td>';
  		echo  '<td width="48%"  style="border:1px solid #00C;" align="center">'.$list_title[$j].'</td>';
  		echo  '<td width="34%"  style="border:1px solid #00C;" align="center">'.$list_price[$j].'</td></tr>';
		$sum=$sum+$list_price[$j];
	}
  }
	?>
  
</table>
</div>
<div dir="rtl" style="padding:10px; padding-right:80px;">جمع کل
<br />
<?php
echo $sum;
 ?>
 <br />
 <br />
 <a class="button" href="#" style="height:12px; font-size:12px; font-family:bbcnassim; padding:10px 20px 10px 20px; " id="printfactor">چاپ</a>
 
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
            </div>	
        </div>
        <div class="bg-bot">
        	<div class="main">
            	<div class="container_12">
                	<div class="wrapper">
                    	<article class="grid_3" dir="rtl">
                        	<h3 class="prev-indent-bot">آدرس شرکت</h3>
                            <dl>
                                <dt class="indent-bot">تهران، كدپستي 14584، كيلومتر 15 جاده مخصوص كرج، صندوق پستي 554-13445.</dt>
                                <dd><span>تلفن:</span> +98 21 44196550-5</dd>
                                
                                <dd><span>نمابر:</span> +98 21 44194935</dd>
                                <dd><strong>ایمیل:</strong> <a href="#">saipa@saipacorp.com</a></dd>
                            </dl>
                        </article>
                        <article class="grid_9" dir="rtl">
                        	<h3 class="prev-indent-bot" >فروش اینترنتی محصولات سایپا</h3>
                            <strong>به سایت فروش مجازي شركت سايپا خوش آمديد. از اين مرحله به بعد شما قادر خواهيد بود به كمك راهنماي استفاده، كليه مراحل خريد خودرو مورد نظر خود را به راحتي انجام دهيد.</strong> در مرح‍‍له نخست كه در حال حاضر پيش روي شما مي باشد خودروهاي قابل عرضه از طرف شركت سايپا كه به صورت فروش نقدی و پیش فروش است همراه با قيمت آن به شرح ذيل قابل ملاحظه است.  </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	<!--==============================footer=================================-->
    <footer>
        <div class="main">
        	<div class="container_12">
            	<div class="wrapper">
                	<div class="grid_4">
                    	<div>Interior Design &copy; 2011 <a class="link color-3" href="#">Privacy Policy</a></div>
                        <div><a rel="nofollow" target="_blank" href="http://www.templatemonster.com/">Website Template</a> by TemplateMonster.com | <a rel="nofollow" target="_blank" href="http://www.html5xcss3.com/">html5xcss3.com</a></div>
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
