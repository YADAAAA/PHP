<!--Armstrong Number function-->

<html>  
<body align="center">  
    <form method="POST"> Input :  
        <input type="number" name="number">  
        <input type="submit" value="Submit">  
    </form>  

    <?php
    function armstrong($number){
        $i = $number ;  
        $sum = 0 ;  
        for($i = $number ; $i != 0 ; $i = $i / 10){
            $x = $i % 10 ;
            $sum = $sum + $x* $x * $x ;
        }

    if( $number == $sum ){return "OutPut : Armstrong Number" ;}
    else{return "Output : Not Armstrong Number" ;}
    }
    
    function show_form(){
        if (isset($_POST['number'])){
            $number = $_POST["number"] ;
            $result = armstrong($number) ;
            echo $result;
        }
    }
    show_form();
    ?>

</body>  
</html>  
