<!DOCTYPE html>
<html>

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwindcss.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/allposts.css') }}">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <script src="bower_components/aos/dist/aos.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />



    <title>Listings Preview</title>
</head>




<body>

    <h1 class="headerquote">Whether you’re buying, <br> selling or renting, <br> we can help you <br> move forward.</h1>

    <div class="v0_155" data-aos="/">
        <div class="v0_170">
        <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                   <form method="get"  action="#">
                        <div class="form-group">
                            <select name="location" id="location" class="form-control" required>
                                <option value="">Select Location</option>
                                <option value="Prishtina">Prishtina</option>
                                <option value="Ferizaj">Ferizaj</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="property_type" id="property_type" class="form-control" required>
                                <option value="">Property Type</option>
                                <option value="House">House</option>
                                <option value="Apartment">Apartment</option>
                            </select>
                        </div>
                        
                        <div class="form-group" align="center">
                            <button type="submit" name="filter" id="filter" class="btn btn-info">Filter</button>
                        </div>
                   </form>
                </div>
                <div class="col-md-4"></div>
            </div>
    </div>
    </div>
    

        <div class="row pt-4" id="posts_data">
            @foreach($posts as $post)
            <div class="row pl-4 pt-4">
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

    <video autoplay muted loop id="myVideo">
        <source src="../images/allpostvideoo.mp4" type="video/mp4">
    </video>




</body>

<script>
    // AOS.init({
    //     duration: 1500
    // });
    // AOS.init();

    // AOS.init({
    //    offset: 200,
    //    duration: 600,
    //    easing: 'ease-in-sine',
    //    delay: 100,
    //  });

    


</script>

</html>