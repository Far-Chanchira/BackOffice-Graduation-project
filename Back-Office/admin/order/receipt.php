<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	include 'function.inc.php';
	include("../connectdb.php");

	 $strSQL ="SELECT * 
	FROM member 
	INNER JOIN orderlist ON member.memberid = orderlist.memberid 
	WHERE orderid ='".$_GET["orderid"]."'";
	$objQuery = mysql_query($strSQL)  or die(mysql_error());
	$objResult = mysql_fetch_array($objQuery);

?>


<style>
h1{ 
	font-weight: normal;
  	font-size:18px;
  	line-height: 1.7em;
  	margin-bottom: 10px;
  	text-align: left;
 
	}

h2{ 
	font-weight: normal;
	font-size:18px;
  	line-height: 1.7em;
  	margin-bottom: 10px;
  	text-align: left;
 
	}
h3{
	font-size:16px;
	}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
	font-size:16px;
	
}
.a{
	margin-left:450px;
	}
.div1{
	width: 140px; 
	overflow:hidden;}
</style>
<body onload="window.print()">


<div>
<div>
<h2><center>จองพันธุ์ข้าว</center></h2>
            <h1>ใบเสร็จรับเงิน</h1>
			<p>เลขที่ : <?php echo $objResult["orderid"];?> ออกให้ ณ วันที่ <?php echo thaidate($curdate); ?></p>
			<p>ชื่อ:<?php echo $objResult["name"];?></p>
            <p>ที่อยู่ : <?php echo $objResult["address"];?></p>
            <p>เบอร์โทร: <?php echo $objResult["phone"];?></p>
		</div>
        
        
        
    
  <table width="84%" cellpadding="0" cellspacing="0" id="keywords">
  <tr>
  <hr ></hr>
    	<th  width="20%"><span>รหัสการจอง</span></th>
     	<th width="20%"><span>รายการ</span></th>
     	<th width="20%"><span>จำนวน/ถัง</span></th>
    	<th width="20%"><span>จำนวนเงิน</span></th>
        <th width="20%"><span>รวมเงิน</span></th>
  </tr>
  <?php
  $Total = 0;
$SumTotal = 0; 
  $strSQL = "SELECT * FROM orderlist WHERE orderid = '".$_GET["orderid"]."'";
$objQuery = mysql_query($strSQL)  or die(mysql_error());
$Total = $objResult["number"] * $objResult["price"];
		$SumTotal = $SumTotal + $Total;

while($objResult = mysql_fetch_array($objQuery))
{
	
	  ?> 

  <tr>
    	<td><div class="div1"><?php echo $objResult["memberid"];?></div></td>
		<td><div class="div1"><?php echo $objResult["list"];?></div></td>   
	 	<td><div class="div1"><?php echo $objResult["number"];?></div></td>
    	<td><div class="div1"><?php echo $objResult["price"];?></div></td>
        <td><?=number_format($Total,2);?></td>
  </tr>
      <?php
		}
		?>
  </table> 
<th><h3 class="a">รวมเงิน<?=number_format($SumTotal,2);?></h3></th>

</div>
</body>
</html>