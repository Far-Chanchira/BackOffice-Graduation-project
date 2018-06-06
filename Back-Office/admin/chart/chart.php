<!DOCTYPE html>
<html>

<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">

<style>
.bodych{
	margin: 0;
	font-family: 'Athiti', sans-serif;
	padding-bottom: 80px;
	}
.mySlides {
  display:none;
 } 

.line{
	
	margin-bottom: 40px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	margin-left: 40px;
	margin-right: 40px;
	}

.h11{
	margin-top: 45px;
	}

.chart1 {
	margin-top: 50px;
	margin-left: 25px;
	
	}
	
.chart2 {
	margin-top: 50px;
	margin-left: 25px;
	margin-bottom: 100px;
	}	
	


	
	
	

</style>
<body class=bodych>

<?php include'../header.php'; ?>

<center>
<h1 class="h11">รายงานยอดขาย</h1> 
</center>
<hr class="line">

<center>
<div class="divslides">
  <img class="mySlides" src="img/slides11.jpg"  width="1300" height="200"  >
  <img class="mySlides" src="img/slides22.jpg" width="1300" height="200" >
  <img class="mySlides" src="img/slides33.jpg" width="1300" height="200" >
</div>
</center>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 8000); // Change image every 2 seconds
}
</script>


<div class="chart1">
<iframe width="1300" height="600" src="https://app.powerbi.com/view?r=eyJrIjoiOGVjZjYzNWQtMWM2NC00ZDQ4LTk4YzUtMGNiZDJjYTY5ZGU0IiwidCI6ImJmMWViM2Y4LTE5ZDItNDA5ZC1iMGM1LTRlODBjOTQzZmQ1MiIsImMiOjEwfQ%3D%3D" frameborder="0" allowFullScreen="true"></iframe>
</div>


</body>
</html>
