<?php
function geefTienProcent()
{
    $koopPrijs = 75;
    $korting = 10;

    return '€' . $koopPrijs / $korting . "0";
}

echo geefTienProcent();
?>