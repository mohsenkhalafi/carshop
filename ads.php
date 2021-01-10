<?php

include_once('connection.php');

$query = mysql_query("SELECT * FROM ads") or die(mysql_error());

$i=0;
$count=0;
$ID=array();
$title=array();
$body=array();
$link=array();
$pic=array();
while($row = mysql_fetch_array($query)){

	$count++;
	$ID[$i] = $row['ID'];
	$title[$i]= $row['title'];
	$body[$i]= $row['body'];
	$link[$i]= $row['link'];
	$pic[$i]= $row['pic'];
	$i++;
} 
echo '<div class="wrapper">';
for( $j=0;$j<2;$j++)
{

$randomID=rand(0,$count-1);
	
echo '

	<article class="grid_6 alpha">
	<figure class="img-indent frame"><img src="'.$pic[$randomID].'" alt="" /></figure>
          <div class="extra-wrap">
          <div class="indent-top">
          <ul  style="text-align:justify; direction:rtl;">
         	 <li style="text-align:justify; direction:rtl;  font-size:26px; " dir="rtl"><a style="color:#FFF;" href="clickcounter.php?ID='.$ID[$randomID].'&link='.$link[$randomID].'">'.$title[$randomID].'</a></li><br/>
          	<li style="font-size:16px;"><a href="clickcounter.php?ID='.$ID[$randomID].'&link='.$link[$randomID].'">'.$body[$randomID].'</a></li>
          </ul>
          </div>
          </div>
          <div class="clear"></div>
          </article>

';      
}       

echo ' </div>';  
?>

<a style="color:#FFF"></a>