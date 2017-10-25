<?php
//--config.php
/*
// mysql_connect("database-host", "username", "password")
$conn = mysql_connect("localhost","root","root") 
			or die("cannot connected");

// mysql_select_db("database-name", "connection-link-identifier")
@mysql_select_db("test",$conn);
*/

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

//$databaseHost = 'localhost';
//$databaseName = 'examdb';
//$databaseUsername = 'root';
//$databasePassword = 'rmutsb';

//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

//===========new========================
 // กำหนดตัวแปรเพื่อนำไปใช้งาน

$DBhostname = "localhost";
$DBusername = "root";
$DBpassword = "";
$DBname		= "ry_mydb";
$tblname	= "member";


// เริ่มติดต่อฐานข้อมูล
$mysqli = mysqli_connect($DBhostname, $DBusername, $DBpassword, $DBname);

// ตรวจสอบการเชื่อมต่อ
if($mysqli === false){
    die("ERROR: ติดต่อฐานข้อมูลไม่ได้ " . mysqli_connect_error());
}

 
?>
