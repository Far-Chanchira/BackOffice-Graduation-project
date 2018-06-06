<?php
session_start();
/*---------------- Connect ----------------*/
$con = mysqli_connect('localhost','zp10290','3yJ4W!-e-h') or die(mysql_error());
mysqli_select_db($con,'zp10290_project');
mysqli_query($con,'set names utf8');
date_default_timezone_set("Asia/Bangkok");
/*---------------- Variable ----------------*/
$sys_title = '';
$curdate = date("Y-m-d");
$curtime = date("H:i");

/*----------------------------------------*/
function s($cc,$string) {
	return mysqli_real_escape_string($cc,$string);
}
function thaidate($date) {
	$exdate = explode('-',$date);
	$date = $exdate[2].'/'.$exdate[1].'/'.$exdate[0];
	return $date;
}
function todate($date) {
	$exdate = explode('-',$date);
	$date = $exdate[0].'-'.$exdate[1].'-'.($exdate[2]+1);
	return $date;
}
function datediff($strDate1,$strDate2) { 
	return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  
}
function gotopage($url) {
	echo "<script language='javascript'>"; 
	echo " parent.window.location='".$url."'; ";
	echo "</script>";
}
function msgbox($text,$url) {
	echo "<script language='javascript'>"; 
	echo " alert('".$text."'); ";
	echo " parent.window.location='".$url."'; ";
	echo "</script>";
}
/*----------------------------------------*/
?>