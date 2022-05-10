<?php 
    session_start() ; 

    echo $_SESSION['Fname'] ;
    echo $_SESSION['Sname'] ;

    //session_unset() ;//เป็นการลบตัวแปร SESSION ทุกตัว
    //session_destroy() ;//ทำลายตัวแปร?ทั้งหมด
?>
