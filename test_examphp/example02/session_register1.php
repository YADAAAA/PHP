<?php
session_start(); //เรียกฟังก์ชั่นsession_start() เพื่อเริ่มใช้งํานsession
$myname = "สุรชัย";
session_register("myname");
?>

นี่คือไฟล์ session_register1.php
<br>
<br>
<a href="session_register2.php">คลิกตรงนี้เพื่อเปิดไฟล์ session_register2.php</a>
