<!DOCTYPE html>
<html>
    <head>
        <title>BrainOBrain Skill Development</title>
        <link rel="stylesheet" href="./css/about.css">
        <style>
            .Background{
    display:flex;
    justify-content:space-around;
}
.background{
    width:80%;
    height:100vh;
    
}
.background>img{
    width:100%;
    height:100vh;
}
h2{
    text-align:center;
    padding:30px;
    font-family: 'Courgette', cursive;
}
.intro{
    display:flex;
    width:100%;
    height:400px;
    justify-content:space-around;
   }
   .image{
       width:40%;
   
   }
   .image>img{
       width:100%;
       height:400px;
       border-radius:20px;
       transform:scale(1);
       transition:1s;
       }
   .image>img:hover
   {
       transform:scale(1.05);
   }
   .para{
       width:40%;
       box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
       padding:20px;
   }
   p{
       font-size:1.1rem;
       font-family: 'Courgette', cursive;
       font-weight:normal;
   }

   .Views{
    display:flex;
    justify-content:space-around;
    width:100%;
    height:300px;
    margin-bottom:20px;
   }
   .views{
    width:25%;
    height:300px;
   }
   h6{
    text-align:center;
    color:purple;
    font-weight:bold;
    background-color:#ecf39e;
    border-radius:10px;
    padding:10px;
   }
            </style>

        </head>

        <body>
            <?php
            include('Navbar.php')?>
            <div class="Background">
            <div class="background">
                <img src="./Images/picture3.jpg">
            </div>
        </div>

        <h2>About us</h2>
        <div class="intro">
    <div class="image">
        <img src="./Images/aboutimage1.jpg">
</div>
<div class="para">
    <p>Brainobrain is one of the world’s leading children institutes for self empowerment. Having its corporate office in Chennai, India. Brainobrain kids academy private limited is an ISO 9001 : 2015 certified institution established in the year 2003, manned by professionals who have had a decade of international experience in kids education and training. Brainobrain operates in 45 countries, such as India, UK, Norway, USA, Canada, Australia, Morocco, Yemen, Ireland, Slovenia, Poland, Macedonia, Libya, UAE, Denmark, France, Saudi Arabia, Serbia, Kosovo, Oman, Qatar, Croatia, Nigeria, New Zealand, Zambia, Bosnia, Egypt, Cyprus, Austria, Czech Republic, Bulgaria, Malaysia, Kuwait, Zimbabwe, Bangladesh, Philipines & Vietnam.</p>
    9 <div class=""></div>
</p>
</div>
</div>

<h2>Views of Eminent Personalities</h2>
<div class="Views">
    <div class="views">
        <h6>Dr.Kiran Bedi-First Women IPS officer of India</h6>
        <p> I thank Brainobrain for the brilliance that you are giving to our children. You are reviving our genes and heritage. I don’t have enough words to say. This is just what is needed. I wish I had also learnt it as a child. I congratulate Brainobrain, the Nation thanks you and I, as a citizen of the country, thank the parents who are investing time on their own children.</p>
</div>
<div class="views">
        <h6>Wg.cdr.Rakesh Sharma-First Indian Cosmonaut</h6>
        <p>I am thrilled to watch Brainobrain kids… 35% to 40% of NASA Scientists are of Indian origin. And, when I see the Brainobrain kids, I know that the future of the country is in safe hands. I could see Brainobrain is making a strong future generation

        </p>
</div>
<div class="views">
        <h6>Padmashree S.P.Balasubramaniam-Playback Singer</h6>
        <p>“Brainobrain children are great. It is a wonderful experience. You are solving complicated sums in zip of a time. What a great achievement is this! This country will definitely be greener. And you all are putting them in the right path. Hats off to Brainobrain”.

</p>
</div>
</div>

        <?php
include('footer.php')?>
       
    </body>
            </html>