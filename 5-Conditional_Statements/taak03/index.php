<!DOCTYPE html>

<?php
$test1 = 3;
$test2 = 6;

if($test1 == $test2) {
    echo "gelijk";
    echo "<br>";
}
else {
    echo "ongelijk";
    echo "<br>";
}

if($test1 != $test2) {
    echo "ongelijk";
    echo "<br>";
}
else {
    echo "gelijk";
    echo "<br>";
}

if($test1 === $test2) {
    echo "identiek";
    echo "<br>";
}
else {
    echo "niet identiek";
    echo "<br>";
}

if($test1 > $test2) {
    echo "groter";
    echo "<br>";
}
else {
    echo "kleiner";
    echo "<br>";
}

if($test1 < $test2) {
    echo "kleiner";
    echo "<br>";
}
else {
    echo "groter";
    echo "<br>";
}

if($test1 >= $test2) {
    echo "groter of gelijk aan";
    echo "<br>";
}
else {
    echo "kleiner of gelijk aan";
    echo "<br>";
}

if($test1 <= $test2) {
    echo "kleiner of gelijk aan";
    echo "<br>";
}
else {
    echo "groter of gelijk aan";
    echo "<br>";
}
?>

</html>