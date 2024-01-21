<?php include('../back/config.php');?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .gg{
        height:500px;
        width:1505px;
        display:flex;
        justify-content:center;
        align-items: center;
      }
      .you{
        width: 300px;
      }
      .me{
        display:flex;
        justify-content:center;
        align-items: center;
      }
      .lef{
        width: 500px;
        height: 300px;
      }
      .rig{
        width: 500px;
        height: 300px;
      }
    </style>
  </head>

  <body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <img src="college logo" alt="">

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
      </ul>
    </header>
  </div>
<div class="gg">
  <div class="lef">
  <div class="you">
    <form action="" method="POST">
      Enter your College CODE:
      <div class="me"><input type="text" name="usnnum" class="form-control" id="floatingInputValue" placeholder="code" >
  <br>
  <br>
  <input type="submit" value="submit"  name="submit">
</div>

</form>
  </div>
  </div>
  <div class="rig">
  

  </div>
  </div>


  <div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-3">
      <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <p class="text-body-secondary">© 2024</p>
    </div>

    <div class="col mb-3">

    </div>

    <div class="col mb-3">
      <h5>Location</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">vidyavardhaka college of engineering,Mysore</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Karnataka</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">India</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Contact Us</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">+91444159865</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">abc@gmail.com</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">801-5421-4566</a></li>
      </ul>
    </div>

    <div class="col mb-3">
      <h5>Follow Us</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">instagram</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">facebook</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">twitter</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">linked-in</a></li>
      </ul>
    </div>
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
       
        header("location:" . HOMEURL . 'college/lan.php');
    }else{
                echo'tigeer';



    }
}
?>

