<?php
//--edit.php

// ไฟล์เชื่อมต่อฐานข้อมูล
include_once("config.php");

// ตรวจสอบการป้อนข้อมูล
if(isset($_POST['update']))
{	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
	$age = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// ตรวจสอบฟิลด์ที่ไม่ได้ป้อนข้อมูล พร้อมข้อความแจ้งเตือน
	if(empty($name) || empty($surname) || empty($age) || empty($email)) {	
			
		if(empty($name)) {
			echo "<font color='red'> กรุณณาป้อนชื่อ (Name) </font><br/>";
		}

		if(empty($surname)) {
			echo "<font color='red'> กรุณณาป้อนนามสกุล (Surname) </font><br/>";
		}
		
		if(empty($age)) {
			echo "<font color='red'> กรุณาป้อนอายุ (Age) </font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'> กรุณาป้อนอีเมล (Email)</font><br/>";
		}		
	} else {	

	// แก้ไขข้อมูลในตาราง
		$result = mysqli_query($mysqli, "UPDATE $tblname SET name='$name',surname='$surname',age='$age',email='$email' WHERE id=$id");
		
		// Redirect กลับไปยังไฟล์ edit.php
		header("Location: edit.php");
	}
}
?>
<?php
// รับฟิลด์รหัส id จาก  url
$id = $_GET['id'];

// เอ็กซิคิวต์คำสั่ง SQL อ้างอิงโดยใช้ฟิลด์  id
$result = mysqli_query($mysqli, "SELECT * FROM $tblname WHERE id=$id");

// เริ่มวนรอบแสดงข้อมูล
while($res = mysqli_fetch_array($result))
{
	// เริ่มวนรอบแสดงข้อมูล
	$name = $res['name'];
	$surname = $res['surname'];	
	$age = $res['age'];
	$email = $res['email'];
}
?>
<!doctype html>
<html lang="en">
<head>	
	<title>Edit Data</title>
</head>

<body>
<h3>แก้ไขข้อมูลสมาชิก (Edit Member)</h3>
	<form name="form1" method="post" action="update.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" size="30" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Surname</td>
				<td><input type="text" name="surname" size="30" value="<?php echo $surname;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" size="30" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" size="30" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="แก้ไขข้อมูล">
				<input type="reset" name="reset" value="  ยกเลิก  "> </td>
			</tr>
		</table>
	</form> 
	<hr>
	<a href="edit.php"> Back </a>
</body>
</html>
