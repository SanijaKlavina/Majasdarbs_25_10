<?php
$person = [

    [   'Susan',
        'White',
        19],
    [   'Toby',
        'White',
        10],
];
function ageDetect($person){
    foreach($person as $eachPerson){
        if($eachPerson > 18){
            echo 'Has reached 18.';
        } else {
            echo 'Has not reached 18.';
        }
        echo PHP_EOL;
    }


}
ageDetect($person[0]);

