<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<style>
.body{
	background: #FFF;
	margin: 0;
	}
	
input[type=text], select, textarea {
    width: 100%;
    padding: 12px 20px;
    margin-top: 10px;
	margin-bottom: 30px;
    display: block;
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
    padding: 5px;
	margin-top: 5px;
	margin-left: 180px;
	margin-right: 180px;
	font-family: 'Athiti', sans-serif;
	margin-bottom: 100px;
}

.form{
	margin-left: 150px;
	margin-right: 150px;
	}
.line{
	
	margin-bottom: 40px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	}
</style>
<meta charset="utf-8">
<?php
	include('../connectdb.php');
	$strSQL = "SELECT * FROM news WHERE newsid = '".$_GET["newsid"]."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้ =".$_GET["newsid"];
	}
	else
	{
		
?>
<body class="body">

<?php include'../header.php'; ?>

<div class="div">
<h2>แก้ไขข้อมูลการประชาสัมพันธ์</h2>
<hr class="line">
  <form class="form" action="editne_save.php?newsid=<?php echo $_GET["newsid"];?>" method="post">
  
  
   <label for="title">หัวข้อ :</label>
   <label for="txttitle"></label>
   <input name="txttitle" type="text" newsid="txttitle" value="<?php echo $objResult["title"];?>" />

    <label for="content">รายละเอียด :</label>
    <textarea name="txtcontent" newsid="txtcontent" style="height:150px"><?php echo $objResult["content"];?></textarea>
    
     
     
    <input type="submit" value="ตกลง"onclick="myFunction()">
    <script>
function myFunction() {
    alert("แก้ไขข้อมูลเรียบร้อย");
}
</script> 
    <input type="reset" value="ยกเลิก">
	
    
	<?php
}
mysql_close($objConnect);
?>

  </form>
</div>

</body>
</html>

