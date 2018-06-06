<?php
include('../connectdb.php');

$txtusername=$_POST["txtusername"];
$txtpassword=$_POST["txtpassword"];


$strSQL = "UPDATE login SET ";
$strSQL .= "username = '$txtusername' ";
$strSQL .= ",password = '$txtpassword' ";

$strSQL .= "WHERE id = '".$_GET["id"]."' ";
$objQuery = mysql_query($strSQL);

if($objQuery)
{
	header("Location:http:selectad.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='selectad.php'>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>
<meta charset="utf-8">