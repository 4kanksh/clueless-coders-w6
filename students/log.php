<?php include('../back/config.php'); ?>
<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>log-in page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  .error{
    color: red;
   margin: 0px 0px 0px 113px;
  }
  .suc{
    color: red;
  }
</style>
<style>
  .log {
    width: 300px;
    height: 400px;
    transition-property: all;
    transition-duration: 1s;
    transition-timing-function: cubic-bezier(0.075, 0.82, 0.165, 1);
    transition-delay: 0s;

  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  #li {
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .btn {
    margin: 0px 0px 0px 118px;
  }

  .form-control {
    border-width: 3px;
    border-radius: 20px;

  }

  .form-control:hover {
    border-radius: 15px;
    height: 50px;

  }

  .form-label {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #aa {
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0px 15px 0px 0px;
  }

  .ss {
    text-decoration: none;
  }

  .log:hover {
    width: 320px;
    height: 450px;

  }
</style>

<body>
  <div class="log">
    <form action="" method="POST">
      <div class="mb-3">
        <p id="li">Log in</p>
        <?php 
        if (isset($_SESSION["login"])) {
          echo $_SESSION['login'];
          unset($_SESSION['login']);
      }
        ?>
        <label for="exampleInputtext" class="form-label">User Name</label>
        <input type="text" class="form-control" name="username" id="exampleInputtext" aria-describedby="emailHelp"
          placeholder="enter your name">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1"
          placeholder="enter a strong password">
      </div>
      <input type="submit" class="btn btn-outline-primary" name="submit" value="submit">
      <div class="mb-3 form-check">
        <br>
        <p id="aa">Don't have an account click here to <a href="signusn.php "
            class="ss">&nbsp<strong>sign-up</strong></a></p>
      </div>

    </form>

    
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
<?php
if (isset($_POST["submit"])) {

  $name = $_POST['username'];
  $pass = $_POST['password'];

  $sql = "SELECT * FROM logd WHERE
    username = '$name' AND
    password = '$pass'
    ";
  $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $count = mysqli_num_rows($res);

  if ($count == 1) {
    $_SESSION['login'] = "<div class='suc'>Login succefull</div>";
    header("location:" . HOMEURL . 'student/complain.php');
  } else {
    $_SESSION['login'] = "<div class='error'>Error Login</div>";
    header("location:" . HOMEURL . 'student/log.php');
  }
}
?>