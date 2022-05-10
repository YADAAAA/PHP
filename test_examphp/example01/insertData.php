<?php

require('database.php');

$productID = $_POST["typeid"];
$productNAME = $_POST["typename"];

$sql = "INSERT INTO type_product(typeid,typename) VALUES('$productID','$productNAME')";

$result = mysqli_query($conn,$sql);

if($result){
    header("location:type.php");
    exit(0);
}else{
    echo mysqli_errors($conn);
}

?>