<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['submit'])){
    $name = $_POST['txt1'];
    $email = $_POST['txt4'];
   
    
                    try {
                //Server settings
                $mail->SMTPDebug = FALSE;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'email@gmail.com';                     //SMTP username
                $mail->Password   = 'Password';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                //Recipients
                $mail->setFrom('email', 'Support');
                $mail->addAddress("$email", '');     //Add a recipient
                //$mail->addAddress('ellen@example.com');               //Name is optional
                //$mail->addReplyTo('info@example.com', 'Information');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');

                //Attachments
                //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Registration Email';
                $mail->Body    = 'how are you <a href="http://priyaldalal.tk">Click Here</a><b><p>From </p><p>Priyal Dalal</p></b>';
               // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                //echo 'Message has been sent';
                 echo "<script> alert('Email Send')</script>";
            } catch (Exception $e) {
                //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                 echo "<script> alert('Try Again')</script>";
            }

   
}
?>
<html>
    <head> <title>Email</title></head>
    <body>
        <Form method="post">
            Name: <input type="text" id="Name" name="txt1"/></br>
            
            Email :<input type="email" id="Email" name="txt4"/></br>
            
            <!--Message:<input type="text" id="Message" name="txt5"/></br>-->
            
            <input type="submit" id="submit" name="submit" value="Send Email"/>
        </Form>
    </body>
   
</html>


