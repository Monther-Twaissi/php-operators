<?php

function isLeap($x){
    if($x % 4 == 0){
        if($x == 1700 || $x == 1900){
            echo "$x is a normal year";
        } else {
            echo "$x is a leap year";
        }
    }else {
        echo "$x is a normal year";
    }   
}
isLeap(1784);

echo "<br>"."**********************************"."<br>";

function season ($T) {
    if ($T < 20){
        echo "Winter Is Here";
    }else {
       echo "Beach Time, It's SUMMER";
    }
}
season(50);

echo "<br>"."**********************************"."<br>";

function sum($a,$b){
    if($a == $b){
        echo $a*3;
    }else {
        echo $a + $b ;
    }
}
sum(3,3);

echo "<br>"."**********************************"."<br>";

function absDeff($number){
    $number = abs($number);

    if($number > 100){
        echo $number - 100; 
    }else{
        echo 100 -$number;
    }
}
absDeff(-20);

echo "<br>"."**********************************"."<br>";

function is30 ($number1, $number2){
    if ($number1 == 30 || $number2 == 30 || $number1 + $number2 == 30){
        echo "true"; 
    }else {
        echo "false" ;
    } 
}
is30(30,15);

echo "<br>"."**********************************"."<br>";

function isMulti($number3) {
    if ($number3 % 3 == 0 || $number3 % 7 == 0){
        echo "Congrates, $number3 is a MULTI";
    }else{
        echo "$number3 is not a MULTI :'(";
    }
}
isMulti(7);

echo "<br>"."**********************************"."<br>";

$str = "if I am a developer";
$arr = explode(" ",$str);
if("if" === $arr[0]){
    echo "Unchanged";
} else{
    array_unshift($arr, "if");
    echo implode(" ",$arr);
}

echo "<br>"."**********************************"."<br>";

function inclusive($number4, $number5){
    if($number4 >= 100 && $number5 <= 200){
        echo "Both numbers are in the 100-200 range";
    }elseif($number4 >= 100 && $number4 <= 200){
        echo "$number4 is in the range of 100-200";
    }elseif($number5 >= 100 && $number5 <= 200){
        echo "$number5 is in the range of 100-200";
    }
}
inclusive(90, 150);

echo "<br>"."**********************************"."<br>";

function inBetween($number6, $number7) 
{
    if ($number6 >= 20 && $number6 <=50){
    if ( $number7 >= 20 && $number7 <=50){
    echo "One or more numbers are in between";
}else{
    echo "Numbers are not inclusive between 20 and 50";
   }
}}
inBetween(25,45);

echo "<br>"."**********************************"."<br>";

function maxNumber($number8, $number9, $number10){
    if($number8 >= $number9 && $number8 >= $number10){
        echo "$number8 is the largest";
    }elseif($number9 >= $number8 && $number9 >= $number10){

        echo "$number9 is the largest";
    }else{
        echo "$number10 is the largest";
    }
}
maxNumber(7,18,9);

echo "<br>"."**********************************"."<br>";
function isCloser($number11, $number12){
    $hundred1 = abs(100 - $number11);
    $hundred2 = abs(100 - $number12);
    if($hundred1 > $hundred2){
        echo "$number12 is closer!";
    }elseif ($hundred2 > $hundred1){
        echo "$number11 is closer!";
    }else {
        echo "0";
    }
}
isCloser(80,80);

echo "<br>"."**********************************"."<br>";

?>