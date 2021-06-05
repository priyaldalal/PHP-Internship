<?php
$connetion = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteid'];

$q = mysqli_query($connetion,"delete from tbl_user where user_id='{$id}'") or die(mysqli_error($connetion));

if($q){
    echo "<script> alert('Record Deleted');window:location='3table.php';</script>";
}