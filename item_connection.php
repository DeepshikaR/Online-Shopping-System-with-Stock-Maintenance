<!DOCTYPE html>
<html>
<head>   
<meta http-equiv="refresh" content="30">
<link rel="stylesheet" href="style.css"> 
<?php
	function addTC($a) {
			echo $a;
	}
?>
<script>
	var quantity=[];
	quantity.length=50;		
	
	function add_qty(a) {
		if(quantity[a]<4){		
			quantity[a]+=1;
		}
		document.getElementById("item"+a).innerHTML=quantity[a];
		console.log(quantity[a]);
	}
	function minus_qty(a) {
		if(quantity[a]>=1){
					quantity[a]-=1;
					document.getElementById("item"+a).innerHTML=quantity[a];
					console.log(quantity[a]);
		}
		
	}
	function ATC(a){
    	//document.getElementById("countItem").innerHTML+=" "+a;
    	//console.log(a);
     }   
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
</head>
<body>
<?php require("header_2.php")?>
<div class="item_body">
    <div class="items ">
			<?php        
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
            		<div class="bor qty qty-">
            		<button class="button qty_button img_minus"onclick="minus_qty('.$i.')"></button>
            		</div>
            		<div class="bor qty qty1" id="item'.$i.'">
            		</div>
            		<div class="bor qty qty_plus">
            		<button class="button qty_button img_plus"onclick="add_qty('.$i.')"></button>
            		</div>
            	</div>
            	<div class="button addToCart img_addToCart bor">
            	<button class="button" onclick="ATC('.$i.')"></button>
            	</div>
        		</div>';
        	}
        ?>
 		<script>
 		for(i=0;i<quantity.length;i++){
		quantity[i]=0;
		document.getElementById("item"+i).innerHTML=quantity[i];	
		}
		</script>
        
    </div>
    <button class="button start" onclick="start()"></button>
</div>
</html>