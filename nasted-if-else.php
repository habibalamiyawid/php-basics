<?php 
$score=75;
$grade="...";
if($score>=90){
    $grade="A"; //reassign variable

}
else{

    if($score>=80)
    {
        $grade="B";
    }
    else{
        if($score>=70){
            echo"C";

        }
        else{
            echo"D";
        }
    }
}
echo "your Grade is $grade";
?>