<?php
$objConnect = mysql_connect(
"edu1.pathosting.com","zp10290","3yJ4W!-e-h") or die("ไม่สารมารถเชื่อมต่อฐานข้อมูล");
$objDB = mysql_select_db("project");
mysql_query("SET NAMES utf8");

?>