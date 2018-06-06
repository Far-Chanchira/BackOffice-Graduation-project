<?php
class Paginator{
	var $items_per_page;
	var $items_total;
	var $current_page;
	var $num_pages;
	var $mid_range;
	var $low;
	var $high;
	var $limit;
	var $return;
	var $default_ipp;
	var $querystring;
	var $url_next;

	function Paginator()
	{
		$this->current_page = 1;
		$this->mid_range = 7;
		$this->items_per_page = $this->default_ipp;
		$this->url_next = $this->url_next;
	}
	function paginate()
	{

		if(!is_numeric($this->items_per_page) OR $this->items_per_page <= 0) $this->items_per_page = $this->default_ipp;
		$this->num_pages = ceil($this->items_total/$this->items_per_page);

		if($this->current_page < 1 Or !is_numeric($this->current_page)) $this->current_page = 1;
		if($this->current_page > $this->num_pages) $this->current_page = $this->num_pages;
		$prev_page = $this->current_page-1;
		$next_page = $this->current_page+1;


		if($this->num_pages > 10)
		{
			$this->return = ($this->current_page != 1 And $this->items_total >= 10) ? "<a class=\"paginate\" href=\"".$this->url_next.$this->$prev_page."\">&laquo; Previous</a> ":"<span class=\"inactive\" href=\"#\">&laquo; Previous</span> ";

			$this->start_range = $this->current_page - floor($this->mid_range/2);
			$this->end_range = $this->current_page + floor($this->mid_range/2);

			if($this->start_range <= 0)
			{
				$this->end_range += abs($this->start_range)+1;
				$this->start_range = 1;
			}
			if($this->end_range > $this->num_pages)
			{
				$this->start_range -= $this->end_range-$this->num_pages;
				$this->end_range = $this->num_pages;
			}
			$this->range = range($this->start_range,$this->end_range);

			for($i=1;$i<=$this->num_pages;$i++)
			{
				if($this->range[0] > 2 And $i == $this->range[0]) $this->return .= " ... ";
				if($i==1 Or $i==$this->num_pages Or in_array($i,$this->range))
				{
					$this->return .= ($i == $this->current_page And $_GET['Page'] != 'All') ? "<a title=\"Go to page $i of $this->num_pages\" class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" title=\"Go to page $i of $this->num_pages\" href=\"".$this->url_next.$i."\">$i</a> ";
				}
				if($this->range[$this->mid_range-1] < $this->num_pages-1 And $i == $this->range[$this->mid_range-1]) $this->return .= " ... ";
			}
			$this->return .= (($this->current_page != $this->num_pages And $this->items_total >= 10) And ($_GET['Page'] != 'All')) ? "<a class=\"paginate\" href=\"".$this->url_next.$next_page."\">Next &raquo;</a>\n":"<span class=\"inactive\" href=\"#\">&raquo; Next</span>\n";
		}
		else
		{
			for($i=1;$i<=$this->num_pages;$i++)
			{
				$this->return .= ($i == $this->current_page) ? "<a class=\"current\" href=\"#\">$i</a> ":"<a class=\"paginate\" href=\"".$this->url_next.$i."\">$i</a> ";
			}
		}
		$this->low = ($this->current_page-1) * $this->items_per_page;
		$this->high = ($_GET['ipp'] == 'All') ? $this->items_total:($this->current_page * $this->items_per_page)-1;
		$this->limit = ($_GET['ipp'] == 'All') ? "":" LIMIT $this->low,$this->items_per_page";
	}

	function display_pages()
	{
		return $this->return;
	}
}
?>



