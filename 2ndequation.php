<?php
$a = 8;
$b = 6;
$c = 2;
echo "Solutiile pentru ecuatia de gradul al 2-lea sunt: ";
$delt = pow(-b,2)-4 * a * c;
$x1 = (-b + sqrt($delt)) / ( 2 * a );
echo $x1;
echo " ";
$x2 = (-b - sqrt($delt)) / ( 2 * a );
echo $x2;
?>