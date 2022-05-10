<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result =mysqli_query($conn,$sql);

while($row = mysqli_fetch_row($result)){
    echo "รหัสพนักงาน: ".$row[0]."<br>";
    echo "ชื่อ: ".$row[1]."<br>";
    echo "นามสกุล: ".$row[2]."<br>";
    echo "เพศ: ".$row[3]."<br>";
    echo "ทักษะ: ".$row[4]."<br>";
    echo "<hr>";
}

// while($row = mysqli_fetch_assoc($result)){
//     echo "รหัสพนักงาน: ".$row["id"]."<br>";
//     echo "ชื่อ: ".$row["fname"]."<br>";
//     echo "นามสกุล: ".$row["fname"]."<br>";
//     echo "เพศ: ".$row["gender"]."<br>";
//     echo "ทักษะ: ".$row["skills"]."<br>";
//     echo "<hr>";
// }

?>