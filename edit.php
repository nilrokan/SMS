<?php
	$con=mysql_connect("localhost","root","");
	if(!$con){
		die('something went wrong '.mysql_error());
		
	} 
	mysql_select_db("sms",$con);

	$r = mysql_query("SELECT * FROM tbl_student");
	
?>

<html>
	<body>
		<form action="edit_show.php" method ="post">
			<select name="sid">
				<option value="SELECTED"> Select StudentID</option>
				<?php
				while($row=mysql_fetch_array($r))
				{
				?>
				<option> <?php echo $row["id"];?> </option>
				<?php
				}
				?>
				</select>
		</form>
	</body>
</html>
