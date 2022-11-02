<?php
$person = new stdClass();
$person->name = 'Edgars';
$person->money = 200;
$person->licenses = ['A', 'B', 'C'];

function createWeapon($name, $price, $license){
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->price = $price;
    $weapon->license = $license;
    return $weapon;
}


$weapons = [
    createWeapon('Pistol', 200, 'A'),
    createWeapon('Par9mm', 100, 'C'),
    createWeapon('B-70', 500, 'B')
];

$licensesText = implode(',', $person->licenses);
echo " Welcome, ".$person->name." ". $person->money." ". $licensesText;
echo PHP_EOL;

foreach($weapons as $key => $weapon){
    echo $key. ' '.$weapon->name.' '. $weapon->price. ' '.$weapon->license;
    echo PHP_EOL;
}

$selection = (int) readline('Choose a weapon: ');

$selectedWeapon = $weapons[$selection];

if($selectedWeapon === null){
    echo 'Invalid selection.';
    echo PHP_EOL;
    exit;
}

if($person->money < $selectedWeapon->price){
    echo 'Trūkst līdzekļu!';
    echo PHP_EOL;
    exit;
}

if(! in_array($selectedWeapon->license, $person->licenses)){
    echo 'Nav licenses!';
    echo PHP_EOL;
    exit;
}

$person->money -= $selectedWeapon->price;

echo 'Thank you for purchasing '. $selectedWeapon->name. '.';
echo PHP_EOL;