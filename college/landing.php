<?php include('../back/config.php');?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .pop{
        height: 500px;
        width: 10  00px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .lef{
        width: 500px;
        height: 500px; 
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px 50px 0px 0px;
    }
    .rig{
        width: 400px;
        height: 500px; 
        
        justify-content: center;
        align-items: center;
    }
    .display-5{
        margin: 130px 0px 0px 0px
    }
    .suc{
        color: red;
        margin: 0px 0px 0px 50px;
    }
    .succ{
        color: green;
    }
</style>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
      </ul>
    </header>
  </div>
  <div class="pop">
    <div class="lef">
    
  <form action="" method="POST">
  <?php 
        if (isset($_SESSION["in"])) {
          echo $_SESSION['in'];
          unset($_SESSION['in']);
      }
        ?>
      Enter your College CODE:
      <br>
      <div class="me"><input type="text" name="usnnum" class="form-control" id="floatingInputValue" placeholder="code" >
  <br>
  <br>
  <input type="submit" value="submit" class="btn btn-outline-primary" name="submit">
</div>

</form>
</div>
<div class="rig">
 <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Hi Admin! </h1>
 <h2 >Welcome to Grievance Cell.</h2>
 <p class="lead">Enter your college code to make sure that the website is only accessed by the authorised personals.</p>
</div>
  </div>
  

  <div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About Us</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Contact Us</a></li>
    </ul>
    <p class="text-center text-body-secondary">© 2024 VVCE, Mysore</p>
  </footer>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    $password =  $_POST['usnnum'];
    

    $sql = "SELECT * FROM details WHERE
    usnnum = '$password' 
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    $count = mysqli_num_rows($res);

     
    if($count==1){
        $_SESSION['inn'] = "Successfully Loggined";
        header("location:" . HOMEURL . 'college/lan.php');
        
        
        
    }else{
        $_SESSION['in'] = "<div class='suc'>Enter Valid Code</div>";



    }
}
?>