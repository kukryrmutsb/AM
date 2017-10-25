<?php
//--mysql_insert.php
// กำหนดตัวแปรเพื่อนำไปใช้งาน
$DBhostname = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname		= "ry_mydb";
$tblname	= "member";


// เริ่มติดต่อฐานข้อมูล
$link = mysqli_connect($DBhostname, $DBusername, $DBpassword, $DBname);
 
// ตรวจสอบการเชื่อมต่อ
if($link === false){
    die("ERROR: ติดต่อฐานข้อมูลไม่ได้ " . mysqli_connect_error());
}
 
// คำสั่ง SQL ในการเพิ่มตาราง
$sql="INSERT INTO $tblname (id, name, surname, age, email) VALUES (1,'Arnut', 'Ruttanatirakul', 33,'arnut.r@rmutsb.ac.th')";

// เอ็กซิคิวต์คำสั่ง SQL
if(mysqli_query($link, $sql)){
    echo " เพิ่มข้อมูลเข้าตาราง <font color='red'>$tblname</font> สำเร็จ";
} else{
    echo "ERROR: เอ็กซิคิวต์คำสั่ง SQL ไม่ได้" . mysqli_error($link);
}
 
// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($link);
?>