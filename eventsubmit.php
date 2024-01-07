<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<?php
    $Eventname=$_POST['eventname'];
    $Eventplace=$_POST['eventplace'];
    $City=$_POST['city'];
    $Eventdetails=$_POST['eventdetails'];
    

    

    $hostname="localhost";
    $Username="root";
    $Password="";
    $database="Brainobrain";
    $con=new mysqli($hostname,$Username,$Password,$database);

    $sql1="INSERT INTO `event`(`EventName`,`EventPlace`,`CITY`,`EventDetails`) VALUES ('$Eventname','$Eventplace','$City','$Eventdetails')";
    $result=mysqli_query($con,$sql1);

    ?>
    <h1><center>Response Submitted</center></h1>
    <center><a href="admin.php">Admin Login</a></center>

</body>
</html>