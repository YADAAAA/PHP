<?php
require('database.php');

$typeid = $_GET["idemp"];

$sql = "DELETE FROM type_product WHERE typeid = $typeid";

$result = mysqli_query($conn, $sql);
if($result){
    header("location:type.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
}
?>