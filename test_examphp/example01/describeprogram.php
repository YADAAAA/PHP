<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>อธิบายการทำงานของโปรแกรม</title>
</head>
<body>
    <div class="container my-3">
        <center><h5 class="text-primary">.*✿ อธิบายการทำงานของโปรแกรมการขายสินค้าออนไลน์ ✿*.</h5></center><br>
        <p>&nbsp;&nbsp;1) 63-060216-1003-9&nbsp;&nbsp;นางสาว ยาดา สาระสมแสง&nbsp;&nbsp;ตอนที่1&nbsp;&nbsp;ลำดับที่2</p>
        <p>&nbsp;&nbsp;2) ชื่อโปรแกรม : โปรแกรมการขายสินค้าออนไลน์</p>
        <p>&nbsp;&nbsp;3) ชื่อฐานข้อมูล : sellonline</p>
        <p>&nbsp;&nbsp;4) ฐานข้อมูล sellonline ของโปรแกรมประกอบด้วยตาราง ดังนี้</p>

        <br><p>&nbsp;&nbsp;-   ตารางประเภทสินค้า ประกอบด้วย attribult ดังนี้</p><br>
        
        <table class="table">
            <thead>
                <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Attribute Name</th>
                <th scope="col">Detail</th>
                <th scope="col">Data Type</th>
                <th scope="col">Key</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>typrid</td>
                <td>รหัสประเภทสินค้า</td>
                <td>int</td>
                <td>pimary key</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>typename</td>
                <td>ชื่อประเภทสินค้า</td>
                <td>varchar(20)</td>
                <td>-</td>
                </tr>
            </tbody>
        </table>
        <br>

        <br><p>&nbsp;&nbsp;-   ตารางสินค้า ประกอบด้วย attribult ดังนี้</p><br>
        <table class="table">
            <thead>
                <tr class="table-primary">
                <th scope="col">#</th>
                <th scope="col">Attribute Name</th>
                <th scope="col">Detail</th>
                <th scope="col">Data Type</th>
                <th scope="col">Key</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>productid</td>
                <td>รหัสสินค้า</td>
                <td>int</td>
                <td>pimary key</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>typeid</td>
                <td>รหัสประเภทสินค้า</td>
                <td>int</td>
                <td>foreign key</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>productname</td>
                <td>ชื่อสินค้า</td>
                <td>varchar(20)</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row">4</th>
                <td>quantity</td>
                <td>จำนวนสินค้า</td>
                <td>int</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row">5</th>
                <td>costprice</td>
                <td>ราคาทุน/หน่วย</td>
                <td>float</td>
                <td>-</td>
                </tr>
                <tr>
                <th scope="row">6</th>
                <td>sellprice</td>
                <td>ราคาขาย/หน่วย</td>
                <td>float</td>
                <td>-</td>
                </tr>
            </tbody>
        </table>
        <br>

        <p>&nbsp;&nbsp;5) โปรแกรมสามารถทำงานได้ ดังนี้</p>
        <p>&nbsp;&nbsp;- ประเภทสินค้าสามารถ เพิ่ม แก้ไข ลบ และค้นหาได้</p>
        <p>&nbsp;&nbsp;- สินค้าสามารถ เพิ่ม แก้ไข ลบ และค้นหาได้</p>
        <p>&nbsp;&nbsp;- ออกรายการสินค้าคงเหลือของแต่ละประเภทได้</p>
        <br>
        
        <center>
        <a href="menu.php" class="btn btn-primary">กลับไปที่หน้าแรก</a>
        </center>
        <br>
    <div>
</body>
</html>
