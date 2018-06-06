<!DOCTYPE html>
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
	$strSQL = "SELECT * FROM news WHERE newsid ='".$_GET["newsid"]."'";
	$objQuery = mysql_query($strSQL) or die ("ไม่สามารถเลือกฐานข้อมูลได้");
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้=".$_GET["newsid"];
	}
	else
	{
		?>
<body class="body">

<?php include'../header.php'; ?>

<form newsid="form" name="form" method="post" action="editne_save.php?newsid=<?php echo $_GET["newsid"];?>">

<div class="div1">
<h2>ข้อมูลการประชาสัมพันธ์</h2>
<hr class="line">

<table>


   <tr>
    <td width="20%" height="50" class="td1">รหัส :</td>
    <td width="70%"><div class="div2"><?php echo $objResult["newsid"];?></div></td>
   </tr>
   
   <tr>
    <td height="50" class="td1">หัวข้อ :</td>
    <td><div class="div2"><?php echo $objResult["title"];?></div></td>
   </tr>
   
   <tr>
    <td height="120" class="td1">รายละเอียด :</td>
    <td><div class="div2"><?php echo $objResult["content"];?></div></td>
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