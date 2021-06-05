<?php
$connection= mysqli_connect ("localhost", "root", "", "db_internship"); 
if($_POST){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $college = $_POST['college'];
    $degree = $_POST['degree'];
    $sem = $_POST['sem'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $course = $_POST['course'];
    $time = $_POST['time'];
    $resume = $_POST['resume'];

    $q = mysqli_query ($connection, "insert into tbl_student( `std_name`, `std_lname`, `std_gender`, `std_email`, `std_mobile`, `std_college`, `std_degree`, `std_sem`, `std_city`, `std_state`, `std_zip`, `std_course`, `std_time`, `std_resume`) values ('$fname','$lname','$gender','$email','$contact','$college','$degree','$sem','$city','$state','$zip','$course','$time', '$resume') ") 
                        or die("Error". mysqli_error ($connection) ) ;

if($q)
{
    echo "<script>alert('Record Added');</script>";
}
}
?>
  <!doctype html>
      <html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

          <title>InternTech</title>
      </head>
      <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/Task 3/Registration/Registration.ph">InternTech</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
          <li class="nav-item">
              <a class="nav-link" href="/Task 6/regForm.php">Registration</a>
          </li>
          </ul>
          
      </div>
      </nav>

      <div class="container mt-3">
      <h1>Internship Registration Form</h1>
      <form  method="post">
      <div class="row">
        <div class="col">
          <input type="text" name="fname" class="form-control" placeholder="First name" aria-label="First name" required>
        </div>
        <div class="col">
          <input type="text" name="lname" class="form-control" placeholder="Last name" aria-label="Last name" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row-ms">
          <label for="exampleFormControlInput1" class="form-label">Gender</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male"  checked>
          <label class="form-check-label" for="exampleRadios1">
          Male
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female" >
          <label class="form-check-label" for="exampleRadios2">
          Female
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female" required>
          <label class="form-check-label" for="exampleRadios2">
          Other
          </label>
      </div>
      </div>
      </div>
      <div class="col mt-3">
        <div class="row">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" placeholder="Email" aria-label="Email" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
          <label for="exampleFormControlInput1" class="form-label">Contact No.</label>
          <input type="number" class="form-control" name="contact" placeholder="Contact No." aria-label="Contact No. " required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
          <label for="exampleFormControlInput1" class="form-label">Institute Name</label>
          <input type="text" class="form-control" name="college" placeholder="Your College/University" aria-label="Institue"required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
          <label for="exampleFormControlInput1" class="form-label">Degree</label>
          <input type="text" class="form-control" name="degree" placeholder="Degree" aria-label="Degree" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row-ms">
          <label for="exampleFormControlInput1" class="form-label">Semster</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="sem" id="exampleRadios1" value="Sem-6"  checked>
          <label class="form-check-label" for="exampleRadios1">
          Sem-6
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="sem" id="exampleRadios2" value="Sem-7" >
          <label class="form-check-label" for="exampleRadios2">
          Sem-7
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="sem" id="exampleRadios2" value="Sem-8" required>
          <label class="form-check-label" for="exampleRadios2">
          Sem-8
          </label>
      </div>
      </div>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" class="form-control" name="city" id="inputCity" required>
      </div>
      <div class="col-md-6">
        <label for="inputState" class="form-label">State</label>
        <input type="text" class="form-control" name="state" id="inputState" required>
      </div>
      
      <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip" required>
      </div>
      <div class="col mt-3">
          <label for="exampleFormControlInput1" class="form-label">Technical Courses</label>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="course" value="Java" id="flexCheckDefault" >
        <label class="form-check-label" for="flexCheckDefault">
          Java
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="course" value="C++" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
          C++
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="course" value="Pyhton Django" id="flexCheckDefault" >
        <label class="form-check-label" for="flexCheckDefault">
          Pyhton Django
        </label>
      </div>
      </div>
      <div class="col mt-3">
        <div class="row-ms">
          <label for="exampleFormControlInput1" class="form-label">Available Time For Work</label>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="time" id="exampleRadios1" value="Part-Time" checked>
          <label class="form-check-label" for="exampleRadios1">
          Part Time
          </label>
      </div>
      <div class="form-check">
          <input class="form-check-input" type="radio" name="time" id="exampleRadios2" value="Full-Time">
          <label class="form-check-label" for="exampleRadios2">
          Full Time
          </label>
      </div>
      </div>
      </div>
      <div class="mt-3">
          <label for="formFileSm" class="form-label">Upload Your Resume Here.</label>
          <input class="form-control form-control-sm" name="resume" id="formFileSm" type="file" >
      </div>
      <div class="col mt-3">
        <button type="submit" class="btn btn-dark">Submit</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </div>
      </form>
      </body>
      </html>
