<?php
require('dbconnect.php');

$id = $_GET["idemp"];

$sql = "DELETE FROM employees WHERE id = $id";

$result = mysqli_query($conn, $sql);
if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
}
?>