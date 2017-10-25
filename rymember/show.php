<?php
//--show.php
// ไฟล์เชื่อมต่อฐานข้อมูล
include_once("config.php");

// คำสั่ง SQL แสดงข้อมูลทุกเรคคอร์ด
$result = mysqli_query($mysqli, "SELECT * FROM $tblname"); 

?>

<!doctype html>
<html lang="en">
<head>	
	<title>Show Member Data</title>
</head>

<body>
<b>แสดงสมาชิกทั้งหมด (Show Member Data)</b> <br />
	<table width='50%' border=0>
    <!-- พิมพ์ส่วนหัวตาราง  -->
	<tr bgcolor='#ccffcc'>
		<td>Name</td>
		<td>Surname</td>
		<td>Age</td>
		<td>Email</td>
		
	</tr>
	<?php 
	// เริ่มวนรอบแสดงข้อมูล
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['surname']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		
	}
	?>
	</table>
	<hr>
	<a href="index.php"> Back </a>
</body>
</html>
