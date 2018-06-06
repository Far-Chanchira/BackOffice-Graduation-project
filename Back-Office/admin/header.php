<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

<style>
.bodyhead{
	margin: 0;
	
	}
.navbar {
    list-style-type: none;
   	padding-bottom: 0;
    overflow: hidden;
    background-color: #FFF;
	-webkit-box-shadow: 2px 2px 3px -1px rgba(0,0,0,0.35);
	font-family: 'Prompt', sans-serif;
}
.logo {
	float: left;
	margin-left: 50px;
	color: #4b8b79;
	font-family: 'Dancing Script', cursive;
	}
ul.menu {
    list-style-type: none;
    padding: 0;
    overflow: hidden;
	
  
}

li.menu {
    float: right;
	margin-top: 0;
	padding-top: 20px;
	
	margin-right: 20px;
}

li.menu a:hover, .dropdown:hover .dropbtn {
    color: #64baa2;
}

li a, .dropbtn {
    display: inline-block;
    color: #535353;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	
}


li.dropdown {
    display: inline-block;
	float: right;
	margin-top: 20px;
	margin-right: 20px;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: #535353;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
	background-color: #f1f1f1;
	color: #64baa2;
	}

.dropdown:hover .dropdown-content {
    display: block;
}

/*------------------------------------------------*/

li.dropdown2 {
    display: inline-block;
	float: right;
	margin-right: 100px;
	margin-top: 12px;
}

.dropdown2-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
	
}

.dropdown2-content a { 
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown2-content a:hover {
	background-color: #f1f1f1;
	color: #64baa2;
	}

.dropdown2:hover .dropdown2-content {
    display: block;
}


</style>
</head>
<body class="bodyhead">
<div class="navbar">
  <li class="logo"><h1>Rice varieties</h1></li>
 
 
 <li class="dropdown2">
   <a href=""> 
    <img src="../img/img1.png" width="20" height="20"
    onmouseover="this.src='../img/img2.png'"
    onmouseout="this.src='../img/img1.png'" /></a>
 
  
  <div class="dropdown2-content">
      <a href="../admin/selectad.php">ผู้ดูแลระบบ</a>
      <a href="../login/logout.php">ออกจากระบบ</a>
    </div>
  </li>
  
  <li class="menu"><a href="../news/selectne.php">การประชาสัมพันธ์</a></li>
  
  <li class="menu"><a href="../chart/chart.php">สถิติ</a></li>
  
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ลูกค้า</a>
    <div class="dropdown-content">
      <a href="../member/form_addm.php">สมัครสมาชิก</a>
      <a href="../member/selectm.php">จัดการสมาชิก</a>
    </div>
  </li>

  
  <li class="menu"><a href="../rice/selectri.php">พันธุ์ข้าว</a></li>
  
  <li class="menu"><a href="../order/selector.php">รายการสั่งจอง</a></li>
  
  <li class="menu"><a href="../home.php">หน้าแรก</a></li>
  
 
</div>
</body>
</html>  
  
  
  
  
  







