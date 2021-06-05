<?php

$connetion = mysqli_connect("localhost","root","","db_internship");
//qurry
$q = mysqli_query($connetion, "select * from tbl_resume") or die(mysqli_error($connetion));
//below function array fatch data
$row = mysqli_fetch_row($q);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];

//FATCH DATA FROM ARRAY
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];
