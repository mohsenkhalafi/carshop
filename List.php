<?php
include_once("config.php");
include_once('connection.php');
 ?>       

     <script type="text/javascript">
function removebasket(id)
		{
			
			$("#BasketDIV").load("basket/remove.php?id="+id);
			$("#BasketDIV").load("List.php");
		}
     
     </script>   
    
        <script language="javascript">
	$(document).ready(function(){
		
		
     	jQuery(function($) {
    	var currentMousePos = { x: -1, y: -1 };
    	$(document).mousemove(function(event) {
        	currentMousePos.x = event.pageX;
        	currentMousePos.y = event.pageY;
    	});
	/////////////////////////////////////////

		
			$("[href='#remove']").mousemove(function(){
				$( "#tooltip" ).css("left",currentMousePos.x-40);
  				$( "#tooltip" ).css("top",currentMousePos.y-10);
 		 	});
			$("[href='#remove']").mouseleave(function(){
				$( "#tooltip" ).css("left",-10);
  				$( "#tooltip" ).css("top",-10);
			});
	/////////////////////////////////////////
    // ELSEWHERE, your code that needs to know the mouse position without an event

	});
	

	});

    
    </script>  
 <ul class="price-list">                
<?php
								
if(isset($_SESSION['BasketListSession']))
{
	$BasketList=$_SESSION['BasketListSession'];
	$i=0;
	foreach ($BasketList as $value)
		{  
		if($value!=-1)
		{
			$i++;
			$query = mysqli_query($connect,"SELECT title,price FROM products where (ID="
			.$value.")")or die(mysqli_error());
			while($row = mysqli_fetch_array($query))
				{
					echo '<li><span>'.$row['price'].
					'</span><a href="#remove" onclick="removebasket('.$value.');">X</a><a href="#">'.$row['title'].
					'</a><strong>&nbsp;</strong></li>';
				}
		}
		}
		
}
			
?>
 </ul>
 <a></a>