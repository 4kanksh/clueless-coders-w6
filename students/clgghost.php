<?php include('../back/config.php');?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container{
            height: 200px;
            width: 200px;
            
        }
        body{
            height:100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="containe">
        <form action="" method="POST">
            <strong>Submit your complaint:</strong>
        
        <br>
        <pre>
        <div class="form-floating">
        <textarea class="form-control" placeholder="complaint description" name="complaint"  id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Complaint description</label>
</div>
        </pre>
        <br>
       <input type="submit" class="btn btn-outline-primary" name="submit">
    </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    
    $complaint = $_POST['complaint'];

    $sql = "INSERT INTO collegeg SET
    
    complaint = '$complaint'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
      header("location:" . HOMEURL . 'student/complain.php');
      $_SESSION['log'] = "complaint registered succeful";
    }
}
?>