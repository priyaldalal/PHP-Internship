<?php

$connetion = mysqli_connect("localhost","root","","db_internship");
if ($_POST){
    $fname = $_POST['txt1'];
    $lname = $_POST['txt2'];
    $email = $_POST['txt3'];
    $subject = $_POST['txt4'];
    $message = $_POST['txt5'];
   
    
    $q = mysqli_query($connetion,"insert into tbl_resume(user_fname,user_lname,user_email,user_subject,user_message) value('{$fname}','{$lname}','{$email}','{$subject}','{$message}')") or die(mysqli_error($connetion));
    if($q){
        echo "<script>alert('Record Added')</script>";
    }
}


?>


<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(images/img1.jpeg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			<h2>Contact</h2>
                        <form action="" method="post">
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" name="txt1" class="form-control" placeholder="Your firstname">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" name="txt2" class="form-control" placeholder="Your lastname">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
                                            <input type="email" name="txt3" class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" name="txt4" class="form-control" placeholder="Your subject of this message">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea type="text" name="txt5"  cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>


