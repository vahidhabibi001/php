<?php
            // while

$numbers = array(12,12,13,14,15,55) ;
$sum = 0 ;
$i = 0 ;
$max = -1 ;
$min = 21 ;

while ($i<sizeof($numbers)){
    $sum =+ $numbers[$i];
    if ($max < $numbers[$i]){
        $max = $numbers[$i] ;
    }
    if ($min > $numbers[$i]){
    $min = $numbers[$i] ;
    }
    $i++ ;
    $avg = $sum / sizeof($numbers) ;
}            

echo "avg : $avg <br>" ;
echo "min : $min <br>" ;
echo "max : $max <br>" ;


?>