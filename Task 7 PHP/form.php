<?php

$connetion = mysqli_connect("localhost","root","","db_internship");
if ($_POST){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['txt3'];
    
    $q = mysqli_query($connetion,"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die(mysqli_error($connetion));
    if($q){
        echo "<script>alert('Record Added')</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name: <input type="text" name="name"/>
            Grnder :<select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            Mobile Number:<input type="number" name="txt3"/>
            <input type="submit"/>
        </form>
    </body>
</html>
<a href='3table.php'>Display Record</a> 