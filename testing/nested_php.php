<html>
<head>
<?php
		function add($a) {
			echo $a;		
		
		}		
?>
	
<script>

	function addcart(a){
		document.getElementById("item").innerHTML+=" "+a;	
		var b="<?php  add(?>"+5+")?>";
		console.log(b);
	}
</script>
</head>
<body>



<?php
		$i=1; 	
		echo '<p id="item" ></p>
		<button style="width:50px;height:50px;" 
		onclick="addcart('.$i.')">'.$i.'</button>';
?>
<p id="item"></p>
</body>
</html>