<?php
session_start();
if($_SESSION['loggedin']!=true)
{
    header('location:index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('connection.php')?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registry</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    body{
        background-image:url("images/Itech\ Squire.JPG");
        /* max-width: 100%;
        height: auto; */
        background-size: cover;
        background-repeat: no-repeat;
    }
    a{
        text-decoration: none !important;
        color: white !important;
    }
    @import url('https://fonts.googleapis.com/css2?family=Satisfy&display=swap');

</style>
<link href="landing.css" rel="Stylesheet">
</head>
<body>
    <div class="container" id="navbar">
    <nav>
        <ul>
            <a href="Records.php"><li>Record BOOK</li></a>
            <a href="Backtocollage.php"> <li>Back to Collage</li></a>
            <a href="logout.php"> <li>Logout</li></a>
        </ul>
    </nav>
</div>
<form onsubmit="return validator()" method='POST' action="Redirection.php">
    <div class="text-center">
    <h1 style="margin-bottom: 20px;color: white;" id="Itech">PSG INSTITUTE OF TECHNOLOGY AND APPLIED RESEARCH</h1></div>
    <div class="text-center">
    <h6 style="margin-bottom: 20px;color: white;" id="Itech">Approved by AICTE,Affiliated to Anna University Chennai</h6></div>
    <div class="container" style="border: solid black 1px;">
    <div class="row py-3">
        <div class="col-md-6">
            <div class="form-control">
            <label>Enter Your Name</label>
            <input type="text" class="form-control" name="Name" id='namee'>
            </div>
            <div class="form-control">
                <label>Enter Your Department</label>
                <!-- <input type='text' name='deptt' class=form-control id='deptt'> -->
                <select class="form-control" id='deptt' name='deptt'>
                <!-- <option value="CSE"></option> -->
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="EEE">EEE</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="MECHANICAL">MECHANICAL</option>
                </select>
                </div>
               
        </div>
        <div class="col-md-6">
            <div class="form-control">
                <label>Enter Your Register Number</label>
                <input type="number" class="form-control" name="Register_Number" id="regno">
                </div>
                <div class="form-control">
                    <label>Enter The Reason for Outing</label>
                    <input type='text' name='outingaa' class='form-control' id='outingaa'>
                    <!-- <select class="form-control">
                    <option value="CSE">Outing</option>
                    <option value="ECE">Home</option>
                    <option value="EEE">Hospital</option>
                    <option value="CIVIL">Collage Work</option>
                </select> -->
                    </div>
        </div>
    </div>
    <div class="text-center">
       <input type="checkbox" required name="checkbox"> <label for="checkbox">I have got the permission from the warder to go for outing,Otherwise strict action can be taken against me!</label>
       <br>
    <button class="btn btn-primary" name="Submit">Register</button></div>
</div>
</form>
<script>
    function validator()
    {
        if(document.getElementById("namee").value=="")
        {
            alert("Enter Your Name");
            return false;
        }
        else if(document.getElementById("regno").value=="")
        {
            alert("Enter Your Register_Number");
            return false;
        }
        else if(document.getElementById("deptt").value=="")
        {
            alert("Enter Your Department");
            return false;
        }
        else if(document.getElementById("outingaa").value=="")
        {
            alert("Enter The Reason");
            return false;
        }
        // else if(document.getElementById("verify").value=="")
        // {
        //     alert("Enter The Reason");
        //     return false;
        // }
    }
</script>
<div id="developers" style="background-color:white;opacity:0.8" class='text-center'>
    <!-- <p><h3 style="font-family:Satisfy">Developer:M.Mudasir & Hirdyansh</h3></p> -->
    <footer id="footer">
        <div class='dev'>
        <span style="font-family:Satisfy">Design And Developed by:Mohammad Mudasir<br>
        
    </footer>
</div>
</body>
</html>