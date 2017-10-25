<?php
//--login.php

if($username=="admin") {
	echo "ยินดีต้อนรับ" .$_POST['username'] ."คุณคือผู้ดูแลระบบ";
	echo "<br><a href='admin/index.php'>ลิ้งค์ไปหน้า Backend </a>";
}
	elseif($username=="chanakorn") {
		echo "ยินดีต้อนรับคุณ" .$_POST['username']."คุณคือสมาชิดชมรม </a>";
		echo "<br><a href='home/index.php'> ลิ้งค์ไปหน้า Frontend</a>";
	}
	else {
		echo "ยินดีต้อนรับคุณ" .$_POST['username']."คุณคือผู้ใช้งานทั่วไป";
		echo "<br><a href='../'>ลิ้งค์ไปหน้า User (myproject)</a>";
	}
	
?>