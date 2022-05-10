<?php

    require('dbconnect.php');
    $sql = "SELECT * FROM employees ORDER BY fname ASC";
    $result =mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    $order=1;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">รายชื่อพนักงาน</h1>
        <hr>
        <?php if($count>0){?>
            <form action="deleteTextField.php" class="form-group" method="POST">
                <label for="">รหัสพนักงาน</label>
                <input type="text" placeholder="ป้อนรหัสพนักงานเพื่อลบ" name="idemployee" class="form-control">
                <input type="submit" value="ลบข้อมูล" class="btn btn-danger my-2">
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>รหัสพนักงาน</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เพศ</th>
                        <th>ทักษะความสามารถ</th>
                        <th>แก้ไขข้อมูล</th>
                        <th>ลบข้อมูล</th>
                        <th>ลบข้อมูล (Checkbox)</th>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $order++ ?></td>
                        <td><?php echo $row["fname"] ?></td>
                        <td><?php echo $row["lname"] ?></td>
                        <td>
                            <?php 
                                if($row["gender"] == "male"){?>
                                ชาย
                            <?php } else if($row["gender"] == "female"){?>
                                หญิง
                            <?php } else{?>
                                อื่นๆ
                            <?php }?>
                        </td>

                        <td><?php echo $row["skills"] ?></td>
                        <td>
                            <a href="editForm.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">แก้ไข</a>
                        </td>
                        <td>
                            <a href="deleteQueryString.php?idemp=<?php echo $row["id"]; ?>" class="btn btn-danger"
                            onclick="return confirm('คุณต้องการลบข้อมูลนี้หรือไม่ ?')"
                            >ลบข้อมูล</a>
                            
                        </td>
                        <form action="multipleDelete.php" method="post">
                            <td>
                                <input type="checkbox" name="idcheckbox[]" value="<?php echo $row["id"];?>">
                            </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        <?php   } else{?>

            <div class="alert alert-danger">
                <b>ไม่มีข้อมูลพนักงานในระบบ</b>
            </div>

        <?php   } ?>
        <a href="insertForm.php" class="btn btn-success">บันทึกข้อมูลพนักงาน</a>
        <?php if($count>0){?>
            <input type="submit" value="ลบข้อมูล(checkbox)" class="btn btn-danger">
        <?php } ?>    
        </form>
        <button class="btn btn-primary" onclick="checkAll()">เลือกทั้งหมด</button>
        <button class="btn btn-warning" onclick="uncheckAll()">ยกเลิก</button>
    </div>
</body>

<script>
    //เลือกข้อมูลทั้งหมด
    function checkAll(){
        var form_element=document.forms[1].length;// 4
        for(i=0;i<form_element-1;i++){
            document.forms[1].elements[i].checked=true;
        }
    }
    function uncheckAll(){
        var form_element=document.forms[1].length;// 4
        for(i=0;i<form_element-1;i++){
            document.forms[1].elements[i].checked=false;
        }
    }

</script>




</html>

