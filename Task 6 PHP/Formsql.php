<?php

$connetion = mysqli_connect("localhost","root","","db_internship");
if ($_POST){
    $name = $_POST['name'];
    $bod = $_POST['bod'];
    $gender = $_POST['gender'];
    $email =  $_POST['email'];
    $mobile = $_POST['txt3'];
    $address = $_POST['add'];
    $password = $_POST['pwd'];
    $area = $_POST['area'];
    $pincode = $_POST['pincode'];
    
    $q = mysqli_query($connetion,"insert into tbl_formsql(st_name,st_bod,st_gender,st_emai,st_mobile,st_addres,st_pass,st_area,st_pincode) values('{$name}','{$bod}','{$gender}','{$email}','{$mobile},'{$address}','{$password}','{$area}','{$pincode}')") or die(mysqli_error($connetion));
    if($q){
        echo "<script>alert('Record Added')</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name: <input type="text" name="name"/>
            Date Of Birth:<input type="date" name="bod"/><!-- comment -->
            Grnder :<select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            Email:<input type="email" name="email"/>
            Mobile Number:<input type="number" name="txt3"/>
            Addres:<input type="text" name="add"/><!-- comment -->
           
            Password:<input type="password" name="pwd"/>
             Area:<input type="text" name="area"/>
             Pincode: Area:<input type="number" name="pincode"/>
            
            <input type="submit"/>
        </form>
    </body>
</html>