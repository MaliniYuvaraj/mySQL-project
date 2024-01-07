<!DOCTYPE html>
<html lang="en">
<head>
    <title>BrainOBrainskilldevelopment</title>
</head>
<body>
    

<?php
    $Name=$_POST['username'];
    $Pass=$_POST['password'];
    

    

    $hostname="localhost";
    $Username="root";
    $Password="";
    $database="brainobrain";

    $con=new mysqli($hostname,$Username,$Password,$database);

    $sql1="SELECT * FROM admin WHERE Username='$Name' and Password='$Pass'";
    $result=mysqli_query($con,$sql1);
    if(mysqli_num_rows($result)==1)
    {
        echo" ".include('postingevents.php');
    }
    else{
        echo"<h1>Invalid user</h1>";
    }

    
?>