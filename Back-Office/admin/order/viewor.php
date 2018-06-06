<!DOCTYPE html>
<meta  charset="utf-8">
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
	

	$strSQL = "SELECT * 
	FROM member 
	INNER JOIN orderlist ON member.memberid = orderlist.memberid 
	WHERE orderid ='".$_GET["orderid"]."'";
	$objQuery = mysql_query($strSQL) or die ("ไม่สามารถเลือกฐานข้อมูลได้");
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
		echo"ไม่สามารถเลือกค่า ID นี้ได้=".$_GET["orderid"];
	}
	else
	{
		?>
<body class="body">

<?php include'../header.php'; ?>

<form orderid="form" name="form" method="post" action="../orderlist/editsta_save.php?orderid=<?php echo $_GET["orderid"];?>">

<div class="div1">
<h2>รายละเอียดการสั่งจอง</h2>
<hr class="line">
<table>
   <tr>
    <td width="20%" height="50" class="td1">รหัสการจอง :</td>
    <td width="70%"><div class="div2"><?php echo $objResult["orderid"];?></div></td>
   
  </tr>
  <tr>
    <td height="50" class="td1">วันที่สั่งจอง :</td>
    <td><div class="div2"><?php echo $objResult["orderdate"];?></div></td>
   
  </tr>
  <tr>
    <td height="50" class="td1">ชื่อผู้สั่งจอง :</td>
    <td><div class="div2"><?php echo $objResult["name"];?> <?php echo $objResult["lastname"];?></div></td>
  
  </tr>
  <tr>
    <td height="50" class="td1">ที่อยู่ :</td>
    <td><div class="div2"><?php echo $objResult["address"];?></div></td>

  </tr>
  <tr>
    <td height="50" class="td1">รายการที่ซื้อ :</td>
    <td><div class="div2"><?php echo $objResult["list"];?></div></td>

</tr>

<tr>
    <td height="50" class="td1">จำนวน :</td>
    <td><div class="div2"><?php echo $objResult["number"];?></div></td>

</tr>

<tr>
    <td height="50" class="td1">ราคา :</td>
    <td><div class="div2"><?php echo $objResult["price"];?></div></td>

</tr>

<tr>
    <td height="50" class="td1">สถานะ :</td>
    <td><div class="div2"><?php 
							if ($objResult['status']==0) {
								echo 'สั่งซื้อ';
							} else if ($objResult['status']==1) {
								echo 'ติดต่อผู้ผลิต';
							} else if ($objResult['status']==2) {
								echo 'ชำระเงินแล้ว';
							}
						?></div></td>

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