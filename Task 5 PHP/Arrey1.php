<?php
//Array Method 1
$a[0] = 10;
$a[1] = 20;
$a[2] = 20.50;
$a[3] = "C";
$a[4] = "4";
//Array Method 2
$a[] = 10;
$a[] = 20;
$a[] = 20.50;
$a[] = "C";
$a[] = "4";
//Method 3
$a = array(10,20,30,"C","C++",10.50,"php");

//Print Array Value
echo $a[3];

//Print Whole Array
for($i=0;$i< count($a);$i++){
    echo "<be/>.$a[$i]";
}
//3 Inbuild function to debug array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>"; 
var_dump($a);
echo "<pre>"

?>