<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="style.css">
<script>
    function visible_dropdown(a){
        var element=document.getElementsByClassName("dropdown");
        element[parseInt(a)].style.display="block";
        for(var i=0;i<element.length;i++){
            if(i!=parseInt(a)){
                element[i].style.display="none";

            }
        }
    }
    function vanish_dropdown(a){
        document.getElementsByClassName("dropdown")[parseInt(a)].style.display="none";
    }

</script>
</head>
<body>
<center><h1>WELCOME</h1></center>
<div class="header bor">
    <div class="header_item user img_header img_user ">
     <button class="button" onmouseover="visible_dropdown('0')" ></button>
        <div class="dropdown" onmouseout="vanish_dropdown('0')" onmouseover="visible_dropdown('0')">
            <ul>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Your Orders</a></li>
                <li><a href="#">Sign Out</a></li>
            
            </ul>
        </div>
    </div>
    <div class="header_item menu img_header img_menu" >
        <button class="button" onmouseover="visible_dropdown('1')" ></button>
        <div class="dropdown" onmouseout="vanish_dropdown('1')" onmouseover="visible_dropdown('1')">
            <ul>
                <li><a href="#">MENS</a></li>
                <li><a href="#">FEMALE</a></li>
                <li><a href="#">KIDS</a></li>
            
            </ul>
        </div>
    </div>
    <div class="header_item home img_header img_home ">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div> 
    <div class="header_item search img_header img_search">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div>
    <div class="header_item cart img_header img_cart">
        <a class="trans_button" href="./testing/test.html">
        </a>
    </div>
    
</div>
</body>
</html>