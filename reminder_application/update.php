<?php
$conkey=mysqli_connect("localhost","root","","ust1");
$id=$_REQUEST['q'];
$sql="select * from rem where id='$id'";
$q=mysqli_query($conkey,$sql);
$arr=mysqli_fetch_array($q);
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
			<th>EDIT REMINDER</th>
		</tr>
		<tr>
			<td><input type="text" name="uname" value="<?php echo $arr['uname'];?>"></td>
		</tr>
		<tr>
			<td><input type="email" name="uemail" value="<?php echo $arr['uemail'];?>"></td>
		</tr>
		<tr>
			<td><input type="date" name="remdate" value="<?php echo $arr['rem_date'];?>"></td>
		</tr>
		<tr>
			<td><input type="text" name="rem" value="<?php echo $arr['rem_msg'];?>" id="rem"></td>
		</tr>
		<tr>
			<th><button type="submit" name="sub">UPDATE</button></th>
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
		$sql_update="update rem set uname='$uname',uemail='$uemail',rem_date='$rem_date',rem_msg='$rem_msg' where id='$id'";
		if(mysqli_query($conkey,$sql_update)){
			echo "<script>alert('REMINDER UPDATED SUCCESSFULLY');window.location='view_reminder.php';</script>";
		}
	}
?>