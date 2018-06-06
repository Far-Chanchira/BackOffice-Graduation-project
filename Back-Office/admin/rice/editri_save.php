<html>
<head>
<title></title>
</head>
<body>
<?

		//*** Update Record ***//
		include('../connectdb.php');

	$txtricename=$_POST["txtricename"];
	$txtcategoryid=$_POST["txtcategoryid"];
	$txtremarkable=$_POST["txtremarkable"];
	$txtgeneral=$_POST["txtgeneral"];
    $txtarea=$_POST["txtarea"];
	$txtprice=$_POST["txtprice"];
	

	$strSQL = "UPDATE rice SET ";
	$strSQL .= "ricename = '$txtricename' ";
	$strSQL .= ",categoryid = '$txtcategoryid' ";
	$strSQL .= ",remarkable = '$txtremarkable' ";
	$strSQL .= ",general = '$txtgeneral' ";
    $strSQL .= ",area = '$txtarea' ";
	$strSQL .= ",price = '$txtprice' ";

	$strSQL .= "WHERE id = '".$_GET["id"]."' ";
	$objQuery = mysql_query($strSQL);	
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("myfile/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE rice ";
			$strSQL .=" SET img = '".$_FILES["filUpload"]["name"]."' WHERE id = '".$_GET["id"]."' ";
			$objQuery = mysql_query($strSQL);		

		}
	}
			if($objQuery)
{
	header("Location:http:selectri.php");
}
else
{
	echo"ไม่สามารถแก้ไขข้อมูลได้<br>";
	echo"<a href='selectri.php'>ดูข้อมูล</a>";
}

	mysql_close($objConnect);
?>
</body>
</html>