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
    .form-control{
      width: 200px;
    }
    pre{
      margin: 0px 0px 0px 400px;
    }
    .gg{
      width: 900px;
      height: 150px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .lee{
      width: 250px;
      height: 140px;

    }
    .error{
    color: red;
   margin: 0px 0px 0px 113px;
  }
    
  </style>
  <body>
    <div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-arms-up" viewBox="0 0 16 16">
  <path d="M8 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
  <path d="m5.93 6.704-.846 8.451a.768.768 0 0 0 1.523.203l.81-4.865a.59.59 0 0 1 1.165 0l.81 4.865a.768.768 0 0 0 1.523-.203l-.845-8.451A1.5 1.5 0 0 1 10.5 5.5L13 2.284a.796.796 0 0 0-1.239-.998L9.634 3.84a.7.7 0 0 1-.33.235c-.23.074-.665.176-1.304.176-.64 0-1.074-.102-1.305-.176a.7.7 0 0 1-.329-.235L4.239 1.286a.796.796 0 0 0-1.24.998l2.5 3.216c.317.316.475.758.43 1.204Z"/>
</svg>
  <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
</svg>
        <span class="fs-4">e-cell</span>
        
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Submit</a></li>
        <li class="nav-item"><a href="log.php" class="nav-link">LOG OUT</a></li>

      </ul>
    </header>
    <?php if (isset($_SESSION["login"])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>
        <?php 
        if (isset($_SESSION["log"])) {
          echo $_SESSION['log'];
          unset($_SESSION['log']);
      }
        ?>



    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Verbal assault</h3>
            <img src="https://media.istockphoto.com/id/1209450099/photo/boss-blaming-female-executive.jpg?s=612x612&w=0&k=20&c=cumJbtxDqeXS5RPMCrCmP-XpqWnjIsglma2p-EwBGpI=" alt="Verbal assault">
            <p>Verbal harassment in the workplace refers to any form of verbal behaviour that is intended to harm an employee's psychological well-being. This can include name-calling, insulting language, threats, and other forms of verbal abuse.</p>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
                
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
              Cyber bullying</h3>
              <img src="https://home.sophos.com/sites/default/files/2021-09/Cyberbullying.png" alt="cyber bullying">
            <p>Online harassment can be defined as the use of information and communication technologies by an individual or group to repeatedly cause harm to another person.In the age of the internet, it is very common for bullies to use internet to bully someone. It may includes sending anonymous threats online, hacking accounts etc.</p>
            
            <!-- <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
              Sexual harassment</h3>
              <img src="https://cdn3.vectorstock.com/i/1000x1000/33/82/stop-sexual-harassment-banner-gender-equality-vector-24263382.jpg" alt="Sexual harassment">
            <p>behaviour characterized by the making of unwelcome and inappropriate sexual remarks or physical advances in a workplace or other professional or social situation.
Many students experience sexual harassment every year, but very few of them open up about it. This platform will provide them with an opportunity to do so.
</p> -->
            

            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
               
              </li>
              <li class="d-flex align-items-center me-3">
                
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Stalking</h3>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwwgf8ZA-NxHM2EI64dg7sZIPECbGnC_mHYA&usqp=CAU" alt="Stalking">
      
            <p>Stalking is a pattern of repeated and unwanted attention, harassment, contact, or any other course of conduct directed at a specific person that would cause a reasonable person to feel fear,” according to the Department of Justice</p>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
                
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container px-4 py-5" id="custom-cards">

    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Power Harassment</h3>
            <img src="https://www.shutterstock.com/image-vector/flat-3d-isometric-big-hand-260nw-1164277867.jpg" alt="Power Harassment">
            <p>
            A simple definition of power harassment is any kind of behavior in which a superior takes advantage of his or her position in the workplace to cause co-workers physical pain or emotional distress. This can be due to superiority by means of relative work position, physical size, or otherwise   
</p>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Sexual harrassement</h3>
            <img src="https://cdn3.vectorstock.com/i/1000x1000/33/82/stop-sexual-harassment-banner-gender-equality-vector-24263382.jpg" alt="Sexual harassment">
            <p>behaviour characterized by the making of unwelcome and inappropriate sexual remarks or physical advances in a workplace or other professional or social situation.Many students experience sexual harassment every year, but very few of them open up about it. This platform will provide them with an opportunity to do so.

</p>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                
              </li>
              <li class="d-flex align-items-center me-3">
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <br>
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Physical abuse</h3>
            <br>
            <br>
            <img src="https://media.istockphoto.com/id/1349240822/photo/parental-violence.jpg?s=612x612&w=0&k=20&c=JBqaGwXks0G2wKOJ8TFQG2nP_uD5hunqbr0xLRFGY4c=" alt="Physical abuse">
            <p>Physical harassment is an act where someone inappropriately touches you against your will. Physical harassment in the workplace is also known as workplace violence. Physical harassment behavior intimidates, embarrasses, threatens, and makes the victim uncomfortable.</p>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">

              </li>
              <li class="d-flex align-items-center me-3">
                
                <small></small>
              </li>
              <li class="d-flex align-items-center">
                <small></small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <div class="container my-5">
  <div class="p-5 text-center bg-body-tertiary rounded-3">
  <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
    <h1 class="text-body-emphasis">Complain without fear</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
      while registering the complaint the students should keep in mind that nothing can be held against them by the authorities, so one should express your cencern without any sort of hesitation.
    </p>
    <div class="d-inline-flex gap-2 mb-5">
      <a href="compn.php"><button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
        Lodge Complaint
      </button>
      <a href="compg.php"><button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
       Complain anonymous
      </button>
    </a>
    </div>
  </div>
</div>
<div class="gg">
  <div class="lee">
<form action="" method="POST">
      view your anonymous complaint:
  <input type="text" name="usn" class="form-control" id="floatingInputValue" placeholder="vvce23ise0000" >
  <br>
  <input type="submit" class="btn btn-outline-primary" value="submit" name="submit">
</form>
</div>
<div class="rii">
<?php
if (isset($_POST["submit"])) {
    
    $password =  $_POST['usn'];
    

    $sql = "SELECT * FROM signin WHERE
    usn = '$password' 
    ";
    $res = mysqli_query($conn, $sql)or die(mysqli_error($conn));

    $count = mysqli_num_rows($res);

     
    if($count==1){
     
      $sql = "SELECT * FROM studg";
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
                          
                  $complaint = $rows["complaint"];
                          
  
                          //display the values in our table
                          ?>
                          <table>
                           <tr>
                              
                              <td><pre><?php echo $complaint; ?></pre></td>
                              
  
                              </tr>
                              </table>
                          <?php
                          
                              
                          
                      }
                  }else{
                      echo "lion";
                  }
              }
              
        
    }else{
               echo"<div class='error'>Enter valid USN</div>";



    }
}
?>
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