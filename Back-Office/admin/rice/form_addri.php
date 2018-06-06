<!DOCTYPE html>
<meta charset="utf-8">
<html>
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<style>
input[type=text], select,textarea  {
    width: 100%;
    padding: 12px 20px;
    margin-top: 10px;
	margin-bottom: 30px;
    display: inline-block;
    border: 1px solid #7ee9cb;
    border-radius: 4px;
    box-sizing: border-box;
	font-family: 'Athiti', sans-serif;
	font-size: 16px;
}

input[type="file"] {
    width: 100%;
    padding: 12px 20px;
    margin-top: 10px;
	margin-bottom: 30px;
    display: inline-block;
    border: 1px solid #7ee9cb;
    border-radius: 4px;
    box-sizing: border-box;
	font-family: 'Athiti', sans-serif;
	font-size: 16px;
}

input[type=submit] {
    width: 20%;
    background-color: #58a38e;
    color: white;
    padding: 10px 10px;
    margin-left: 335px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: 'Athiti', sans-serif;
	font-size: 18px;
}

input[type=submit]:hover {
    background-color: #64baa2;
}

input[type=reset] {
    width: 20%;
    background-color: #58a38e;
    color: white;
    padding: 10px 10px;
    margin-left: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	font-family: 'Athiti', sans-serif;
	font-size: 18px;
}

input[type=reset]:hover {
    background-color: #64baa2;
}

.div {
   
    background-color: #FFF;
    padding: 5px 0px 50px;
	margin-top: 10px;
	margin-left: 180px;
	margin-right: 180px;
	margin-bottom: 100px;
	font-family: 'Athiti', sans-serif;
}

.form{
	margin-left: 200px;
	margin-right: 200px;
	
	}
	
.body{
	background: #FFF;
	margin: 0;
	
	}
.line{
	margin-bottom: 100px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	}
	
</style>

<?php
	
	mysql_connect("localhost","zp10290","3yJ4W!-e-h") or die(mysql_error());
	mysql_select_db("zp10290_project");
?>

<body class="body">

<?php include'../header.php'; ?>

<div class="div">

<h2>เพิ่มข้อมูลพันธุ์ข้าว</h2>

<hr class="line">

  <form class="form" action="save_addri.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
 
 
    <label for="txtricename">ชื่อพันธุ์ข้าว :</label>
    <input type="text" id="txtricename" name="txtricename" placeholder="ชื่อพันธุ์ข้าว..">
    
    
    <label for="txtcategoryid">ประเภท :</label>
    <select id="txtcategoryid" name="txtcategoryid">
    <option>กรุณาเลือกประเภท</option>
    <?php
    $query = "select * from category";
    $results = mysql_query($query);

    while ($rows = mysql_fetch_assoc(@$results)){ 
    ?>
    <option value="<?php echo $rows['categoryid'];?>"><?php echo $rows['categoryname'];?></option>

    <?php
    } 
    ?>
    </select>


    <label for="txtremarkable">ลักษณะเด่น :</label>
    <textarea id="txtremarkable" name="txtremarkable" placeholder="ลักษณะเด่น.." style="height:150px"></textarea>
    
    
    <label for="txtgeneral">ลักษณะทั่วไป :</label>
    <textarea id="txtgeneral" name="txtgeneral" placeholder="ลักษณะทั่วไป.." style="height:150px"></textarea>
    
    
    <label for="txtarea">พื้นที่แนะนำ :</label>
    <textarea id="txtarea" name="txtarea" placeholder="พื้นที่แนะนำ.." style="height:150px"></textarea>
    
    
    <label for="txtprice">ราคา :</label>
    <input type="text" id="txtprice" name="txtprice" placeholder="ราคา..">
    
    
    <label>
	<span>รูปภาพ</span>
	<input type="file" name="fileupload" id="fileupload" /> 
	</label>
    

    <input type="submit" value="ตกลง"onclick="myFunction()">
    
    
<script>
function myFunction() {
    alert("บันทึกข้อมูลเรียบร้อย");
}
</script>


    <input name="Reset" type="reset" value="ยกเลิก">
  </form>
</div>

</body>
</html>
