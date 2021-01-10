<article class="grid_4" dir="rtl" style="float:right;">
                        	<h3 class="prev-indent-bot">محصولات جدید</h3>
                            
<?php
include_once('connection.php');

$query = mysql_query("SELECT * FROM products ")
or die(mysql_error());

for($k=0;$k<2;$k++)
{
	$row = mysql_fetch_array($query);



echo '


                            <time class="tdate-1" datetime="2011-08-15"><a class="link" href="show_product.php?ID='.$row['ID'].'">'.$row['title'].'</a></time>
                            <p class="prev-indent-bot">'.$row['body'].'نوع موتور: 4 
حجم موتور : 1.3 (لیتر) 
حداکثر قدرت : 63 اسب بخار در 5200دور در دقیقه 
گیربکس : 5 دنده دستی 
ظرفیت مخزن سوخت : 37 (لیتر)  
مصرف سوخت در شهر :8.8 لیتر در هر 100 کیلومتر  
مصرف سوخت در بزرگراه : 5.6 لیتر در هر 100 کیلومتر '.'.</p>
                            
                        ';
}						
						
?>
</article>