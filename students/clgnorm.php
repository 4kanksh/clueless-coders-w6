<?php include('../back/config.php');?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            height:400px;
            width:100vh;
            
        }
        body{
            height:100vh;
            display: flex;
            justify-content:center;
            align-items: center;
        }
        .error{
          color: greenyellow;
        }
        
    </style>
</head>
  <body>
    <div class="conatiner">
    <form action="" method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="USN" class="form-label">branch</label>
    <input type="text" class="form-control" id="USN" name="branch"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Branch" class="form-label">usn</label>
    <input type="text" class="form-control" id="Branch" name="usn"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="Semester" class="form-label">Semester</label>
    <input type="text" class="form-control" id="Semester" name="sem"  aria-describedby="emailHelp">
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="complaint description" name="complaint"  id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Complaint</label>
</div>
<input type="submit" class="btn btn-outline-primary" name="submit" value="submit">
</form>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (isset($_POST["submit"])) {
    
    $username =  $_POST['username'];
    $branch = $_POST['branch'];
    $usn = $_POST['usn'];
    $sem = $_POST['sem'];
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO collegen SET
    username = '$username',
    branch = '$branch',
    usn = '$usn',
    sem = '$sem',
    complaint = '$complaint'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
      header("location:" . HOMEURL . 'student/complain.php');
      $_SESSION['log'] = "complaint registered succeful";
    }
}
?>











    

















