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

if(isset($_POST['Submit'] ))
{
$name=$_POST['Name'];
$Register_no=$_POST['Register_Number'];
$Reason=$_POST['outingaa'];
$Depart=$_POST['deptt'];
// $final=$_POST['checkbox'];
// echo "$name";
// echo "$Reason";
// echo "$Register_no";
// echo "$Depart";

$query="INSERT INTO students(id,Name,Register_Number,Department,Reason,DateTime) VALUES (NULL,'$name','$Register_no','$Depart','$Reason',NULL)";
if(mysqli_query($conn,$query))
{
    echo "Inserted Sucessfully";
}
else
{
    echo "Some error".mysqli_error($conn);
}
}
header("location:Records.php");
// exit;
?>
</body>
</html>