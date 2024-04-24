<?php 

//variadic func reduce the code
//... spread parameter,it recieves value like array,u can send more THAN 1 VALUE

function sum(...$name){


echo $name[1];//1 index's param will be echoed



}
sum(10,20,30,40);//more than 1

?>