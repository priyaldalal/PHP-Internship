<!doctype html>
      <html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <title>GSEB</title>
      </head>
      <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/bnproject/Result/student.php">GSEB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          
          <li class="nav-item">
              <a class="nav-link" href="/Task 3/Result/Result.php">Search Result</a>
          </li>
          </ul>
          
      </div>
      </nav>
      <div class="container mt-3">
      <h1>Gujarat State Education Board</h1>
      <form action="/Task 3/Result/Student.php" method="post">
      <div class="row">
        <div class="col">
          <input type="text" name="fname" class="form-control" placeholder="Full name" aria-label="Full name" required>
        </div>
        <div class="col">
          <input type="number" name="enrno" class="form-control" placeholder="Enrollment No." aria-label="Enrollment No."  required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
            <h2>Subject</h2>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
                <label for="exampleFormControlInput1" class="form-label">Maths</label>
                <input type="number" class="form-control" name="maths" placeholder="Enter Your Maths Mark" aria-label="Maths Marks" min="1" max="100" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
                <label for="exampleFormControlInput1" class="form-label">Chemistry</label>
                <input type="number" class="form-control" name="chemistry" placeholder="Enter Your Chemistry Mark" aria-label="Chemistry Marks" min="1" max="100" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
                <label for="exampleFormControlInput1" class="form-label">Physics</label>
                <input type="number" class="form-control" name="physics" placeholder="Enter Your Physics Mark" aria-label="Physics Marks" min="1" max="100" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
                <label for="exampleFormControlInput1" class="form-label">English</label>
                <input type="number" class="form-control" name="english" placeholder="Enter Your English Mark" aria-label="English Marks" min="1" max="100" required>
        </div>
      </div>
      <div class="col mt-3">
        <div class="row">
                <label for="exampleFormControlInput1" class="form-label">Gujarati</label>
                <input type="number" class="form-control" name="gujarati" placeholder="Enter Your Gujarati Mark" aria-label="Gujarati Marks" min="1" max="100" required>
        </div>
      </div>
      <div class="col mt-3">
        <button type="submit" class="btn btn-dark">Submit</button>
        <button type="reset" class="btn btn-dark">Reset</button>
      </div>
     </div>
    </form>
    </body>
    </html>
