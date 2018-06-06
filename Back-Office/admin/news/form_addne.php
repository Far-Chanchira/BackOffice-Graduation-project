<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<style>
input[type=text], select,textarea  {
    width: 100%;
    padding: 12px 20px;
    margin-top: 10px;
	margin-bottom: 30px;
    display: inline-block;
    border: 1px solid #7ee9cb;
    border-radius: 4px;
    box-sizing: border-box;
	font-family: 'Athiti', sans-serif;
	font-size: 16px;
}

input[type=submit] {
    width: 20%;
    background-color: #58a38e;
    color: white;
    padding: 10px 10px;
    margin-left: 335px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: 'Athiti', sans-serif;
	font-size: 18px;
}

input[type=submit]:hover {
    background-color: #64baa2;
}

input[type=reset] {
    width: 20%;
    background-color: #58a38e;
    color: white;
    padding: 10px 10px;
    margin-left: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: 'Athiti', sans-serif;
	font-size: 18px;
}

input[type=reset]:hover {
    background-color: #64baa2;
}

.div {
   
    background-color: #FFF;
    padding: 5px 0px 50px;
	margin-top: 10px;
	margin-left: 180px;
	margin-right: 180px;
	margin-bottom: 100px;
	font-family: 'Athiti', sans-serif;
}

.form{
	margin-left: 200px;
	margin-right: 200px;
	
	}
	
.body{
	background: #FFF;
	margin: 0;
	
	}
.line{
	margin-bottom: 100px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	}
	
</style>
<body class="body">

<?php include'../header.php'; ?>

<div class="div">

<h2>เพิ่มข้อมูลประชาสัมพันธ์</h2>
  
<hr class="line">

  <form class="form" action="save_addne.php">

  
    <label for="txttitle">หัวข้อ :</label>
    <input type="text" 	newsid="title" name="txttitle" placeholder="หัวข้อ..">

    <label for="txtcontent">รายละเอียด :</label>
    <textarea newsid="txtcontent" name="txtcontent" placeholder="รายละเอียด.." style="height:150px"></textarea>
    
    
    
    <input type="submit" value="ตกลง"onclick="myFunction()">
<script>
function myFunction() {
    alert("บันทึกข้อมูลเรียบร้อย");
}
</script>
    <input name="Reset" type="reset" value="ยกเลิก">
  </form>
</div>

</body>
</html>
