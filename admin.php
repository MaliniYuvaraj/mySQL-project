<!Doctype html>
<html>
    <head>
    <title>BrainOBrain Skill Development</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
        <style type="text/css">
            h1{
                font-size:1.8rem;
                font-family: 'Ysabeau Office', sans-serif;
            }
.head
{
    display:flex;
    flex-wrap:wrap;
    justify-content: center;
    width:100%;
}
.Form
{
    background-color:#fff;
    margin-top:50px;
}
.container
{
    display:flex;
    justify-content:space-around;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    width:700px;
    
    
}
.form
{
    display:flex;
    justify-content:space-around;
    flex-direction:column;
    width:60%;
    margin:20px;
}
.image>img
{
    width:400px;
    height:400px;
}
button
{
    height:40px;
    width:150px;
    color:#fff;
    background-color:#dc2f02;
    font-size:1.3rem;
    border:none;
    border-radius:5px;
    margin-top:10px;
    font-family: 'Ysabeau Office', sans-serif;
}
input[type="text"]
{
    width:90%;
    box-sizing:border-box;
    border:2px solid grey;
    border-width:0px 0px 2px 0px;
    margin-bottom:10px;
    font-family: 'Ysabeau Office', sans-serif;
    font-size:1.2rem;
}
input[type="text"]:focus{
    outline:none;
    border-image:linear-gradient(to right,#DEAFDB 0%,#EFB9AD 100%) 1;
    border-width:0px 0px 2px 0px;

}

button:hover
{
    cursor:pointer;
    background-color:#6a994e;
}
::placeholder{
    font-size:1.2rem;
    font-family: 'Ysabeau Office', sans-serif;
}
span{
    font-family: 'Ysabeau Office', sans-serif; 
    
}
.label
{
    font-family: 'Ysabeau Office', sans-serif;  
}
        </style>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ysabeau+Office:ital@1&display=swap" rel="stylesheet">
    </head>
    <body>

    <?php
include('Navbar.php')?>
    <div class="head">
    <div class="Form">
     <div class="container">
     <div class="image">
    
         <img src="	https://img.freepik.com/free-vector/access-control-system-abstract-concept_335657-3180.jpg?w=360" ></img>
         
     </div>
     
     <div  class="form">
         <h1>Login</h1>
         <form action="admincheck.php" method="post">
         <div class="username">
         <input type="text" name="username" placeholder="Username" required ></input>
         </div>
         
         <div class="password">
         <input type="text" name="password" placeholder="Passsword" required></input>
         </div>
         
         <div class="label">
         <input type="checkbox"
                        class="custom-control-input"></input>
                     <label class="custom-control-label">Remember me</label>
                    </div>
         
         <div class="button">
         <button>Login</button>
         </div>
        
</form>
     </div>
    
     </div>
     </div>
  </div>

  

    
  </body>

  </html>