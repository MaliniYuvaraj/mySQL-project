<!DOCTYPE html>
<html>
    <head>
        <title>BrainOBrain Skill Development</title>
        <link rel="stylesheet" href="./css/awards.css">

        <style>
            h2{
    text-align:center;
    padding:30px;
    font-family: 'Courgette', cursive;
}
            .Gallery{
                display:flex;
                flex-wrap:wrap;
                height:500px;
                justify-content:space-around;
                width:100%;
            
            }
            .gallery{
                width:30%;
                 height:200px;
                 padding:10px;
                
            }
            .gallery>img{
                width:100%;
                height:200px;
                border-radius:20px;
                transition:1s;
                transform:scale(0.95);
            }
            .gallery>img:hover{
                transform:scale(1);
            }
            
            .Pressrelease{
                display:flex;
                flex-wrap:wrap;
                height:840px;
                justify-content:space-around;
                width:100%;
            
            }
            .pressrelease{
                width:30%;
                 height:400px;
                 padding:10px;
                
            }
            .pressrelease>img{
                width:100%;
                height:400px;
                border-radius:20px;
                transition:1s;
                transform:scale(0.95);
            }
            .pressrelease>img:hover{
                transform:scale(1);
            }
            </style>
        </head>


        <body>
            <?php
            include('Navbar.php')?>
            <h2>Our Students Gallery</h2>
            <div class="Gallery">
            <div class="gallery">
                    <img src="./Images/gallery.jpg">
</div>
                <div class="gallery">
                    <img src="./Images/gallery1.jpg">
</div>
<div class="gallery">
                    <img src="./Images/gallery2.jpg">
</div>
<div class="gallery">
                    <img src="./Images/gallery3.jpg">
</div>
<div class="gallery">
                    <img src="./Images/gallery4.jpg">
</div>
<div class="gallery">
                    <img src="./Images/gallery5.jpeg">
</div>
</div>

<h2>Press release</h2>
            <div class="Pressrelease">
                <div class="pressrelease">
                    <img src="./Images/gallery6.jpeg">
</div>
<div class="pressrelease">
                    <img src="./Images/gallery7.jpg">
</div>
<div class="pressrelease">
                    <img src="./Images/gallery8.jpg">
</div>
<div class="pressrelease">
                    <img src="./Images/gallery9.jpeg">
</div>
<div class="pressrelease">
                    <img src="./Images/gallery10.jpg">
</div>
<div class="pressrelease">
                    <img src="./Images/gallery11.jpg">
</div>
</div>
        <?php
include('footer.php')?>
            </body>
            </html>