<?php
  //--if03.php
  $name="manager";
  if($name=="manager")
  {
    echo"ยินดีต้อนรับ <font color='red'>$name </font> คุณผู้จัดการ<br>";
	echo"<a href='http://www.arnut.com'>ไปเว็บ arnut.com </a>";
  }elseif ($name==" admin ")
  {
   echo"ยินดีต้อนรับ<font color='blue'>$name </font> คุณคือผู้ดูแลระบบ";
  }elseif ($name==" webmaster ")
  {
	echo"ยินดีต้อนรับ<font color='yellow'>$name </font>  คุณคือผู้ดูแลเว็ปไซต์";  
  }else
  {
	echo"ยินดีต้อนรับ<font color='pink'>$name </font> คุณคือผู้ใช้งาน" ; 
  }
?>