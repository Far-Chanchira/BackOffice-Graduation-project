<meta charset="utf-8">
<?php
include('../connectdb.php');

$strSQL = "DELETE FROM member ";
$strSQL .= "WHERE memberid = '".$_GET["memberid"]."' ";
$objQuery = mysql_query($strSQL);

mysql_close($objConnect);

if($objQuery)
{
	header("Location:http:selectm.php");
}
else
{
	echo"ไม่สามารถดูข้อมูลได้<br>";
	echo"<a href='selectm'.php>กลับไปหน้าหลัก</a>";
}
?>