<!DOCTYPE html>
<meta charset="utf-8">
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

input[type=file] {
    width: 100%;
    padding: 12px 20px;
    margin-top: 10px;
	margin-bottom: 50px;
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
	$strSQL = "SELECT ricename, categoryid, remarkable, general, area, price, img 
	           FROM rice
			   WHERE id = '".$_GET["id"]."'";

	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้ =".$_GET["id"];
	}
	else
	{
		
?>
<body class="body">

<?php include'../header.php'; ?>

<div class="div">
<h2>แก้ไขข้อมูลพันธุ์ข้าว</h2>
<hr class="line">
  <form class="form" name="form1" method="post" action="editri_save.php?id=<?=$_GET["id"];?>" enctype="multipart/form-data">
  
  
   <label for="ricename">ชื่อพันธุ์ข้าว :</label>
   <label for="txtricename"></label>
   <input name="txtricename" type="text" id="txtricename" value="<?php echo $objResult["ricename"];?>" />

    <label for="categoryid">ประเภท(1 = ข้าวเบา, 2 = ข้าวกลาง, 3 = ข้าวหนัก) :</label>
    <label for="txtcategoryid"></label>
    <input name="txtcategoryid" type="text" id="txtcategoryid" value="<?php echo $objResult["categoryid"];?>" />


    <label for="remarkable">ลักษณะเด่น :</label>
    <textarea name="txtremarkable" id="txtremarkable" style="height:150px"><?php echo $objResult["remarkable"];?></textarea>
    
     <label for="general">ลักษณะทั่วไป :</label>
    <textarea name="txtgeneral" id="txtgeneral" style="height:150px"><?php echo $objResult["general"];?></textarea>
    
    <label for="area">พื้นที่แนะนำ :</label>
    <textarea name="txtarea" id="txtarea" style="height:150px"><?php echo $objResult["area"];?></textarea>
    
    <label for="price">ราคา :</label>
    <input name="txtprice" type="text" id="txtprice" value="<?php echo $objResult["price"];?>" />
    
    
    <label>
	<span>รูปภาพ :</span>
	<img src="myfile/<?=$objResult["img"];?>" width="150" height="150"> 
	</label>
    
    <label>
	<input type="file" name="filUpload"><br>
	<input type="hidden" name="hdnOldFile" value="<?=$objResult["img"];?>"> 
	</label>
    
 
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

