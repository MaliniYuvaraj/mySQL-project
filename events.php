<!DOCTYPE html>
<html>
    <head>
        <title>BrainOBrain Skill Development</title>
        <link rel="stylesheet" href="./css/events.css">
<style>
    .Backgroundawards{
    display:flex;
    justify-content:space-around;
}
.backgroundawards{
    width:80%;
    height:400px;
    
}
.backgroundawards>img{
    width:100%;
    height:400px;
}
h2{
    text-align:center;
    padding:30px;
    font-family: 'Courgette', cursive;
}
span{
    text-align:center;
    padding:30px;
    font-size:1.2rem;
    font-family: 'Courgette', cursive;
}
        .Events{
    display:flex;
    justify-content:space-around;
    flex-wrap:wrap;
    width:100%;
    
.events{
    width:30%;
    margin:30px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    height:240px;
    
}
}
.events>img{
    width:100%;
    height:200px;
    transition:1s;
    transform:scale(0.95);
}
.events>img:hover{
    transform:scale(1);
}
</style>

        </head>

        <body>
            <?php
            include('Navbar.php')?>
            <div class="Backgroundawards">
            <div class="backgroundawards">
                <img src="./Images/picture5.webp">
            </div>
        </div>

        <h2>Past Events</h2>
<div class="Events">
    <div class="events">
        <img src="./Images/events1.jpg">
        <span>Coimbatore comptetion-2023</span>
</div>
<div class="events">
        <img src="./Images/events2.jpg">
        <span>Madurai comptetion-2022</span>
</div>
<div class="events">
        <img src="./Images/events3.jpg">
        <span>Chennai comptetion-2021</span>
</div>
<div class="events">
        <img src="./Images/events4.jpg">
        <span>Kerala comptetion-2023</span>
</div>
</div>

<h2>Upcoming Events!!!</h2>

<?php

$hostname="localhost";
    $Username="root";
    $Password="";
    $database="Brainobrain";
    $con=new mysqli($hostname,$Username,$Password,$database);
    $sql1="SELECT * FROM event";
    $result=mysqli_query($con,$sql1);

    while($data=$result->fetch_assoc())
    {
        print_r($data);
    }
    ?>
<?php
include('footer.php')?>
            </body>
            </html>