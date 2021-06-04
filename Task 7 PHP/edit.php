<?php

$connetion = mysqli_connect("localhost","root","","db_internship");
if(!isset($_GET['id'])|| empty($_GET['eid'])){
    header("location:3table.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connetion,"select * from tbl_user where user_id='{$editid}'") or die(mysqli_error($connetion));

$editdata = mysqli_fetch_array($editq);
//print_r($editdata);
if ($_POST){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $mobile = $_POST['txt3'];
      
      $uq = mysqli_query($connetion,"update  tbl_user set user_name='{$name}',user_gender='{$gender}',user_mobile='{$mobile}' where user_id='{$editid}' ")or die(mysqli_error($connetion));
      if ($uq){
          echo "<script> alert('Record Updated');window:location='3table.php';</script>";
      }
      
      
      }

?>
<html>
    <body>
        <form methof="post">
            Name: <input type="text" name="name" value="<?php echo $editdata['user_name']?>"/>
            <br/>
            Gender: Male<input type="radio" <?php if($editdata['user_gender'] == "Male"){ echo "checked";}?> value="Male" name="gender"/>
            <br/>Female<input type="radio" <?php if($editdata['user_gender']=="Female"){ echo "checked";}?> value="Female" name="gender"/>
            <br/><!-- comment -->
            Mobile :<input type="number" name="txt3" value="<?php echo $editdata['user_mobile']?>"/>
            <input type="submit" />
            
            
        </form>
    </body>
</html>
