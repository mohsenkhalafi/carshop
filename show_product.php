<?php
include_once('connection.php');

if(isset($_GET['ID']))
{
	
	$Search=$_GET['ID'];
	if(strlen($Search)>0)
	{
	$query = mysql_query("SELECT * FROM products where(ID= ".$Search." )")
	or die(mysql_error());
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>مشاهده محصول</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>    
    
    
    <script>
    $(document).ready(function(){
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
                                                	<h3 class="p2" dir="rtl">مشاهده محصول</h3>
                                                    <div id="messageDIV" dir="rtl" align="center">
                                                    <?php
													if(isset($_GET['ID']))
													{
															if(strlen($Search)>0)
															{
														$i=0;
														while($row = mysql_fetch_array($query))
														{
															$i++;
															
															echo '<li>'.'<time class="tdate-1" datetime="2011-08-15"><a class="link" href="#">'.$row['title'].'</a></time></li>
															<p class="prev-indent-bot">'.$row['body'].'</p>'.
															'<img src="'.$row['picture'].'" />';
														}	
														if($i==0)
														{
															echo '<a style=" color:#0F0; font-size:20px;">موردی یافت نشد</a>';
														}
														}
														else
															echo '<a style=" color:#0F0; font-size:20px;">موردی یافت نشد</a>';
													}
													else
													echo '<a dir="rtl" style=" color:#F00; font-size:20px;">درخواست نا معتبر</a>';
													

?>
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
                        	<h3 class="prev-indent-bot">درباره شرکت</h3>
                            در سال 1377 با توجه به سياست‌هاي جديد سازمان گسترش و نوسازي صنايع ايران مبني بر تمركز بيشتر در فعاليت‌هاي صنعت خودرو‌سازي كشور، استفاده بهينه از امكانات موجود در مجموعه شركت‌هاي تحت پوشش سازمان، ايجاد رقابت و ...  وزارت صنايع زمينه‌هاي ادغام مجموعه‌هاي خودرو‌سازي را در قالب دو گروه بزرگ خودرو‌ساز ايجاد كرد و بدين ترتيب گروه خودرو‌سازي سايپا و گروه خودرو‌سازي ايران خودرو شكل گرفتند. گروه خودرو‌سازي سايپا به منظور توليد انواع خودروها خصوصاً توليد خودروهاي سنگين و تجاري در همان سال با خريد 80 درصد از سهام شركت سايپا ديزل (ايران كاوه) و 2/63 درصد از سهام زامياد و در سال 1378 با خريد 51 درصد از سهام شركت پارس خودرو گام‌هاي عمده اي در اين زمينه برداشت.
                        </article>
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
