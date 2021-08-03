<!DOCTYPE html>
<html>
<head>
<title>Log in</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

</head>
<body>
    <div class="container">
      
        <div class="pjesa1">
          <h1 class="fjala1 ml16">WELCOME</h1> <br>
          <img src="https://i.ibb.co/YBLyRns/njeriulogin.png" alt=""> <br>
          <h3 class="pershkrim">Don't have an account?</h3> <br>
            <span style="background-color:#19A7A7;" class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span> <br>

            <a href="registerview.blade.php" class="myButton">Register here</a>

        </div>



        <div class="pjesa2">
            <img class="foto37" src="https://i.ibb.co/nfWM2ML/output-onlinepngtools-9.png" alt=""> <br>
            <input class="input1" type="text" placeholder="Email">
            <input class="input1" type="password" placeholder="Password"> <br>
            <a href="#" class="myButton1">Login</a>
            <a href="resetview.blade.php" class="forgotpass">Reset password</a>


        </div>

    </div> 

    <style>
        
        .ml16 {
        color: #402d2d;
        padding: 40px 0;
        font-weight: 800;
        font-size: 2em;
        text-transform: uppercase;
        letter-spacing: 0.5em;
        overflow: hidden;
        }   

        .ml16 .letter {
        display: inline-block;
        line-height: 1em;
        }
   

        /* PJESA TE ANA E DJATHTE */

        .pjesa2 {
            border-radius:0px 10px 10px 0px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('https://www.challenges.fr/assets/img/2020/03/26/cover-r4x3w1000-5ea155f51f0cf-647-actu-monde-taxis-are-lined-up-outside-grand-central.jpg');
            text-align:center;
            background-repeat:no-repeat;
        }

        .foto37 {
            width:25%;
            margin-top:100px;
        }


        .forgotpass {
            font-size:17px;
            color:white;
            padding-top:45px;
            margin-right:-115px;
        }

        .forgotpass:hover {
            color:white;
            text-decoration:none;
        }

        .myButton1 {
            background-color:transparent;
            border-radius:31px;
            margin-top:40px;
            border:2px solid white;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size:17px;
            padding:5px 33px;
            text-decoration:none;
            text-shadow:0px 1px 0px #2f6627;
            margin-left:70px;     
            float:left;       
        }
    
        .myButton1:hover {
            background-color:transparent;
            text-decoration:none;
            color:#797D7F;
        }
      
        .myButton1:active {
            position:relative;
            top:1px;
        }

     


        .input1 {
            width:430px;
            height:40px;
            border-radius:10px;
            opacity:0.8;
            border:0px;
            margin-top:30px;
            font-weight:800;
            text-indent: 15px;

        }

        .input1:hover {
            border:0;
            outline: none;
        }

        .input1:focus {
            border:0;
            outline: none;
        }




        /* PJESA TE ANA E MAJTE */
        
        .pjesa1 {
            border-radius:10px 0px 0px 10px;
            text-align:center;
            background-color:white;
        }  
        .myButton {
            background-color:transparent;
            border-radius:28px;
            margin-top:20px;
            border:2px solid #797D7F;
            display:inline-block;
            cursor:pointer;
            color:#797D7F;
            font-family: 'DM Sans', sans-serif;
            font-size:17px;
            font-weight:800;
            padding:7px 76px;
            text-decoration:none;
            font
        }
        
        .myButton:hover {
            background-color:transparent;
        }
       
        .myButton:active {
            position:relative;
            top:1px;
        }
        .myButton:hover {
            position:relative;
            text-decoration:none;
            color:#424949;
        }


        .dot {
            height: 22px;
            width: 22px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .pershkrim {
            font-weight:bold;
            color:#727272;
            margin-top:10px;
            font-size:23px;

        }

        .fjala1 {
            margin-top:20px;
            letter-spacing:9px;
            font-weight:800;
            color:#727272;
            font-size:30px;
        }


        body {
            margin-top:10%;
            font-family: 'DM Sans', sans-serif;
            background-color:#FFAC12;
        }

       .item {
            width: 60%
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .container > div {
            flex: 20%; /* or - flex: 0 50% - or - flex-basis: 50% - */
            /*demo*/
            box-shadow: 0 0 0 1px transparent;
            margin-bottom: 10px;
            height:600px;
        }

        
    </style>

    <script>
        // Wrap every letter in a span
var textWrapper = document.querySelector('.ml16');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml16 .letter',
    translateY: [-100,0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i
  }).add({
    targets: '.ml16',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 5000000
  });
    </script>
</body>
</html>