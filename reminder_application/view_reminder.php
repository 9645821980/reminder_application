<?php
	$conkey=mysqli_connect("localhost","root","","ust1");
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMINDERS</title>
	<style type="text/css">
		button{
			margin-bottom: 35px;
		}
	</style>
</head>
<body>
	<center>
		<button><a href="add_reminder.php">ADD NEW REMINDER</a></button>
	<table border="1">
		<tr>
			<th colspan="5">ALL REMINDERS</th>
		</tr>
		<tr>
			<th>NAME</th>
			<th>EMAIL ID</th>
			<th>DATE</th>
			<th>REMINDER</th>
			<th>OPERATIONS</th>
		</tr>
		<?php
		$sql="select * from rem";
		$q=mysqli_query($conkey,$sql);
		while($arr=mysqli_fetch_array($q)){


		?>
		<tr>
			<td><?php echo $arr['uname'];?></td>
			<td><?php echo $arr['uemail'];?></td>
			<td><?php echo $arr['rem_date'];?></td>
			<td><?php echo $arr['rem_msg'];?></td>
			<th><a href="update.php?q=<?php echo $arr['id'];?>">UPDATE</a></th>
		</tr>
		<?php
	}
	?>
	</table>
</center>
</body>px
</html>