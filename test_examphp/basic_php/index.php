<?php session_start() ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>learn php</title>
</head>
<body>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Name : <input type="text" name="name">
        <input type="submit">
        <br><br>
    </form>

    <form action="test_get.php" method="get">
        User : <input type="text" name="user"><br>
        Email : <input type="text" name="email"><br>
        <input type="submit">
        <br><br>
    </form>

    <form action="test_post.php" method="post">
        User : <input type="text" name="user"><br>
        Email : <input type="text" name="email"><br>
        <input type="submit">
        <br><br>
    </form>

    <?php include('header.php'); ?>

    <section>
        <p></p>
    </section>

    <?php include('footer.php'); ?>

    <?php
    
        echo "Hello World" ;    echo"<br>";
        Echo "Hello World" ;    echo"<br>";
        ECHO "Hello World" ;    echo"<br>";    echo"<br>";

        $color = "Purple" ; //ประกาศตัวแปร
        $COLOR = "Yellow" ;
        echo "My Van Is " . $color . "<br>" ;//. คือการเชื่อมสตริง ( $color .= $COLOR )
        echo "My Fan Is " . $COLOR . "<br>" ;    echo"<br>";

        //การคอมเม้นท์แบบบรรทัดเดียว
        #การคอมเม้นแบบบรรทัดเดียวเหมือนกัน
        /*การคอมเม้นท์แบบหลายบรรทัด*/

        $name = "Yada" ;
        $age = 20 ;
        $heigh = "153.5" ;

        echo "My Name Is $name" ;    echo"<br>";//สามารถใส่ตัวแปรใน "" ได้เลยจ้า
        echo "My Age Is " . $age ;    echo"<br>";//แต่ใช้ echo , ดีกว่าในphp
        print "My Heigh Is " . $heigh ;    echo"<br>";    echo"<br>";//print ก็ใช้ได้เหมือนกัน

        $x = 5 ;//global scope
        function myfunc() {
            $x = 10 ;
            echo "Local output : $x <br>" ;//ประกาศภายในฟังก์ชั่น=ถูกใช้ในฟังก์ชั่น
        }
        myfunc() ;//เรียกใช้งานฟังก์ชั่น
        echo "Global output : $x <br> <br>" ;

        $a = 5 ;
        $b = 10 ;
        function gbkw() {
            global $a, $b ;//คือ global เรียกตัวแปรด้านนอกมาใช้งานในฟังก์ชั่น
            echo $a + $b , "<br> <br>" ;//ผลลัพท์ที่ได้คือ15 ใช้อันนี้ , ได้ด้วย
        }
        gbkw() ;

        /*
         PHP Data Type
         - String
         - Integer
         - Float
         - Boolean
         - Array
         - Object
         - NULL
        */

        #ฟังก์ชั่น var_dump ไว้เช็คชนิดข้อมูลของตัวแปร และจำนวน ใช้ได้ทุกดาต้าไทป์
        var_dump($a, $b, $x) ;    echo"<br>";
        var_dump($color, $COLOR) ;    echo"<br>";
        var_dump($name, $age, $heigh) ;    echo"<br>";    echo"<br>";

        #ชนิดข้อมูลแบบ Object
        class car {
            function car() {//คลาสในฟังก์ชั่นเรียกว่าเมธอด
                $this -> model = "BMW" ;
            }
        }
        $mycar = new car() ;//สร้างตัวแปรอ๊อปเจ็กต์
        echo $mycar -> model ;//แสดงข้อความด้านในฟังก์ชั่นในอ๊อปเจ็กต์

        #ค่าคงที่ใน PHP define(name, value, case-insensitive boolean); และมัยเป็น Global
        define("greeting", "Welcome To Business") ;
        echo greeting ;    echo"<br>";//ค่าที่ได้ออกมาก็คือ บนนี้ ^
        
        define("cars", ["Bmw", "Ford", "Mazda"]) ;
        echo cars[1] ;    echo"<br>";    echo"<br>";//เรียกใช้ constance ในตัวแปรอาเรย์
        
        #PHP OPERETOR
        //เครื่องหมายทั่วไป  +  -  *  /  %  **(ยกกำลัง)
        //การให้ค่าต่างๆ  +=  -=  *=  /=  %=
        //การเปรียบเทียบ  ==  ===(เท่ากับค่าและชนิด)  !=  <>(ไม่เท่ากัน)  !==  >  >=  <=  <=>
        //การเพิ่มลดจำนวน  ++$x  $x++  --$x  $x--
        //ตรรกศาสตร์  and  or  xor  &&(and)  ||(or)  !

        #<=> น้องมาใน PHP เวอร์ชั่น 17.x.xx หล่ะ
        echo ($a <=> $b) ;    echo"<br>";//return -1 เพราะค่า a น้อยกว่า b เลยตั้งว่ารีเทิร์นเป็น -1
        echo ($a <=> $a) ;    echo"<br>";//ถ้าเท่ากันจะ return ออกมาเป็น 0
        echo ($b <=> $a) ;    echo"<br>";//return +1 เพราะค่า b มากกว่า a เลยตั้งว่ารีเทิร์นเป็น +1

        #การใช้ xor ต่อให้อีกตัวเป็นเท็จมันก็จะทำงาน แต่ว่าตัวใดตัวนึงต้องถูกเด้อ
        if ($a == 5 xor $b == 5) {
            echo"<br>";
            echo "จริงๆแล้ว a เท่ากับ 5 , แต่ว่า b ไม่เท่ากับ 5" ;
            echo"<br>";
        }

        #การใช้อาเรย์ร่วมกับ operator
        $arr1 = array("a1" => "White", "a2" => "Black") ;
        $arr2 = array("a3" => "Red", "a4" => "Blue") ;
        print_r($arr1 + $arr2) ;    echo"<br>";//การรวมกัน กลายเป็นอาเรย์ตัวเดียว //print_r เพื่อแสดงค่าอาเรย์
        var_dump($arr1 == $arr2) ;    echo"<br>";//bool(false) เพราะค่า arr1 และ arr2 มันไม่เท่ากัน
        var_dump($arr1 != $arr2) ;    echo"<br>";//bool(true) เพราะค่า arr1 และ arr2 มันไม่เท่ากันจริงๆ

        #การเช็คเงื่อนไข if ทำงานเพื่อเงื่อนไขเป็นจริง else
        $rain = true ;    echo"<br>";
        if ($rain) { echo "You Dont Go Outside";    echo"<br>";} 
        else { echo "You Can Go Outside";    echo"<br>";}

        #switch case เวลามีเงื่อนไขหลายๆตัว
        $favcar = "Bmw" ;
        switch($favcar) {
            case "Ferrari" :
                echo "Your Favorit Car Is Ferrsri <br>";
            break;
            case "Ford" :
                echo "Your Favorit Car Is Ford <br>";
            break;
            case "Honda" :
                echo "Your Favorit Car Is Honda <br>";
            break;
            case "Bmw" :
                echo "Your Favorit Car Is Bmw <br>";
            break;
            default :
                echo "Your Favorit Car Is Neither <br>" ;//default ถ้าไม่ตรงกับเงื่อนไขไหนเลข    
        }

        #LOOP IN PHP
        //while ทำงานเื่อเงื่อนไขเป็นจริง
        $num1 = 1 ;
        while($num1 <= 10){
            echo "The Number Is $num1 <br>" ;
            $num1 *= 2 ;
        }

        echo"<br>";

        //do while ทำก่อนแล้วค่อยเช็คเงื่อนไข
        $num2 = 2 ;
        do{
            echo "The Number Is $num2 <br>" ;
            $num2++ ;
        }while ($num2 > 5) ;

        echo"<br>";

        //for ลูปที่เรารู็ว่ามันจะทำงานกี่ครั้ง
        for($i=0; $i<=10; $i++){
            echo "The Number Is $i <br>" ;
        }

        echo"<br>";

        //foreach loop ลูปผ่านอาเรย์
        $arr3 = array("Bmw", "Ford", "Honda", "Ferrari") ;
        foreach($arr3 as $value){//ลองใส่ arr1 as $key => $value
            echo "$value <br>" ;//echo "$key : $value <br>" ;
        }

        echo"<br>";

        #การสร้างฟังก์ชั่น สามารถเรียกใช้ได้หลายครั้ง
        function writeMsg(){
            echo "Hello This Is Message <br>" ;
        }
        writeMsg() ; //เรียกใช้ฟังก์ชั่น

        function family($fname){
            echo "$fname Smith <br>" ;
        }
        family("John") ; //เรียกใช้ฟังก์ชั่น
        family("Kate") ; //เรียกใช้ฟังก์ชั่น
        family("Whie") ; //เรียกใช้ฟังก์ชั่น

        echo"<br>";

        #array in php
        //ฟังก์ชั่น count กับ array เช่นเราอยากรู้จำนวนข้อมูล
        echo count($arr3) ;    echo"<br>";//ออกมาเป็น 4 คือจำนวนที่อยู่ในอาเรย์
        
        #ชนิดของอาเรย์
        //1. Indexed Arrays = เหมือนกับ arr3 เรียกใช้ arr3[0] สามารถใช้ count() และใช้ for loop
        $arr3len = count($arr3) ;
        for($i=0; $i<$arr3len; $i++){
            echo $arr3[$i]; //ตำแหน่งอาเรย์
            echo"<br>";
        }
        echo"<br>";
        //2. Associative Array = เป็นอาเรย์ที่ใช้ name key เขียนแบบ arr1, arr2
        $arr4 = array("black" => "#000000", "white" => "#FFFFFF") ;
        foreach($arr1 as $name => $value){
            echo "Name Keys : $name, Value : $value" ;
            echo"<br>";
        } 
        echo"<br>";
        //3. Multdiimensional Array = เป็นอาเรย์หลายมิติ
        // Name     | Stock     | Sold
        // iphone   | 10        | 5
        // ipad     | 6         | 3
        // ipod     | 8         | 4
        $apple = array(
            array("iphone", 10, 5),
            array("ipad", 6, 3),
            array("ipod", 8, 4),
        ) ;
        echo $apple[0][0] . " : In Stock " . $apple[0][1] . ", Sold " . $apple[0][2] ;    echo"<br>";
        echo $apple[1][0] . " : In Stock " . $apple[1][1] . ", Sold " . $apple[1][2] ;    echo"<br>";
        echo $apple[2][0] . " : In Stock " . $apple[2][1] . ", Sold " . $apple[2][2] ;    echo"<br>";
        echo"<br>";
        for($row=0; $row<3; $row++){
            echo "Row Number $row" ;
                for($col=0; $col<3; $col++){
                    echo "<li>" . $apple[$row][$col] . "</li>" ;
                }
        }
        echo"<br>";

        #super globle variable = ตัวแปรที่เราสามารถเข้าถึงมันได้ตลอดเวลา สามารถเรียกใช้ได้ทุกที่ในไฟล์
        //1. $GLOBALS
        function addition() {
            $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'] ;
        }
        addition();
        echo $c ;//ยังไม่ได้สร้างตัวแปรก็จริงแต่ก็สามารถ echo ออกมาได้หล่ะ
        echo"<br>";
        //2. $_SERVER
        echo $_SERVER['PHP_SELF'] ;    echo"<br>";//เป็นการขอที่อยู่ไฟล์ของเรานั้นเองจ้า
        echo $_SERVER['SERVER_NAME'] ;    echo"<br>";//ชื่อเซิฟเวอร์ของเรา
        echo $_SERVER['HTTP_HOST'] ;    echo"<br>";//โฮสต์ของเราใช่ปะนะ?
        echo $_SERVER['HTTP_USER_AGENT'] ;    echo"<br>";//ราบละเอียดของเครื่องเรา
        echo $_SERVER['SCRIPT_NAME'] ;    echo"<br>";//ชื่อที่อยู่ไฟล์ปัจจุบัน?
        //3. $_REQUEST
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_REQUEST['name'] ;
            if(empty($name)){
                echo "Name Is Empty" ;
            } else {
                echo $name ;
            }
        }
        //4. $_GET เห็นข้อมูลผ่านทางURL
        //5. $_POST ไม่เห็นข้อมูลผ่านทางURL
        //6. $_SESSION ใช้เก็บข้อมูลข้ามเพจข้ามหน้าเว็ปได้ ต้องประกาศ session_start();
        $_SESSION['Fname'] = "Yada " ;
        $_SESSION['Sname'] = "Sarasomseang " ;
    ?> 

</body>
</html>
