<?php
include('../connectdb.php');

$txttitle=$_POST["txttitle"];
$txtcontent=$_POST["txtcontent"];


$strSQL = "UPDATE news SET ";
$strSQL .= "title = '$txttitle' ";
$strSQL .= ",content = '$txtcontent' ";

$strSQL .= "WHERE newsid = '".$_GET["newsid"]."' ";
$objQuery = mysql_query($strSQL);

if($objQuery)
{
	header("Location:http:selectne.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='selectne.php'>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>
<meta charset="utf-8">