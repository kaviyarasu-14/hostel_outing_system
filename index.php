<!DOCTYPE html>
<html>
    <!-- CSS only -->
    
    <head>
    <link href="index.css" rel="Stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<?php include('connection.php')?>
</head>
    <body>
      
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="images/itech.png" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Approved by AICTE,Affiliated to Anna University Chennai</h4>
                  </div>
  
                  <form onsubmit="return f1()" action='index.php' method="GET">
                    <p>Enter the login credentials</p>
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control" placeholder="Username" name="Email"/>
                      
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" name="Password" placeholder="Password">
                      
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <input type="submit"  class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" name="get_submit"></input>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

  
                  </form>
  
                </div>
              </div>
   


              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4">PSG_ITECH</h4>
                  <p class="small mb-0">◉To facilitate active learning and vocational training.<br>
                  ◉To encourage and promote questioning spirit and 'can-do' entrepreneurial attitude.<br>
                  ◉To foster industry - institute collaboration.<br>
                  ◉To ignite passion for creative work and selfless service towards a sustainable world.<br>
                  ◉To provide intellectually stimulating environment, conducive for research.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
      function f1(){
      if(document.getElementById("form2Example11").value=="")
      {
          alert("Please enter the Username\n");
          return false;
      }
      if(document.getElementById("form2Example22").value=="")
      {
          alert("Please enter your password\n");
          return false;
      }
      else
      {

          return true;
      }
    }
  </script>

<!--Database stuff-->
<?php 

if(isset($_GET['get_submit']))
{
$username=$_GET['Email'];
$password=$_GET['Password'];

// echo $username;
// echo $password;

$query="SELECT * From login where UserName='$username' and Password='$password' ";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if($count>0)
{
    echo "login Sucessful";
    session_start();
    $_SESSION['loggedin']=true;
    header('location:landing.php');
}
else{
    // echo "Login Failed";
    echo '<script>alert("Incorrect Username or Password")</script>';
    // alert('Incorrect Username or Password');
}
}
?>
</body>
  
  </html>