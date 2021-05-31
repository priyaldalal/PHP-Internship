<?php
//Method 1
$a[0] = 10;
$a['c'] = "Cmputer";
$a['php'] = "Web Development";
$a[10] = "TEN";
$a[50] = 50.50
//Method 2
//Alwase use this method to create an array
$a = array(
     0 => 10,
    "c" => "Computer",
    "php" => "Web Development",
    10 => "TEN",
    50 => 50.50
);
//Print A Value
echo "C For ".$a['c'];

foreach ($a as $value){
    echo "<br/>Value is $value";
}
foreach ($a as $key => $value){
    echo "<br/>Key is <b>$key</b>Value is <b>$value</b>";
}
?>