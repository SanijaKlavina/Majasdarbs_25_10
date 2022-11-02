<?php
$people = [
    [
        "name" => "Twobie",
        "surname" => "Brown",
        "age" => 27,
        "birthday" => "21.05.1995"
    ],
    [
        "name" => "Susan",
        "surname" => "White",
        "age" => 48,
        "birthday" => "5.09.1974"
    ],
    [
        "name" => "Henry",
        "surname" => "Mann",
        "age" => 73,
        "birthday" => "19.12.1948"
    ]

];

for($i = 0; $i < count($people); $i++){
    echo $people[$i];
}