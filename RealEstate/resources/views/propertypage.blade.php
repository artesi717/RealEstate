<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<<<<<<< Updated upstream
        
=======
        <link rel="stylesheet" href="{{ URL::asset('css/propertydescription.css') }}">
>>>>>>> Stashed changes

    </head>
    <body class="antialiased">
    <div class="propertypageinfo">  
        @include('propertypageinfo')
    </div>  
    <div class="propertypageinfo">  
        @include('propertydescription')
    </div>  
<<<<<<< Updated upstream
    <div class="propertypageinfo">  
        @include('similarlistings')
    </div> 
=======
>>>>>>> Stashed changes
 
</html>