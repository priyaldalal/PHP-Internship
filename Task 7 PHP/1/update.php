<?php
$connetion = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteid'];

$q = mysqli_query($connetion,"update tbl_user set is delete = 1 where user_id='{$id}'") or die(mysqli_error($connetion));

if($q){
    echo "<script> alert('Record Deleted');window:location='3table.php';</script>";
}