<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
<style>
.body1{
	background: #FFF;
	margin: 0;

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
	width: 130px; 
	overflow:hidden;
	
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
tr {
	word-wrap:break-word;
	
   }

th {
    background-color: #64baa2;
    color: white;
   }
tr:hover{
	background: #bef4e5; 
	}
.line{
	
	margin-bottom: 40px;
	color: #7ee9cb;
    background-color: #7ee9cb;
    height: 1px;
	}	
.iconadd{
	margin-left: 970px;
	}

/*----------------------------------------------------------------------------*/

.paginate {
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	}
	a.paginate {
	border: 1px solid #64baa2;
	padding: 8px 16px;
	text-decoration: none;
	color: #64baa2;
	}
	
	a.paginate:hover {
	background-color: #64baa2;
	color: #FFF;
	text-decoration: underline;
	}
	a.current {
	border: 1px solid #64baa2;
	font: bold .7em Arial,Helvetica,sans-serif;
	padding: 8px 16px;
	cursor: default;
	background:#64baa2;
	color: #FFF;
	text-decoration: none;
	}
	span.inactive {
	border: 1px solid #999;
	font-family: Arial, Helvetica, sans-serif;
	font-size: .7em;
	padding: 8px 16px;
	color: #999;
	cursor: default;
	}
		
</style>
</head>

<?php
	include("../connectdb.php");
	$strSQL = "SELECT * FROM rice
	inner join category
	on rice.categoryid=category.categoryid ";
			   
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
$Num_Rows = mysql_num_rows($objQuery);

$Per_Page = 7;   // Per Page

$Page = $_GET["Page"];
if(!$_GET["Page"])
{
	$Page=1;
}

$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
	$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
	$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
	$Num_Pages =($Num_Rows/$Per_Page)+1;
	$Num_Pages = (int)$Num_Pages;
}

$strSQL .="order by id ASC LIMIT $Page_Start , $Per_Page";
$objQuery  = mysql_query($strSQL);
?>

<body class="body1">

<?php include'../header.php'; ?>

<div class="div1">
<center>
<h1>พันธุ์ข้าว</h1>
</center>

<hr class="line">



    <a class="iconadd" href="form_addri.php?id=<?php echo $objResult["id"];?>">
    <img src = "img/add.png" width="40" height="40"
    onmouseover="this.src='img/add1.png'"
    onmouseout="this.src='img/add.png'" /></a>



<table>
  <tr>
    <th width="20%">รูปพันธุ์ข้าว</th>
    <th width="12%">รหัสพันธุ์ข้าว</th>
    <th width="25%">ชื่อพันธุ์ข้าว</th>
    <th width="8%">ประเภท</th>
    <th width="8%">ราคา</th>
    <th width="25%"></th>
  </tr>
  
  <?php
  	while($objResult = mysql_fetch_array($objQuery))
		{
		?>
  
  
  <tr>
    <td><img src="myfile/<?=$objResult["img"];?>" width="70" height="70"></td>
    
    <td><div class="div2"><?php echo $objResult["id"];?></div></td>
    <td><div class="div2"><?php echo $objResult["ricename"];?></div></td>
    <td><div class="div2"><?php echo $objResult["categoryname"];?></div></td>
    <td><div class="div2"><?php echo $objResult["price"];?></div></td>
    
    <td>
    <a href="viewri.php?id=<?php echo $objResult["id"];?>"> 
    <img src="img/view.png" width="40" height="40"
    onmouseover="this.src='img/view1.png'"
    onmouseout="this.src='img/view.png'" /></a>
    
  
    <a href="editri.php?id=<?php echo $objResult["id"];?>">
    <img src = "img/edit.png" width="40" height="40"
    onmouseover="this.src='img/edit1.png'"
    onmouseout="this.src='img/edit.png'" /></a>
    
    <a href="delete.php?id=<?php echo $objResult["id"];?>" title="delete" onclick="if(confirm('ยืนยันการลบ')) return true; else return false;"><img src = "img/delete.png" width="40" height="40" 
    onmouseover="this.src='img/delete1.png'"
    onmouseout="this.src='img/delete.png'" /></a>
    
    
    
    
 
    </a> 

    </td>
  </tr>
  
  <?php
		}
		?>
        
</table>



<center>
<br>
<br>
ทั้งหมด <?php echo $Num_Rows;?> ข้อมูล &raquo;

<?php

$pages = new Paginator;
$pages->items_total = $Num_Rows;
$pages->mid_range = 10;
$pages->current_page = $Page;
$pages->default_ipp = $Per_Page;
$pages->url_next = $_SERVER["PHP_SELF"]."?QueryString=value&Page=";

$pages->paginate();

echo $pages->display_pages()
?>
<?php
mysql_close($objConnect);
?>		
</center>


</div>
</body>
</html>