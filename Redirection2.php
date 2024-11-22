<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry</title>
    <?php include('connection.php')?>
</head>
<body>
<?php
        $Department=$_POST['Department'];
        $Registerno=$_POST['Regnumber'];
        $timing=$_POST['intime'];
        echo $Registerno;

        $query="UPDATE students SET InTime='$timing' WHERE Register_Number=$Registerno AND Department='$Department' ";
        $result=mysqli_query($conn,$query);
        if($result)
        {
            echo "Data Updated";
        }
        else{
            echo "Data Not updated";
        }
        header('location:Records.php');
    ?>
</body>
</html>