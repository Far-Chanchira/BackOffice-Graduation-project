<meta charest="utf-8"/>
<?php
include('../connectdb.php');//เชื่อมฐานข้อมูล

$txtname = $_REQUEST["txtname"];
$txtlastname = $_REQUEST["txtlastname"];
$txtaddress = $_REQUEST["txtaddress"];
$txtsubdistrict = $_REQUEST["txtsubdistrict"];
$txtdistrict = $_REQUEST["txtdistrict"];
$txtphone = $_REQUEST["txtphone"];
$txtusername = $_REQUEST["txtusername"];
$txtpassword = $_REQUEST["txtpassword"];
//กำหนดตัวแปร

$strSQL = "INSERT INTO member (name,lastname,address,subdistrict,district,phone,username,password)
VALUES('$txtname','$txtlastname','$txtaddress','$txtsubdistrict','$txtdistrict','$txtphone','$txtusername','$txtpassword')";

$objQuery = mysql_query($strSQL) or die("Error in query;$strSQL");

if($objQuery){
	header("Location:http:selectm.php");
}
else{
	echo"ไม่สามารถบันทึกข้อมูลได้<br>";
	echo"<a href='form_addm.php'>ลองใหม่</a>";
}
?>