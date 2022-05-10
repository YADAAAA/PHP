<?php 
    session_start(); //เรียกฟังก์ชั่นsession_start() เพื่อเริ่มใช้งํานsession
?>

นี่คือไฟล์ session_register2.php
<br>
<br>

<?php 
    echo "ค่ําของตัวแปร SESSIONของ myname คือ " . $_SESSION['myname'];
?>
