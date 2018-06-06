<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<style>
.body1{
	background: #FFF;
	margin: 0;

	}
table {
    border-collapse: collapse;
    width: 100%;
	
	
}

th, td {
    text-align: left;
    padding: 15px;
	
}

tr:nth-child(even){
	background-color: #f2fcf9;
	}

th {
    background-color: #64baa2;
    color: white;
	
}
tr {
	word-wrap:break-word;
	
  }

tr:hover{
	background: #bef4e5; 
	}
.div1{
	margin-top: 5px;
	margin-left: 100px;
	margin-right: 100px;
	margin-bottom: 100px;
	background: #FFF;
	padding-left: 50px;
	padding-right: 50px;
	padding-bottom: 50px;
	padding-top: 20px;
	font-family: 'Athiti', sans-serif;
	}
	
.div2{
	width: 100px; 
	overflow: hidden;
	
	}
.line{
	
	margin-bottom: 40px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	}
.iconadd{
	margin-left: 945px;
	}
	
</style>
</head>
<?php
    include('../connectdb.php');
	$strSQL = "SELECT * FROM login ORDER BY id ASC";
	$objQuery = mysql_query($strSQL) or die("ไม่สามารถเชื่อมต่อได้");
?>
<body class="body1">

<?php include'../header.php'; ?>

<div class="div1">
<center>
<h1>ผู้ดูแลระบบ</h1> 
</center>
<hr class="line">


<a class="iconadd" href="form_addad.php?id=<?php echo $objResult["id"];?>">
    <img src = "img/add.png" width="40" height="40"
    onmouseover="this.src='img/add1.png'"
    onmouseout="this.src='img/add.png'" /></a>


<table width="125%">
  <tr>
    
    <th width="30%">ชื่อผู้ใช้</th>
    <th width="30%">รหัสผ่าน</th>
    <th width="23%">สถานะ</th> 
    <th width="17%"></th>
    
  </tr>
 
   <?php
  while($objResult = mysql_fetch_array($objQuery))
  {
  ?>
  
  <tr>
    <td><div class="div2"><?php echo $objResult["username"];?></div></td>
    <td><div class="div2"><?php echo $objResult["password"];?></div></td>
    <td><div class="div2"><?php echo $objResult["status"];?></div></td>
    
    <td>
	
  
    <a href="editad.php?id=<?php echo $objResult["id"];?>">
    <img src = "img/edit.png" width="40" height="40"
    onmouseover="this.src='img/edit1.png'"
    onmouseout="this.src='img/edit.png'" /></a>
    
    <a href="delete.php?id=<?php echo $objResult["id"];?>" 
    onClick="if(confirm('ยืนยันการลบ')) return true; else return false;">
    <img src = "img/delete.png" width="40" height="40" 
    onmouseover="this.src='img/delete1.png'"
    onmouseout="this.src='img/delete.png'" />
    
   
 
    </a> 
    
    
    </td>
    
     
  </tr>
  
  <?php
  }
  ?>
  
</table>
</div>
</body>
</html>
