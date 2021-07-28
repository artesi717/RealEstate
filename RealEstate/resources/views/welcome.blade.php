
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
    <div class="listingspreview"> 
        @include('listingspreview')
    </div>
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
            padding-top:1700px;
        }
        .cta{
            padding-top: 400px;
        }
        body {
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }

        @media only screen and (max-width: 375px) {
            body {
            overflow-x: hidden; /* Hide horizontal scrollbar */
        }  
    }
    </style>
</html>