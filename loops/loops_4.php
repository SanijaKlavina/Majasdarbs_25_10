<?php
$numbers = [2,3,13,24,27,41,45];

foreach($numbers as $value){
    if($value % 3 == 0){
       echo $value. " ";
    }
}