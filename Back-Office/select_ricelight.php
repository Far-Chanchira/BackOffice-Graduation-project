<?php
   header('Access-Control-Allow-Origin: *');
   header('Content-Type: application/json; charset=utf8');
   // Define database connection parameters
$hn = 'localhost';
$un = 'zp10290';
$pwd = '3yJ4W!-e-h';
$db = 'zp10290_project';
$cs = 'utf8';

$con = mysql_connect($hn,$un,$pwd) or die('Cannot connect to server');
mysql_select_db($db,$con) or die('Cannot connect to db');
$result=  mysql_query('SELECT * FROM rice WHERE  categoryid=00001',$con) or die('Error query news');
$rices= array();
if (mysql_num_rows($result))
{
	while($rice = mysql_fetch_assoc($result))
	{
		$rices[]= $rice;
	}
}
echo json_encode($rices);

?>