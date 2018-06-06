<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<style>
.body {
	margin: 0;
	}
.div1{
	margin-top: 40px;
	margin-left: 250px;
	margin-right: 250px;
	margin-bottom: 100px;
	font-family: 'Athiti', sans-serif;
	}
	
.div2{
	width: 600px; 
	overflow:hidden;
	
	}		
	
table {
    border-collapse: collapse;
    width: 100%;
	margin-top: 50px;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){
	background-color: #f2fcf9;
	}
tr {
	word-wrap:break-word;
	
  }

.td1 {
    background-color: #64baa2;
    color: white;
	border-bottom: 1px solid #FFF;
}
.line{
	
	margin-bottom: 40px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	}
</style>
</head>
<?php
    include('../connectdb.php');
	$strSQL = "SELECT id, ricename, categoryname, remarkable, general, area, price, img          
	           FROM rice 
			   INNER JOIN category
			   ON rice.categoryid=category.categoryid
			   WHERE id ='".$_GET["id"]."'";

	$objQuery = mysql_query($strSQL) or die ("ไม่สามารถเลือกฐานข้อมูลได้");
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้=".$_GET["id"];
	}
	else
	{
		?>
<body class="body">

<?php include'../header.php'; ?>

<form id="form" name="form" method="post" action="editri_save.php?id=<?php echo $_GET["id"];?>">

<div class="div1">
<h2>ข้อมูลพันธุ์ข้าว</h2>

<hr class="line">

<table>
   <tr>
    <td width="20%" height="50" class="td1">รหัสพันธุ์ข้าว :</td>
    <td width="70%"><div class="div2"><?php echo $objResult["id"];?></div></td>
   
  </tr>
  <tr>
    <td height="50" class="td1">ชื่อพันธุ์ข้าว :</td>
    <td><div class="div2"><?php echo $objResult["ricename"];?></div></td>
   
  </tr>
  <tr>
    <td height="50" class="td1">ประเภท :</td>
    <td><div class="div2"><?php echo $objResult["categoryname"];?></div></td>
  
  </tr>
  <tr>
    <td height="50" class="td1">ลักษณะเด่น :</td>
    <td><div class="div2"><?php echo $objResult["remarkable"];?></div></td>

  </tr>
  <tr>
    <td height="50" class="td1">ลักษณะทั่วไป :</td>
    <td><div class="div2"><?php echo $objResult["general"];?></div></td>

</tr>

<tr>
    <td height="50" class="td1">พื้นที่แนะนำ :</td>
    <td><div class="div2"><?php echo $objResult["area"];?></div></td>

</tr>

<tr>
    <td height="50" class="td1">ราคา :</td>
    <td><div class="div2"><?php echo $objResult["price"];?></div></td>

</tr>

<tr>
    <td height="50" class="td1">รูปพันธุ์ข้าว :</td>
    <td><img src="myfile/<?=$objResult["img"];?>" width="180" height="180"></td>

</tr>


</table>
</div>

<?php
	}
	//mysql_close($objConnect);
?>
</form>

</body>
</html>