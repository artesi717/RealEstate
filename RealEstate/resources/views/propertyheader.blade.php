<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/propertyheader.css') }}">

<title>Page Title</title>
</head>
    <body>   
    <style>
              .myButton {
	        background-color:#ffac12;
	        cursor:pointer;
	        color:black;
            font-family: 'Manrope', sans-serif;
	        font-size:16px;
	        padding:10px 31px;
            left: 78%;
            border-radius:0px 16px 0px   0px;
            position: absolute;
            
        }

        .head   {
          position: absolute;
          width: 1920px;
          height: 228px;
          left: 0px;
          top: 0px;

          background: linear-gradient(225.52deg, #271A00 0.45%, rgba(0, 0, 0, 0.982162) 100.47%);;
        }

        .navlink1 {
          position: absolute;
          display: flex;
          height: 20px;
          left: 35.73%;
          right: 58.75%;
          top: calc(50% - 20px/2);

          font-family: DM Sans;
          font-style: normal;
          font-weight: bold;
          font-size: 15px;
          line-height: 20px;

          /* identical to box height */
          letter-spacing: -0.376923px;

          color: #FFFFFF;
        }

        .navlink2 {
          position: absolute;
          height: 20px;
          left: 46.87%;
          right: 47.61%;
          top: calc(50% - 20px/2);

          font-family: DM Sans;
          font-style: normal;
          font-weight: bold;
          font-size: 15px;
          line-height: 20px;

          /* identical to box height */
          letter-spacing: -0.376923px;

          color: #FFFFFF;

        }

        .navlink3{
          position: absolute;
          height: 20px;
          left: 58%;
          right: 36.48%;
          top: calc(50% - 20px/2);

          font-family: DM Sans;
          font-style: normal;
          font-weight: bold;
          font-size: 15px;
          line-height: 20px;

          /* identical to box height */
          letter-spacing: -0.376923px;

          color: #FFFFFF;
        }

        .navlink4 {
          position: absolute;
          height: 20px;
          left: 69.13%;
          right: 25.35%;
          top: calc(50% - 20px/2);

          font-family: DM Sans;
          font-style: normal;
          font-weight: bold;
          font-size: 15px;
          line-height: 20px;

          /* identical to box height */
          letter-spacing: -0.376923px;

          color: #FFFFFF;

        }

        i {
            color:white;
            padding-left: 10px;
            
        }
        .logo1{
            
            margin-left: -19.5%;
            
            
        }

        .line{
          position: absolute;
          width: 1920px;
          height: 1px;
          left: 0px;
          top: 114px;

          background: #FFFFFF;
          mix-blend-mode: normal;
          opacity: 0.1;
        }
        
        .house{
          position: absolute;
          height: 42px;
          left: 10%;
          right: 0%;
          padding-top: 40px;

          font-family: DM Sans;
          font-style: normal;
          font-weight: bold;
          font-size: 32px;
          line-height: 42px;

          /* identical to box height */
          letter-spacing: -0.804102px;

          color: #FFFFFF;
        }
        
        .price{
          position: absolute;
          padding-top: 40px;
          height: 42px;
          left: 80.3%;
          right: 0%;
          

          font-family: DM Sans;
          font-style: normal;
          font-weight: bold;
          font-size: 32px;
          line-height: 42px;

          /* identical to box height */
          
          letter-spacing: -0.804102px;

          color: #FFFFFF;
        }

        .address{
          position: absolute;
          padding-top: 80px;
          height: 24px;
          left: 10%;
          right: 0%;
          

          font-family: DM Sans;
          font-style: normal;
          font-weight: normal;
          font-size: 15px;
          line-height: 24px;

          /* identical to box height, or 160% */
          letter-spacing: -0.376923px;

          color: #FFFFFF;

          mix-blend-mode: normal;
          opacity: 0.6;
        }

        .sqprice{
          position: absolute;
          height: 24px;
          left: 83.78%;
          right: -0.09%;
          padding-top: 80px;
          

          font-family: DM Sans;
          font-style: normal;
          font-weight: normal;
          font-size: 15px;
          line-height: 24px;

          /* identical to box height, or 160% */
          letter-spacing: -0.376923px;

          color: #FFFFFF;

          mix-blend-mode: normal;
          opacity: 0.6;
        }

       

    </style>
<div>
  <div class="head">
</div>
<div class="navtext"> 
	<nav class="navbar navbar-expand-lg navbar-transparent bg-transparent static-top">
  <div class="container">
    <a class="navbar-brand" href="#">
          <img class="logo1" src="https://media.discordapp.net/attachments/862274203377205282/865231872107216916/gitlab-white-logo.png?width=1440&height=511" alt="" style="width:20%;">
           
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

          <a class="navlink1" href="#">Nav link</a>

          <a class="navlink2" href="#">Nav link</a>

          <a class="navlink3" href="#">Nav link</a>

          <a class="navlink4" href="#">Nav link</a> 
      

      
  <a href="" class="myButton">Work with us   <i class="fas fa-long-arrow-alt-right"></i></a> </div></div></div>
  
  <div>
        <div class="line"> </div>
        
  </div>

  <div> 
        <div class="house" > Modern House </div>
        <div class="price"> $450,000</div>
        <div class="address"> 3002 Foster Axe, Brooklyn, NY11210, USA</div>
        <div class="sqprice"> $2,800/sq ft</div>

    </div>
  </div></div>

  </>
</nav>
</div>



    </body>
</html>
