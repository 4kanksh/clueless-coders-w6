<?php include('../back/config.php');?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    .container{
      height:50vh;
      width:50vh;
      margin: 100px 0px 0px 0px;
    }
    body{
      height: 100vh;
      display:flex;
      justify-content: center;
      align-items: center;
    }
    .btn{
      margin: 20px 0px 0px 114px;
    }
    
  </style>
  <body>
    
    <div class="container usn">
      <h1>Enter your USN</h1>
      <br>
    <section class="true">
        
    <form action="" method="POST">
  <input type="text" name="usn" class="form-control" id="floatingInputValue" placeholder="vvce23ise0000" value="vvce23ise0000">
  <br>
  <input type="submit" class="btn btn-outline-primary" value="submit" name="submit">
</form>
</section>

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    $password =  $_POST['usn'];
    

    $sql = "SELECT * FROM signin WHERE
    usn = '$password' 
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    $count = mysqli_num_rows($res);

     
    if($count==1){
       
        header("location:" . HOMEURL . 'student/signin.php');
    }else{
                $_SESSION['login'] = "<div class='error text-align'>enter valid usn</div>";
                header("location:" . HOMEURL . 'usn.php');



    }
}
?>