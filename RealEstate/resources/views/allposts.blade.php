<!DOCTYPE html>
<html>

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">



    <title>Listings Preview</title>
</head>




<body>
    <div class="container">

        <div class="row pt-10"> <strong>
                <h1> Listings Preview</h1>
            </strong> </div>
        <div class="row pt-10">
            @foreach($posts as $post)
            <div class="row pl-5 pt-4">
                <a href="/propertypage/{{$post->id}}">
                    <div class="card">
                        <div> <img class="v0_226" src="/storage/{{$post->image}}" alt=""></div>
                        <p class="v0_225">{{$post->name}}</p>
                        <div class="v0_227">
                            <div class="v0_246">
                                <div class="v0_247"> </div>
                                <span class="v0_250">{{$post->bed}}</span>
                            </div>
                        </div>
                        <div class="v0_228">
                            <div class="v0_251"><span class="v0_252">{{$post->showers}}</span>
                                <div class="v0_253"></div>
                            </div>
                        </div>
                        <div class="v0_229">
                            <div class="v0_232">
                                <div class="v0_233"></div>
                                <span class="v0_245">{{$post->size}}m2</span>
                            </div>
                        </div>
                    </div>

                </a>
            </div>
            @endforeach
        </div>

    </div>






</body>


</html>