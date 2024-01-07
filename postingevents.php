<!DOCTYPE html>
<html>
    <head>
    <title>BrainOBrain Skill Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        h2{
    text-align:center;
    padding:30px;
    font-family: 'Courgette', cursive;
}
.form{
    width:100%;
    display:flex;
    justify-content:space-around;
}
.Form{
    width:60%;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    padding:20px;
    height:450px;
}
button{
    width:100px;
    height:40px;
    background-color:#023e8a;
    border:none;
     color:#fff;
}
label{
    font-size:1.2rem;
}
</style>
</head>
<body>
<?php
include('Navbar.php')?>

<h2>Post Upcoming Events</h2>
<form action="eventsubmit.php" method="post">
<div class="form">
    <div class="Form">
    <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="eventname" id="floatingTextarea2" style="height: 50px"></textarea>
  <label for="floatingTextarea2">Event Name</label>
</div>
    <br>
<select class="form-select form-select-lg mb-3" name="eventplace" aria-label="Large select example">
  <option selected>Event Place</option>
  <option value="1">Anna Nagar</option>
  <option value="2">St.Thomas mount</option>
  <option value="3">Guindy</option>
</select>

<select class="form-select form-select-lg mb-3" name="city" aria-label="Large select example">
  <option selected>City</option>
  <option value="1">Chennai</option>
  <option value="2">Coimbatore</option>
  <option value="3">Salem</option>
</select>
<br>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here"  name="eventdetails" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">Event Details</label>
</div><br>

<button>Post</button>
</div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>