<!DOCTYPE html>
<html>
    <head>
        <title>BrainOBrain Skill Development</title>
        <link rel="stylesheet" href="./css/courses.css">

        <style>
            .Backgroundcourse{
    display:flex;
    justify-content:space-around;
}
.backgroundcourse{
    width:70%;
    height:100vh;
    
}
.backgroundcourse>img{
    width:100%;
    height:100vh;
}
h2{
    text-align:center;
    padding:30px;
    font-family: 'Courgette', cursive;
}
.courseimage{
    display:flex;
    justify-content:space-around;
    width:100%;
    margin-bottom:20px;
}
.littlebobs{
    width:40%;
}
.brainobrain{
    width:40%;
}
.coursedetails{
    display:flex;
    justify-content:space-around;
    width:100%;
}
.Coursedetails{
    dispaly:flex;
    align-items:center;
    justify-content:center;
    width:40%;
    height:300px;
    border:none;
    margin:20px;
    padding:30px;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
}
span{
    font-size:1.2rem;
    font-family: 'Courgette', cursive;
    font-weight:normal;

}
h4{
    text-align:center;
    color:brown;
}
button{
    width:100px;
    height:40px;
    background-color:#dee2ff;
    border:none;
     color:#fff;
}

            </style>
        </head>

        <body>
            <?php
            include('Navbar.php')?>
            
        </div>
        <h2>Our Courses</h2>
        <div class="courseimage">
            <div class="littlebobs">
                <img src="./Images/course1.jpg">
</div>
<div class="brainobrain">
    <img src="./Images/course2.jpg">
</div>
</div>

<div class="coursedetails">
            <div class="Coursedetails">
                <h4>LITTLEBOBS</h4>
                <span>Age Group: 4 to 6 yrs</span><br>

<span>No. of Modules: 4</span><br>

<span>Duration of each Module: 3 months</span><br>

<span>Classes: once in a week for 2 hours</span><br>
<button><a href="enroll.php">Enroll Now</a></button>
</div>
<div class="Coursedetails">
    <h4>BRAINOBRAIN</h4>
    <span>Age Group: 7 to 14 yrs</span><br>

<span>No. of Levels: 10</span><br>

<span>Duration of each level: 3 months</span><br>

<span>Classes: once in a week for 2 hours</span><br>
<button><a href="enroll.php">Enroll Now</a></button>
</div>
</div>

        <?php
include('footer.php')?>
            </body>
            </html>