<?php
//--delete2.php

// ไฟล์เชื่อมต่อฐานข้อมูล
include("config.php");

// รับฟิลด์รหัส id จาก  url
$id = $_GET['id'];

// ทำการลบข้อมูลแถวที่เลือกออกจากตาราง อ้างอิงโดยใช้ฟิลด์  id
$result = mysqli_query($mysqli, "DELETE FROM $tblname WHERE id=$id");

// Redirect กลับไปยังไฟล์ delete.php
header("Location:delete.php");
?>

