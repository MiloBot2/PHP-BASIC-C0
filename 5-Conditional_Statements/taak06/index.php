<?php

$statement = 3;

if($statement == 1) {
    $ok = 58;
    
    if($ok > 50 && $ok % 2 == 0) {
        echo "het getal zit is groter dan 50 EN deelbaar door 2!";
    } else if($ok % 5 == 0) {
        echo "het getal is kleiner dan 50 EN deelbaar door 5!";
    } else {
        echo "het getal is kleiner dan 50 EN niet deelbaar door 5 en 2!";
    }
} else if($statement == 2) {
    $ok2 = 62;

    if($ok2 > 50 || $ok2 == 100) {
        echo "het getal zit is groter dan 50 OF gelijk aan 100!";
    } 
} else if($statement == 3) {
    $ok3 = 45;

    if($ok3 >= 34 xor $ok3 < -50) {
        echo "het getal is groter of gelijk aan 34 OF kleiner dan 50!";
    }
} else if($statement == 4) {
    $ok4 = 0.33;

    if(!$ok4 == 1) {
        echo "het getal is niet gelijk aan 1!";
    } else {
        echo "het getal is gelijk aan 1!";
    }
}
?>