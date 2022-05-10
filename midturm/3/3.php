<!--Fibonacci Number function-->

<html>  
<body align="center">  
    <form method="POST"> Input :  
        <input type="number" name="number">  
        <input type="submit" value="Submit">  
    </form>

    <?php
    function fibonacci($number){
        $fib = [1,0] ;
        echo ("0 ") ;
        for($i = 0 ; $i < $number ; $i++) {
            $next = array_sum($fib) ;
            array_shift($fib) ;
            array_push($fib,$next) ;
            echo $next.(" ") ;
        }
    }
    
    function show_form(){
        if (isset($_POST['number'])){
            $number = $_POST["number"] ;
            $result = fibonacci($number) ;
            echo $result ;
        }
    }
    show_form() ;
    ?>

</body>  
</html>  
