<?php
include('../connectdb.php');

$txtstatus=$_POST["txtstatus"];



$strSQL = "UPDATE orderlist SET ";
$strSQL .= "status = '$txtstatus' ";

$strSQL .= "WHERE orderid = '".$_GET["orderid"]."' ";
$objQuery = mysql_query($strSQL);

if($objQuery)
{
	header("Location:selector.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href=#>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>
<meta charset="utf-8">