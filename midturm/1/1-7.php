<!--round() function-->

<?php
echo(round(0.60) . "<br>") ;
echo(round(0.50) . "<br>") ;
echo(round(0.49) . "<br>") ;
echo(round(-5.50) . "<br>") ;
echo(round(-6.60) . "<br>") ;
?>

<?php
echo(round(5.12345, 2) . "<br>") ;
echo(round(6.678, 2) . "<br>") ;
echo(round(7.456, 2) . "<br>") ;
?>

<?php
echo(round(1.5, 0, PHP_ROUND_HALF_UP) . "<br>") ;
echo(round(-1.5, 0, PHP_ROUND_HALF_UP) . "<br>") ;

echo(round(1.5, 0, PHP_ROUND_HALF_DOWN) . "<br>") ;
echo(round(-1.5, 0, PHP_ROUND_HALF_DOWN) . "<br>") ;

echo(round(1.5, 0, PHP_ROUND_HALF_EVEN) . "<br>") ;
echo(round(-1.5, 0, PHP_ROUND_HALF_EVEN) . "<br>") ;

echo(round(1.5, 0, PHP_ROUND_HALF_ODD) . "<br>") ;
echo(round(-1.5, 0, PHP_ROUND_HALF_ODD)) ;
?>
