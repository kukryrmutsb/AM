<?php
  //--switch01.php
$username="webmaster";
switch($username)
  {
   case"managr":
        echo "ยินดีต้อนรับ $username คุณผู้จัดการ";
        break;
   case"admin":
        echo "ยินดีต้อนรับ $username คุณคือผู้ดูแลระบบ";
		break;
	case"webmaster":	
	    echo "ยินดีต้อนรับ $username คุณคือผู้ดูแลเว็บไซต์";
  	    break;
	echo "ยินดีต้อนรับ $username คุณคือผู้ใช้งาน";
		break;	
  }