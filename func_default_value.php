<?php 
//function with default value
function sum($a,$b,$c=0){
 $n1=$a;
 $n2=$b;
 $n3=$c;
 echo $n1+$n2=$n3;



}

sum(300,400,333);
//if you don't pass c's value it wil execute with default value

?>