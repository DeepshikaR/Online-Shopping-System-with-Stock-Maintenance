<!DOCTYPE html>
<html>
<head>   
<meta http-equiv="refresh" content="30">
<link rel="stylesheet" href="style.css"> 
<style>

</style>
<script>
   function start(){
        var width=4; 
        var item=document.getElementsByClassName("item");
        for(var i=0;i<item.length;i++){
            
            item[i].style.display="block";
            if(i%2==1){
                item[i].style.left="427px";
                item[i].style.top=(width-155)+"px";
            }
            else{
                item[i].style.left="5px";
                item[i].style.top=String(width)+"px";
                width+=155;
            }

        }
    }
    
        
</script>
<?php require("sql_connection.php")?>
</head>
<body>
<?php require("header_2.php")?>
<div class="item_body">
    <div class="items ">
			<?php        
				function addToCart($index){
					echo $index;	
	
				}
				for($i=0;$i<50;$i++){				
				echo'        		
        		<div class="item bor">
					<div class="item_img">
               <center>image</center>
            	</div>
            	<div class="item_details bor">
            	name<br>price
            	</div>
            	<div class="item_qty bor">
            	quantity
            	</div>
            	<div class="button addToCart img_addToCart bor">
            	<button class="button" name="item.$i"></button>
            	</div>
        		</div>';
        	}
        ?>
 
        
    </div>
    <button class="start" onclick="start()"></button>
</div>

</body>
</html>