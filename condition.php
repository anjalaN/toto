<?php

$weapons = ['fists', 'whip', 'gun'];
$indyWeapon=$weapons[rand(0,2)];
$opponentWeapon = [rand(0,2)];


// le pistolet bat le poing mais perd contre le fouet
// le poing bat le fouet mais perd contre le pistolet
// le fouet bat le pistolet mais perd contre le poing


	switch ($opponentWeapon) {
        case [0]:
            echo 'gun';
            break;

        case [1]:
            echo 'fists';
            break;

        case [2]:
            echo 'whip';
            break;
    }

?>
