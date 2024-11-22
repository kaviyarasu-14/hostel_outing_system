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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry</title>
    <?php include('connection.php')?>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url('images/Frountitech.JPG');background-repeat: no-repeat;background-size:cover;" class="img-fluid">

    <div class="text-center">
    <h1>Welcome to Itech Entry Zone</h1>
</div>

<div class="text-center !important">
    <form method='POST' action='Redirection2.php'>
    <div class="container">
        <div>
        <label>Enter Your Register Number</label>
        <input type="number" class="form-control" name='Regnumber'>
    </div>
    <div>
        <label>Enter Date/Time</label>
        <input type="text" class="form-control" name='intime'>
    </div>
        <div>
        <label>Enter Your Department</label>
        <!-- <input type="text" class="form-control" name='Department'> -->
        <select class="form-control" name='Department'>
        <!-- <option></option> -->
            <option>CSE</option>
            <option>EEE</option>
            <option>ECE</option>
            <option>CIVIL</option>
            <option>MECHANICAL</option>
        </select>
       
</div>
<br>
<div class="text-center">
    <button class="btn btn-primary">Submit</button>
</div>
</form>
<br>
<div class='text-center'>
<a href='landing.php' ><button class='btn btn-primary '>Home</button></a></div>
</body>
</html>