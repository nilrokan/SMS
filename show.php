<?php 
// Author : Osman Goni Nahid 
//don't modify please if u need create new for yourself thanks :)

$con=mysql_connect("localhost","root","");
	if(!$con){
		die('something went wrong '.mysql_error());
		
	} 
	mysql_select_db("sms",$con);
	$r = mysql_query("select * from tbl_student");
	
	echo "ID Name  Email <br>";
	while($row=mysql_fetch_array($r)){
		echo $row['id']."\t";
		echo $row['st_name']."\t";
		echo $row['st_email']."\t";
		echo "<br>";
	}
?>

