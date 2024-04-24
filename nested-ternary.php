<?php 
$score=20;
$msg="";

$score >= 90 ? "A" :
($score > 80 ? "B" :
($score >= 70 ? "C" :
($score >= 60 ? "D" : "F")));

echo"Grade:$grade";


?>