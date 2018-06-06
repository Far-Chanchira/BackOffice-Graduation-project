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
<body class="body">

<?php include'../header.php'; ?>

<div class="div">
<center>
<h1>สมัครสมาชิก</h1>
</center>


  <form class="form" action="save_addm.php" method="post" enctype="multipart/form-data" name="form" memberid="form">
  <hr class="line">
  
    <label for="txtname">ชื่อ :</label>
    <input type="text" memberid="name" name="txtname" placeholder="ชื่อ..">

    <label for="txtlastname">นามสกุล :</label>
    <input type="text" memberid="lastname" name="txtlastname" placeholder="นามสกุล..">

    <label for="txtaddress">ที่อยู่ :</label>
    <textarea memberid="txtaddress" name="txtaddress" placeholder="ที่อยู่.." style="height:150px"></textarea>
    
    <label for="txtsubdistrict">ตำบล :</label>
    <input type="text" memberid="subdistrict" name="txtsubdistrict" placeholder="ตำบล..">
    
    <label for="txtdistrict">อำเภอ :</label>
    <input type="text" memberid="district" name="txtdistrict" placeholder="อำเภอ..">
 
    <label for="txtphone">เบอร์โทรศัพท์ :</label>
    <input type="text" memberid="phone" name="txtphone" placeholder="เบอร์โทรศัพท์..">
    
    <label for="txtusername">Username :</label>
    <input type="text" memberid="username" name="txtusername" placeholder="Username..">
    
    <label for="txtpassword">Password :</label>
    <input type="text" memberid="password" name="txtpassword" placeholder="Password..">
    
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
