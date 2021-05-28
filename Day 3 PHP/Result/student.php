<!doctype html>
      <html lang="en">
      <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

          <title>GHSEB</title>
          <style>
            h1 {
                text-align: center;
                }
            h2 {
                text-align: center;
                }
            h3 {
                padding:25px;
                text-align: center;
                }
            .center{
                margin-left: auto;
                margin-right: auto;
            }
          </style>      
      </head>
      <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="/Task 3/Result/Result.php">GSEB</a>
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
      <?php
      
      $name =$_POST['fname'];
      $enrno =$_POST['enrno'];
      $maths =$_POST['maths'];
      $chem =$_POST['chemistry'];
      $phy =$_POST['physics'];
      $eng =$_POST['english'];
      $guj =$_POST['gujarati'];
      $total=($maths+$chem+$phy+$eng+$guj);
      $marks=($total/5);
      
      
      if ($marks>=80)
      {
          $grade = "First Class With Destinction.";
        }
        else if($marks>=70)
        {
            $grade = "First Class";
        }
        else if($marks>=50)
        {
            $grade = "Second Class";
        }
        else
        {
            $grade = "Failed";
        }
        
        if($marks>=50){
            echo"<div class='alert alert-success' role='alert'>
            Congratulations ! You have Passed The Exam.
          </div>";
        }
        else{
            echo"<div class='alert alert-danger' role='alert'>
            Sorry ! You Have Failed The Exam.
          </div>";

        }
        
      ?>
      <h1>Welcome <?php echo $_POST["fname"]; ?><br></h1>
      <h3>Your Enrollment No. is: <?php echo $_POST["enrno"]; ?><br></h3>
      <table class="center" border='1'>
        <tr>
        <th>Maths</th>
        <th> Chemistry </th>
        <th> Physics </th>
        <th> English </th>
        <th> Gujarati </th>
        </tr>      
        <tr>
        <td style="text-align:center">
             <?php echo $_POST["maths"]; ?><br>
        </td> 
        <td style="text-align:center">
                <?php echo $_POST["chemistry"]; ?><br>
        </td> 
        <td style="text-align:center">
             <?php echo  $_POST["physics"]; ?><br>
        </td>     
        <td style="text-align:center">
             <?php echo $_POST["english"]; ?><br>
        </td> 
        <td style="text-align:center">
             <?php echo $_POST["gujarati"]; ?><br>
        </td> 
        
      </table>
      </body>
      </html>


    <?php
        echo"<br/><h2>Your Total Marks Are: $total</h2>";
        echo "<br/><h2>$name has $grade in the Exam.</h2>";
        echo "<br/><h2>$name Percentage: $marks</h2>";
    ?>

