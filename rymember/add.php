<!doctype html>
<html lang="en">
<head>
	<title>Add Member</title>
</head>

<body>

<?php
//--add.php
// ไฟล์เชื่อมต่อฐานข้อมูล
include_once("config.php");

// ตรวจสอบการป้อนข้อมูล
if(isset($_POST['Submit'])) {	
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
		
		// กลับหน้าก่อนหน้านี้
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		// คำสั่ง SQL เพิ่มข้อมูลเข้าตารางข้อมูล
		$result = mysqli_query($mysqli, "INSERT INTO $tblname(name,surname,age,email) VALUES('$name','$surname','$age','$email')");
		
		//display success message
		echo "เพิ่มข้อมูลสมาชิกเข้าตาราง  <font color='red'> $tblname </font> สำเร็จ.";
		echo "<br/><hr><a href='index.php'>Back</a>";
	}
}
?>
</body>
</html>
