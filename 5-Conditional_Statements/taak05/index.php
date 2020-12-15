<?php
$score = 6;

switch($score)
{
    case 10:
        echo "Wow wat een fantastische score!";
        $score = 6;
    break;
    
    case 9:
        echo "Wow bijna alle punten nog 1 te gaan!";
        $score++;
    break;

    case 8:
        echo "Goed bezig, bijna alle punten!";
        $score++;
    break;

    case 7:
         echo "Ga zo door!";
         $score++;
    break;

    default:
    $score = 7;
    echo "Nog even oefenen dan haal je vast alle punten!";
}
?>