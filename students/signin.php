<?php include('../back/config.php');?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign-in Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    .log{
      width: 300px;
      height: 400px;
      transition-property: all;
      transition-duration: 1s;
      transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
      transition-delay: 0s;
      
    }
    body{
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    #li{
      font-size: 20px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .btn{
      margin: 0px 0px 0px 95px;
    }
    .form-control{
      border-width:3px ;
      border-radius: 20px;
    
    }
    .form-control:hover{
      border-radius: 15px;
      height:50px ;
      
    }
    .form-label{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #aa{
      font-size: 12px; 
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .ss{
      text-decoration: none;
    }
    .log:hover{
      width:320px ;
      height: 450px;
      
    }

  </style>
  <body>
    <div class="log">
    <form action="" method="POST">
  <div class="mb-3">
    <p id="li">Sign in</p>
    <label for="exampleInputtext" class="form-label">User Name</label>
    <input type="text" class="form-control" name="username" id="exampleInputtext" aria-describedby="emailHelp" placeholder="enter username">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="set a strong password">
  </div>
  <div class="mb-3 form-check">
  <input type="submit" value="submit" name="submit">
    
    
  </div>
  
</form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php
if (isset($_POST["submit"])) {
    
    $name =  $_POST['username'];
    $pass = $_POST['password'];

    $sql = "INSERT INTO logd SET
    username = '$name',
    password = '$pass'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
      header("location:" . HOMEURL . 'student/log.php');
    }
}
?>