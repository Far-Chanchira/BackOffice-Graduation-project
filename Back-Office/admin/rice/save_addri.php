<?php
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],"myfile/".$_FILES["fileupload"]["name"]))
{
	echo "Upload Complete<br>";
	
	include ('../connectdb.php');
	$strSQL = "INSERT INTO rice ";
	$strSQL .="(ricename, categoryid, remarkable, general, area, price, img) VALUES ('".$_POST["txtricename"]."', '".$_POST["txtcategoryid"]."', '".$_POST["txtremarkable"]."', '".$_POST["txtgeneral"]."', '".$_POST["txtarea"]."', '".$_POST["txtprice"]."' ,'".$_FILES["fileupload"]["name"]."')" ;
	$objQuery = mysql_query($strSQL);
}

{
	header("Location:http:selectri.php");
}

?>