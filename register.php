<!DOCTYPE html>
<html lang="en">
<head>
    <title>ثبت نام</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">   
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>   
    <script>
    	function submitform()
		{
			var flag=0;
			var pas1=document.getElementById('pass1').value;
			var pas2=document.getElementById('pass2').value;
			if(pas1==pas2)
				flag=1;
			if(flag==1)
				document.getElementById('contact-form').submit();
			else
				alert("کلمه عبور و تکرار آن یکسان نیست");
		}
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
                                                	<h3 class="p2">ثبت نام</h3>
                                                    <form id="contact-form" method="post" enctype="multipart/form-data"  action="register_code.php">                    
                                                        <fieldset>
                                                              <label><span class="text-form">نام:</span><input name="name" type="text" /></label>
                                                              <label><span class="text-form">نام خانوادگی:</span><input name="family" type="text" /></label>  
                                                               <label><span class="text-form">آدرس ایمیل:</span><input name="email" type="text" /></label> 
                                                              <label><span class="text-form">رمز عبور:</span><input name="pass1" id="pass1" type="password" /></label>
                                                              <label><span class="text-form">تکرار رمز:</span><input name="pass2" id="pass2" type="password" /></label>
                                                              <label><span class="text-form">شماره تماس:</span><input name="tell" type="text" /></label>
                                                              <label><span class="text-form">کد پستی:</span><input name="zipCode" type="text" /></label>
                                                              <div class="wrapper"><div class="text-form">آدرس:</div><textarea name="address"></textarea></div>
                                                              <div class="buttons">
                                                                  <a class="button" href="#" onClick="document.getElementById('contact-form').reset()">پاک کردن</a>
                                                                  <a class="button" href="#" onClick="submitform();">ارسال</a>
                                                              </div>                             
                                                        </fieldset>						
                                                    </form>
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
                        <div><a rel="nofollow" target="_blank" href="http://www.templatemonster.com/">Website Template</a> by Pouya Taghavi| <a rel="nofollow" target="_blank" href="http://www.html5xcss3.com/">html5xcss3.com</a></div>
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
