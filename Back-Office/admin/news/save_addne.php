<meta charest="utf-8"/>
<?php
include('../connectdb.php');//เชื่อมฐานข้อมูล

$txttitle = $_REQUEST["txttitle"];
$txtcontent = $_REQUEST["txtcontent"];

//กำหนดตัวแปร

$strSQL = "INSERT INTO news (title,content)
VALUES('$txttitle','$txtcontent')";

$objQuery = mysql_query($strSQL) or die("Error in query;$strSQL");

if($objQuery){
	header("Location:http:selectne.php");
}
else{
	echo"ไม่สามารถบันทึกข้อมูลได้<br>";
	echo"<a href='form_addne.php'>ลองใหม่</a>";
}
?>