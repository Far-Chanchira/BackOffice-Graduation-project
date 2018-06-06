<meta charset="utf-8">
<?
$connection=mysql_connect("localhost","zp10290","3yJ4W!-e-h") or die("เชื่อมต่อฐานข้อมูลไม่ได้");
mysql_select_db("zp10290_project") or die("ไม่สามารถเลือกฐานข้อมูลได้");     
mysql_query("set character set utf8"); // กำหนดค่า character set ที่จะใช้แสดงผล
$q="SELECT *
FROM member
INNER JOIN orderlist
ON member.memberid = orderlist.memberid
INNER JOIN rice
ON rice.id = orderlist.id
INNER JOIN category
ON category.categoryid = rice.categoryid
WHERE status='3'
";
$qr=mysql_query($q);
$row_num=mysql_num_rows($qr);
$col_arr=array("orderdate","subdistrict","district","number","ricename","categoryname");
$col_num=count($col_arr);
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");;
header("Content-Disposition: attachment;filename=data.xls "); 
?>
<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>

 
<?php echo'<?mso-application progid="Excel.Sheet"?>';?>
 
<Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:o="urn:schemas-microsoft-com:office:office"
 xmlns:x="urn:schemas-microsoft-com:office:excel"
 xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet"
 xmlns:html="http://www.w3.org/TR/REC-html40">
 <Styles>
  <Style ss:ID="Default" ss:Name="Normal">
   <Alignment ss:Vertical="Bottom"/>
   <Borders/>
   <Font x:CharSet="222"/>
   <Interior/>
   <NumberFormat/>
   <Protection/>
  </Style>
 </Styles>
 <Worksheet ss:Name="รายงานการสั่งจอง">
  <Table ss:ExpandedColumnCount="<?=$col_num?>" ss:ExpandedRowCount="<?=$row_num+1?>" x:FullColumns="1"
   x:FullRows="1">
   <Row>
   <?php foreach($col_arr as $key=>$value){ ?>
    <Cell><Data ss:Type="String"><?=$value?></Data></Cell>
    <?php } ?>    
   </Row>
<?php
while($rs=mysql_fetch_array($qr)){
?>   
   <Row>
    <Cell><Data ss:Type="String"><?=$rs['orderdate']?></Data></Cell>
    <Cell><Data ss:Type="String"><?=$rs['subdistrict']?></Data></Cell>
    <Cell><Data ss:Type="String"><?=$rs['district']?></Data></Cell>
    <Cell><Data ss:Type="Number"><?=$rs['number']?></Data></Cell>
     <Cell><Data ss:Type="String"><?=$rs['ricename']?></Data></Cell>
      <Cell><Data ss:Type="String"><?=$rs['categoryname']?></Data></Cell>
           
   </Row>
<?php  }  ?>     
  </Table>
  <WorksheetOptions xmlns="urn:schemas-microsoft-com:office:excel">
   <Selected/>
   <ProtectObjects>False</ProtectObjects>
   <ProtectScenarios>False</ProtectScenarios>
  </WorksheetOptions>
 </Worksheet>
</Workbook>