
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        </style>
    </head>
    <body class="antialiased">
    <div class="hero">  
        @include('hero')
    </div>  
       
    <div class="homepage2">
        @include('homepage2')
    </div>  
<<<<<<< HEAD
    <div class="listingspreview">
        @include('listingspreview')
    </div>
=======
    <div class="listingspreview"> 
        @include('listingspreview')
    </div>
    
>>>>>>> 32d2fcc15e4b7cdb719395509c0d26baaa639262
    <div class="content">
        @include('content')
    </div>
    <div class="cta">
        @include('cta')
    </div>
    <div class="footer">
        @include('footer')
    </div>
    </body>
    <style>
        .homepage2{
            padding-bottom:200px;
        }
        .content{
            padding-top:1870px;
        }
        .listingspreview{
            padding-bottom:500px;
        }

    </style>
</html>