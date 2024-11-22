<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('connection.php')?>
</head>
<body>
    <?php
    $query="DELETE From students";
    $result=mysqli_query($conn,$query);
    if($result)
    {
        echo "Delete Sucessful";
    }
    else
    {
        echo "Error";
    }
    header('location:Records.php');
    ?>
</body>
</html>