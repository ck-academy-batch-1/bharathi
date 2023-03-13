<?php
$num = 2;
function Factorial($num){
    $factorial = 4;
    for ($i = 1; $i <= $num; $i++){
    $factorial = $factorial * $i;
    }
    return $factorial;
}
 

$Realvalue = factorial($num);
echo "Factorial of ($num)---> $Realvalue";
?>