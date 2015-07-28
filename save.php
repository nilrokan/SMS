<?php
//require_once('mysql_connect.php');
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('something went wrong '.mysql_error());
		
	} 
	mysql_select_db("sms",$con);
	$s_id=$_POST['s_id'];
	$s_name=$_POST['s_name'];
	$s_mail =$_POST['s_mail'];

	mysql_query(" INSERT INTO  tbl_student VALUES
		(' $s_id',  '$s_name',  '$s_name')");
	echo "Insert Successfully !!";
?>