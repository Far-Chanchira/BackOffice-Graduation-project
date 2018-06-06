<?php
include('../connectdb.php');

$txtname=$_POST["txtname"];
$txtlastname=$_POST["txtlastname"];
$txtaddress=$_POST["txtaddress"];
$txtsubdistrict=$_POST["txtsubdistrict"];
$txtdistrict=$_POST["txtdistrict"];
$txtphone=$_POST["txtphone"];
$txtusername=$_POST["txtusername"];
$txtpassword=$_POST["txtpassword"];


$strSQL = "UPDATE member SET ";
$strSQL .= "name = '$txtname' ";
$strSQL .= ",lastname = '$txtlastname' ";
$strSQL .= ",address = '$txtaddress' ";
$strSQL .= ",subdistrict = '$txtsubdistrict' ";
$strSQL .= ",district = '$txtdistrict' ";
$strSQL .= ",phone = '$txtphone' ";
$strSQL .= ",username = '$txtusername' ";
$strSQL .= ",password = '$txtpassword' ";
$strSQL .= "WHERE memberid = '".$_GET["memberid"]."' ";
$objQuery = mysql_query($strSQL);

if($objQuery)
{
	header("Location:http:selectm.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='selectm.php'>ดูข้อมูล</a>";
}
mysql_close($objConnect);
?>
<meta charset="utf-8">