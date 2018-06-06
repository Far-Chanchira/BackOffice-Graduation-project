 <?php   
 header("content-type:text/javascript;charset=utf-8");    
 $con=mysql_connect('localhost','zp10290','3yJ4W!-e-h')or die(mysql_error());    
 mysql_select_db('zp10290_project')or die(mysql_error());   
 mysql_query("SET NAMES UTF8"); 
 $orderdate = $_POST['orderdate'];  
 $list = $_POST['list'];  
 $number = $_POST['number'];
 $price = $_POST['price'];  
 $memberid= $_POST['memberid'];
 $id= $_POST['id'];     
 $sql="INSERT INTO orderlist (orderdate,list,number,price,memberid,id) VALUES ('$orderdate','$list','$number','$price','$memberid','$id')";   
 $res=mysql_query($sql);   
 $arr = array('orderid' => mysql_insert_id()."");  
 print('['.json_encode($arr).']');   
 mysql_close();   
 ?>   