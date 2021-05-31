<?php

$arr = array('php','c','c++','java','Android');
echo count($arr);
?>
<?php
$arr = array("C","php","c","android","php","java");
$newarr = array_count_values($arr);
foreach ($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong> ";
}
?>
<?php
$myarray = array(1,2,3,4,5);
echo array_sum($myarray);
?>
<?php
$myarray = array(1,2,3,4,5);
echo array_product($myarray);
?>
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse($arr);
print_r($revarr);
?>
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp = in_array('php',$arr);
echo $temp;
?>
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr);//Returns Array Index
echo $arr[$indexofarray];
?>
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand($arr,2);//Returns Array Index
foreach ($indexofarray as $key => $value)
{
echo "<br />$key - <strong>" . $arr[$value] . "</strong>";
}
?>
<?php
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
?>
<?php
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
?>
<?php
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
?>
<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>
<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
krsort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}
?>
<?php
$myArray = array("Football", "Baseball", "Hockey", "Tennis",
"Boxing");
shuffle($myArray); // Shuffle the array
foreach ($myArray as $key => $value) {
echo "<br /> $value ";
}
?>
<?php
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists('a',$arr);
?>
<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case($arr,CASE_UPPER);
print_r($uppercase);
?>
<?php
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr1, $arr2);
print_r($NewVar);
?>
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
?>
<?php
$name = "akash";
$subject = "php";
$arr = compact("name", "subject");
print_r($arr);
?>
<?php
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip($arr);
print_r($fliparray);
?>
<?php
$a=array("akash","c","c++","java","php","android");
$b=array("akash","c","java","php");
$diff = array_diff($a, $b);
print_r($diff);
?>
<?php
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
?>
<?php
$arr = array("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
}
?>
<?php
$a=array("c","c++");
array_push($a,"java","php");
print_r($a);
?>
<?php
$a = array("c", "c++", "Java", "PHP", "ASP");
array_pop($a); //Remove
print_r($a);
array_pop($a); //Remove
print_r($a);
?>
<?php
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
print_r($arr);
?>
<?php
$arr = array("i","love","php","language");
$mystring = implode(" ", $arr);
echo $mystring;
?>




