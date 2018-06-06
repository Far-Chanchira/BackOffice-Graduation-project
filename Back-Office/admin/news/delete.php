<meta charset="utf-8">
<?php
include('../connectdb.php');

$strSQL = "DELETE FROM news ";
$strSQL .= "WHERE newsid = '".$_GET["newsid"]."' ";
$objQuery = mysql_query($strSQL);

mysql_close($objConnect);

if($objQuery)
{
	header("Location:http:selectne.php");
}
else
{
	echo"ไม่สามารถดูข้อมูลได้<br>";
	echo"<a href='selectne'.php>กลับไปหน้าหลัก</a>";
}
?>