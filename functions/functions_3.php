<?php

function ageDetect($name,$surname,$age){
    if($age >= 18){
        echo 'This person has reached the age of 18 ';
    } else {
        echo 'This person has not reached the age of 18 ';
    }
}
ageDetect('Susan', 'White', 19);