<meta charest="utf-8"/>
<?php
include('../connectdb.php');//เชื่อมฐานข้อมูล

$txtusername = $_REQUEST["txtusername"];
$txtpassword = $_REQUEST["txtpassword"];
$txtstatus = $_REQUEST["txtstatus"];

//กำหนดตัวแปร

$strSQL = "INSERT INTO login (username,password,status)
VALUES('$txtusername','$txtpassword','$txtstatus')";

$objQuery = mysql_query($strSQL) or die("Error in query;$strSQL");

if($objQuery){
	header("Location:http:selectad.php");
}
else{
	echo"ไม่สามารถบันทึกข้อมูลได้<br>";
	echo"<a href='form_addad.php'>ลองใหม่</a>";
}
?>