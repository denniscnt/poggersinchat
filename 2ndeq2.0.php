<?php
echo "Introducetii valori pentru a,b si c: ";
$a = readline("a= ");
readline($a);
$b = readline("b= ");
readline($b);
$c = readline("c= ");
readline($c);
$delt = pow(-b,2)-4 * a * c;
$x1 = (-b + sqrt($delt)) / ( 2 * a );
echo $x1;
echo " ";
$x2 = (-b - sqrt($delt)) / ( 2 * a );
echo $x2;
?>