<?php include('../back/config.php');?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     

    <form action="" method="POST">
    usn:
   <input type="text" name="usnnum">
    name:
    <input type="text" name="namee">

    <input type="submit" name="submit" value="submit">
    
    </form>
</body>
</html>
<?php 
if (isset($_POST["submit"])) {
    
    $username =  $_POST['adname'];
    $password = $_POST['pass'];
    


    $sql = "INSERT INTO details SET
    adname = '$username',
    pass = '$password'
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));
     
    if($res==true){
        echo "lion";
    }else{
        echo
        "tiger";
    }
}
?>