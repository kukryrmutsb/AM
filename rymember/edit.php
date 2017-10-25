<?php
//--edit.php

// ไฟล์เชื่อมต่อฐานข้อมูล
include_once("config.php");

// คำสั่ง SQL แสดงผลข้อมูลจากน้อยไปหามาก
$result = mysqli_query($mysqli, "SELECT * FROM $tblname ORDER BY id ASC");
?>

<!doctype html>
<html lang="en">
<head>	
	<title>Edit Data</title>
</head>

<body>
<b> แสดงสมาชิกทั้งหมด (Show Member Data) </b>
	<table width='60%' border='0'>
    <!-- พิมพ์ส่วนหัวตาราง -->
	<tr bgcolor='#CCCCCC'>
		<td width='25%'> Name </td>
		<td width='25%'> Surname </td>
		<td width='25%'> Age </td>
		<td width='25%'> Email </td>
		<td width='25%'> Edit </td>
	</tr>
	<?php 
	// เริ่มวนรอบแสดงข้อมูล
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['surname']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td> <a href=\"update.php?id=$res[id]\">Edit</a>  </td>"; // แก้ไขข้อมูล
	}
	?>
	</table>
	<hr>
	<a href="index.php">Back</a>
</body>
</html>
