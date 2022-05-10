<?php

    require('dbconnect.php');    

    $id_arr=$_POST["idcheckbox"];
    $multiple_id = implode(",",$id_arr);


    // in ลบหลายตัว
    $sql = "DELETE FROM employees WHERE id IN ($multiple_id)";

    $result = mysqli_query($conn, $sql);
    if($result){
        header("location:index.php");
        exit(0);
    }else{
        echo "เกิดข้อผิดพลาด";
    }

?>