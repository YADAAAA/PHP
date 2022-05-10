<?php

require('database.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ประเภทสินค้า</title>
</head>
<body>
    <br>
    <div class="container my-3">
    <form action="insertData.php" method="post">
            <div class="form-group">
                <label for="productID">รหัสสินค้า</label>
                <input type="text" name="typeid" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="productNAME">ชื่อสินค้า</label>
                <input type="text" name="typename" id="" class="form-control">
            </div>
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <a href="menu.php" class="btn btn-primary">กลับไปที่หน้าแรก</a>
    </form>

    <br>
    <center>
    </center>
    <br>
    </div>

</body>
</html>
