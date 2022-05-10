<?php

require('database.php');
$sql = "SELECT * FROM type_product";
$result =mysqli_query($conn,$sql);

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
    <form action="searchData.php" class="form-group" method="POST">
        <label for="">รหัสประเภทสินค้า</label>
        <input type="text" placeholder="ป้อนรหัสประเภทสินค้า" name="productname" class="form-control">
        <input type="submit" value="search" class="btn btn-dark my-2">
    </form>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th>รหัสประเภทสินค้า</th>
                    <th>ชื่อประเภทสินค้า</th>
                    <th>ลบข้อมูล</th>
                    <th>แก้ไขข้อมูล</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row["typeid"]; ?></td>
                    <td><?php echo $row["typename"]; ?></td>  
                    <td>
                        <a href="deleteQueryString.php?idemp=<?php echo $row["typeid"]; ?>" class="btn btn-danger"
                        onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')"
                        >ลบข้อมูล</a>
                            
                    </td>
                    <td>
                        <a href="editForm.php?id=<?php echo $row["typeid"] ?>" class="btn btn-primary">แก้ไข</a>
                    </td>        
                </tr>
            </tbody>
            <?php } ?>
        </table>

    <br>
    <center>
    <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>
    <a href="menu.php" class="btn btn-primary">กลับไปที่หน้าแรก</a>
    </center>
    <br>
    </div>

</body>
</html>
