<?php
$conkey=mysqli_connect("localhost","root","","ust1");
?>
<!DOCTYPE html>
<html>
<head>
	<title>REMINDER</title>
	<style type="text/css">
		input{
			width: 80%;
			display: block;
			margin-left: auto;
			margin-right: auto;
			margin-top: 15px;
			margin-bottom: 15px;
			text-align: center;
		}
		#rem{
			height:45px; 
		}
	</style>
</head>
<body>
	<center>
	<form method="post">
	<table border="1">
		<tr>
			<th>ADD REMINDER</th>
		</tr>
		<tr>
			<td><input type="text" name="uname" placeholder="FULL NAME" required=""></td>
		</tr>
		<tr>
			<td><input type="email" name="uemail" placeholder="EMAILID" required=""></td>
		</tr>
		<tr>
			<td><input type="date" name="remdate" required=""></td>
		</tr>
		<tr>
			<td><input type="text" name="rem" placeholder="REMINDER" id="rem" required=""></td>
		</tr>
		<tr>
			<th><button type="submit" name="sub">ADD</button></th>
		</tr>
	</table>
</form>
</center>
</body>
</html>
<?php
	if(isset($_POST['sub'])){
		$uname=$_POST['uname'];
		$uemail=$_POST['uemail'];
		$rem_date=$_POST['remdate'];
		$rem_msg=$_POST['rem'];
		$sql="insert into rem(id,uname,uemail,rem_date,rem_msg) values('','$uname','$uemail','$rem_date','$rem_msg')";
		if(mysqli_query($conkey,$sql)){
			echo "<script>alert('REMINDER ADDED SUCCESSFULLY');window.location='view_reminder.php';</script>";
		}
	}
?>