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
header{
    width: 1505px;
    height: 100px;
}
table{
   display: flex;
   justify-content: space-between;
   width: 1500px;

}

.dis{
    width: 1300px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#ss{

    margin: 0px 0px 0px 50px;
    font-size: 30px;
}
header{
    text-align: center;
    font-size: 30px;
}
footer{
    text-align: center;
    font-size: 30px;
}
.tab{
    width: 1000px;    
}
#tt{

    margin: 0px px 0px 100px ;
}
</style>
<body>
    <header><strong>View your complaints here</strong> </header>
    <div class="dis">
        <p id="ss">slno</p><p id="ss">name</p><p id="ss">branch</p><p id="ss">usn</p><p id="ss">complaints</p>

    </div>
    <?php 
    $sql = "SELECT * FROM collegen";
            //Excute the query
            $res = mysqli_query($conn, $sql);

            if ($res == TRUE) {
                //count rows to check wether we have data in database
                $count = mysqli_num_rows($res);
                $sn=1;
               //create a varaible and assign the value
                //check the number of rows
                if ($count > 0) {
                    
                    //we have data in database
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //using whilw loop to get all the data from database
                        //and while loop run aslong as we have data in database
            
                        //get individual data
                        $id = $rows["id"];
                $username= $rows["username"];
                $branch= $rows["branch"];
                $usn= $rows["usn"];
                $complaint = $rows["complaint"];
                        

                        //display the values in our table
                        ?>
                        <div class="tab">
                        <table>
                           
                         <tr>
                            <td><p id="ttt"><?php echo $sn++; ?></p></td>
                            <td><p id="tt"><?php echo $username; ?></p></td>
                            <td><p id="tt"><?php echo $branch; ?></p></td>
                            <td><p id="tt"><?php echo $usn; ?></p></td>
                            <td><p id="tt"><pre><?php echo $complaint; ?></p></pre></td>


                            </tr>
                            </table>
                        </div>
                        <?php
                        
                            
                        
                    }
                }else{
                    echo "lion";
                }
            }
            ?>
            <br><br><br>
            <footer><strong>List of anonymous complaints</strong></footer>
            <br><br>
<div class="dis">
        <p id="ss">slno</p><p id="ss">complaints</p>

    </div>
<?php 
    $sql = "SELECT * FROM collegeg";
            //Excute the query
            $res = mysqli_query($conn, $sql);

            if ($res == TRUE) {
                //count rows to check wether we have data in database
                $count = mysqli_num_rows($res);
                $sn=1;
               //create a varaible and assign the value
                //check the number of rows
                if ($count > 0) {
                    
                    //we have data in database
                    while ($rows = mysqli_fetch_assoc($res)) {
                        //using whilw loop to get all the data from database
                        //and while loop run aslong as we have data in database
            
                        //get individual data
                        $id = $rows["id"];
                        $complaint = $rows["complaint"];
                        

                        //display the values in our table
                        ?>
                        <div class="tab">
                        <table>
                         <tr>
                            <td><p id="ttt"><?php echo $sn++; ?></p></td>
                            <td><p id="tt"><pre><?php echo $complaint; ?></pre></p>      </td>
                            

                            </tr>
                            </table>
                        </div>
                            
                        <?php
                        
                            
                        
                    }
                }else{
                    echo "lion";
                }
            }
            ?>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            </body>
</html>