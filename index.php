<?php
include_once('connection.php');
include_once("config.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"> 
    <script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
    <script src="js/jquery.galleriffic.js" type="text/javascript"></script>
    <script src="js/jquery.opacityrollover.js" type="text/javascript"></script>     
    
    <script language="javascript">
	$(document).ready(function(){
 		$("#newsDiv").load("news/news.php");
		$("#loginDIV").load("login.php");
		$("#adsDIV").load("ads.php");
		$("#newProducts").load("newProduct.php");
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
<body id="page1">
<div id="NewsDetail" style="cursor:pointer;position:absolute; z-index:200; background-color:#09F;">

</div>
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
                                <li><a class="active" href="index.php">صفحه اصلی</a></li>
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
                        <div id="loginDIV" style="float:right;" dir="rtl"> </div>
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
                            <div class="gallery p3">
                            	<div class="wrapper indent-bot">
                                    <div id="gallery" class="content">
                                       <div class="wrapper">
                                           <div class="slideshow-container">
                                                <div id="slideshow" class="slideshow"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="thumbs" class="navigation">
                                        <ul class="thumbs noscript">
                                            <li>
                                                <a class="thumb" href="images/gallery-img1.jpg" title=""> <img src="images/thumb-1.jpg" alt="" /><span></span> </a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img2.jpg" title=""> <img src="images/thumb-2.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img3.jpg" title=""> <img src="images/thumb-3.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img4.jpg" title=""> <img src="images/thumb-4.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img5.jpg" title=""> <img src="images/thumb-5.jpg" alt="" /> <span></span></a>
                                            </li> 
                                            <li>
                                                <a class="thumb" href="images/gallery-img6.jpg" title=""> <img src="images/thumb-6.jpg" alt="" /> <span></span></a>
                                            </li>           
                                        </ul>
                                    </div>
                                </div>
                                <div class="inner">
                                  <div class="wrapper"> <span class="title img-indent3">معرفی سایپا</span>
                                    <div class="extra-wrap indent-top2" style="direction:rtl; text-align:justify; font-family:bbcnassim, sans-serif; font-size:18px;"> شركت سايپا در سال 1346 در زميني با مساحت 240 هزار متر مربع و زيربناي 20 هزار متر مربع (در حال حاضر فقط مساحت زمين كارخانه مركزي 415 هزار متر مربع مي‌باشد) با سرمايه اوليه 160 ميليون ريال به نام " شركت سهامي توليد اتومبيل سيتروئن ايران" تاسيس گرديد. در تاريخ 15 اسفند 1345 ثبت و در اواخر سال 1347 به مرحله بهره‌برداري رسيد. </div>
                                  </div>
                                </div>
                            </div>
                            <div class="container_12">
                            	<div class="wrapper">
                                	<article class="grid_12">
                                    	<h3 class="color-1" dir="rtl">تبلیغات</h3>
                                        <div id="adsDIV">
                                        
                                        </div>
                                    </article>
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
                	  <article class="grid_4">
                   	    <h3 class="prev-indent-bot" align="right">اخبار</h3>
                            <div id="newsDiv" >
                            	<p class="prev-indent-bot">At vero eos et accusamus et iusto odio tium voluptatum deleniti atque corrupti quos<br> dolores et quas molestias excepturi sint occaecati cupiditate.</p>
                                <h5>James Reese</h5>
                                Managing Director
                            </div>
                        </article>
                        <div id="newProducts"></div>
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
                        <div><a rel="nofollow" target="_blank" href="http://www.templatemonster.com/">Website Template</a> by Pouya taghavi| <a rel="nofollow" target="_blank" href="http://www.html5xcss3.com/">html5xcss3.com</a></div>
                        <!-- {%FOOTER_LINK} -->
                    </div>
                    <div class="grid_4">
                    	<span class="phone-numb"><span>+98(21)</span> 44196550-5</span>
                    </div>
                    <div class="grid_4">
                    	<ul class="list-services">
                        	<li><a href="RSS.php"></a></li>
                            <li><a class="item-2" href="#"></a></li>
                            <li><a class="item-3" href="#"></a></li>
                            <li><a class="item-4" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript">
			$(window).load(function() {
			// We only want these styles applied when javascript is enabled
			$('div.navigation').css({'width' : '320px', 'float' : 'right'});
			$('div.content').css('display', 'block');
	
			// Initially set opacity on thumbs and add
			// additional styling for hover effect on thumbs
			var onMouseOutOpacity = 0.5;
			$('#thumbs ul.thumbs li span').opacityrollover({
				mouseOutOpacity:   onMouseOutOpacity,
				mouseOverOpacity:  0.0,
				fadeSpeed:         'fast',
				exemptionSelector: '.selected'
			});
			
			// Initialize Advanced Galleriffic Gallery
			var gallery = $('#thumbs').galleriffic({
				delay:                     7000,
				numThumbs:                 12,
				preloadAhead:              6,
				enableTopPager:            false,
				enableBottomPager:         false,
				imageContainerSel:         '#slideshow',
				controlsContainerSel:      '',
				captionContainerSel:       '',
				loadingContainerSel:       '',
				renderSSControls:          true,
				renderNavControls:         true,
				playLinkText:              'Play Slideshow',
				pauseLinkText:             'Pause Slideshow',
				prevLinkText:              'Prev',
				nextLinkText:              'Next',
				nextPageLinkText:          'Next',
				prevPageLinkText:          'Prev',
				enableHistory:             true,
				autoStart:                 7000,
				syncTransitions:           true,
				defaultTransitionDuration: 900,
				onSlideChange:             function(prevIndex, nextIndex) {
					// 'this' refers to the gallery, which is an extension of $('#thumbs')
					this.find('ul.thumbs li span')
						.css({opacity:0.5})
				},
				onPageTransitionOut:       function(callback) {
					this.find('ul.thumbs li span').css({display:'block'});
				},
				onPageTransitionIn:        function() {
					this.find('ul.thumbs li span').css({display:'none'});
				}
			});
		});
	</script>
</body>
</html>
