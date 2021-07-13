
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
    
    <div class="content">
        @include('content')
    </div>
    </body>
    <style>
        .homepage2{
            padding-bottom:200px;
        }
        .content{
            padding-bottom:300px;
        }
    </style>
</html>