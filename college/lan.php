<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .dee{
        height:100vh;
        display:flex;
        justify-content:center;
        align-items: center;
          }
      .card{
        margin: 0px 0px 0px 30px;
      }
      .mybtn{
        display: flex;
        justify-content: center;
        align-items:right ;
      }
      .mybtn a{
        margin: 40px 0px 0px 0px;
      }
    </style>
  </head>
  <body data-liner-extension-version="7.13.28">
    <div class="mybtn">
      <a href="addstudent.php"><button type="button" class="btn btn-primary btn-lg">+ add new student</button></a>
    </div>
  
    <?php 
        if (isset($_SESSION["inn"])) {
          echo $_SESSION['inn'];
          unset($_SESSION['inn']);
      }
        ?>

    <div class="dee">
      <div class="card" style="width: 18rem;">
  <img src="college.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">College</h5>
    <p class="card-text">Click the button below to access the details of the complaints lodged.</p>
    <a href="college.php" class="btn btn-primary">click me!</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="department.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Department</h5>
    <p class="card-text">Click the button below to access the details of the complaints lodged.</p>
    <a href="department.php" class="btn btn-primary">click me!</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="faculty.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Faculty</h5>
    <p class="card-text">Click the button below to access the details of the complaints lodged.</p>
    <a href="faculty.php" class="btn btn-primary">click me!</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="student.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Student</h5>
    <p class="card-text">Click the button below to access the details of the complaints lodged.</p>
    <a href="student.php" class="btn btn-primary">click me!</a>

  </div>
</div>
    </div>

    


    

  </div><!-- /.container -->

  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-body-secondary">© 2024 VVCE, Mysore</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-body-secondary" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>