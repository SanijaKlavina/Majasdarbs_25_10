<?php
$color = 255;
if($color > 0 && $color <= 50){
    echo 'black';
} else if ($color > 50 && $color <= 150) {
    echo 'gray';
} else {
    echo 'white';
}