<html>
    <head>
        <title>Use Registration Form</title>
        
    </head>
    <body>
        <div>
            <?php
            if(isset($_POST['create'])){
                echo "User register";
            }
            ?>
        </div>
        <div>
            <Form action="Registrationform.php" metho="post">
                <div class="container"> 
                    <h1>Registration</h1>
                    <p>Fill Form with correct details</p>
                    <label for="text1"><br/>First Name</label>
                    <input type="text" name="text1" required>
                    
                    <label for="text2"></br>Last Name</label>
                    <input type="text" name="text2" required>
                    
                     <label for="text3"></br>Email</label>
                     <input type="email" name="text3" required>
                    
                     <label for="Phone number"></br>Phone Number</label>
                    <input type="text" name="Phone number" required>
                    
                     <label for="Password"></br>Password</label>
                     <input type="password" name="Password" required>
                     </br>
                     <input  type="submit" name="create" value="sign up">
                </div>
            </Form>
        </div>   
        
    </body>
</html>

