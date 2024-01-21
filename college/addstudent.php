<?php include('../back/config.php');?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
    <style>
        .con{
            margin: 450px 0px 0px 0px;
            height:100vh;
        }
        body{
            height: 100vh;
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AddStudent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <form action="" method="POST">
    <div class="con">
        <h1>Student details</h1>
        <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Name</label>
  <input type="text" class="form-control" name="username" id="exampleFormControlInput1" placeholder="enter student name">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Branch</label>
  <input type="text" class="form-control" name="branch" id="exampleFormControlInput1" placeholder="enter branch">
  
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">USN</label>
  <input type="text" class="form-control" name="usn" id="exampleFormControlInput1" placeholder="enter USN">
  
</div>
<input type="submit" name="submit" value="submit">
    </div>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> 
  <?php 
  if (isset($_POST["submit"])) {
      
      $username =  $_POST['username'];
      $branch =  $_POST['branch'];
      $password = $_POST['usn'];


      $sql = "INSERT INTO signin SET
      username = '$username',
      branch = '$branch',
      usn = '$password'
      ";
      $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
      
      if($res==true){
          header("location:" . HOMEURL . 'college/lan.php');

      }
  }
  ?>