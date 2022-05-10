<?php
require('dbconnect.php');

$username = "pranjapol";
$surname = "suriyachai";


$sql = "SELECT * FROM employees WHERE fname = '$username' AND lname = '$surname' ";
$result =mysqli_query($conn,$sql);
$count = mysqli_num_rows($result); // จำนวนแถว

echo $count;

for($i=0;$i<$count;$i++){
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    echo "รหัสพนักงาน: ".$row["id"]."<br>";
    echo "ชื่อ: ".$row["fname"]."<br>";
    echo "นามสกุล: ".$row["lname"]."<br>";
    echo "เพศ: ".$row["gender"]."<br>";
    echo "ทักษะ: ".$row["skills"]."<br>";
    echo "<hr>";
}



?>