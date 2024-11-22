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
    <title>Record Book</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <table class="table table-stripped table-bordered table-dark" style="margin-top: 10px;">
            <tr>
                <th>Register Number</th>
                <th>Name Of Student</th>
                <th>Department</th>
                <th>Reason For Outing</th>
                <th>Out Time</th>
                <th>In Time</th>
            </tr>
<?php
include ('connection.php');
$q="SELECT * FROM students WHERE 1";
$query=mysqli_query($conn,$q);
while($res=mysqli_fetch_array($query))
{

?>
            <tr>
                <td><?php echo $res['Register_Number']?></td>
                <td><?php echo $res['Name']?></td>
                <td><?php echo $res['Department']?></td>
                <td><?php echo $res['Reason']?></td>
                <td><?php echo $res['DateTime']?></td>
                <td><?php echo $res['InTime']?></td>
            </tr>

<?php
}
?>
        </table>
    </div>
    <div class="text-center">
        <a href="landing.php"><button class="btn btn-success">HOME</button></a>
        <a href="delete.php"><button class="btn btn-danger">Clear All Records</button></a>
    </div>
</body>
</html>