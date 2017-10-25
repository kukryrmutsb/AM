<!doctype html>
<html lang="en">
<head>
	<title>Add Data</title>
</head>

<body>
	<h3>แบบฟอร์มเพิ่มข้อมูลสมาชิก (Add Member)</h3> 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" size="40" name="name"></td>
			</tr>
			<tr> 
				<td>Surame</td>
				<td><input type="text" size="40" name="surname"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" size="40" name="age"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" size="40" name="email"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="เพิ่มข้อมูล"> <input type="reset" name="reset" value=" ยกเลิก "> </td>
			</tr>
		</table>
	</form> 
	<hr>
	<a href="index.php"> Back </a>
</body>
</html>

