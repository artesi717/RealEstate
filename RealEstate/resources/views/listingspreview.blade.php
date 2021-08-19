<!DOCTYPE html>
<html>

<head>

    <?  ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <script src="bower_components/aos/dist/aos.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Listings Preview</title>
</head>

<body>
    <div class="v0_155" data-aos="fade-left">
        <a href="/search" class="hero-p1">Search more properties <i class="fas fa-home"></i></a>
        <div class="listings">
            <div class="container">
                <div class="row pt-4 ">

                    @foreach($posts as $post)
                    <div class="row px-5 pt-4">

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
        </div>



    </div> <br><br>

</body>

</html>

<script>
    AOS.init({
        duration: 1500
    });
    AOS.init();

    // AOS.init({
    //    offset: 200,
    //    duration: 600,
    //    easing: 'ease-in-sine',
    //    delay: 100,
    //  });
</script>