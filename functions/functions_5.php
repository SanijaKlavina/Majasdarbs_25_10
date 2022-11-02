<?php
$fruits = [
    [
        'fruit' => 'apple',
        'weight'=> 4
    ],
    [
       'fruit' => 'banana',
       'weight'=> 12
    ],
    [
        'fruit' => 'pear',
        'weight'=> 6
    ]
];

/*foreach($fruits as $fruit){
    foreach($fruit as $value){
        if($fruit['weight'] > 10){
            echo 'Yes';
        } else {
            echo 'No';
        }
       //echo $value;
       //echo PHP_EOL;
    }

}*/
foreach($fruits as $fruit){
    foreach($fruit as $key => $value){
         IF($key == 'weight'){
             echo $value;
         }
        //echo $value;
        echo PHP_EOL;
    }

}
//echo $fruits[0]['weight'];

