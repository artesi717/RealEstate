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
    <link rel="stylesheet" href="{{ URL::asset('css/allposts.css') }}">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">
    <script src="bower_components/aos/dist/aos.js"></script>
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwindcss.min.css" rel="stylesheet">

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
    <h1 class="headerquote"></h1>
    <div class="pjesastatike">
        <h3 class="postscount">{{$posts->count()}} properties found</h3>
        <h1 class="quoteez">Find your next place to live</h1>
        <!--  <a href="#" class="myButton1">Looking for <i id="iconaez" class="fas fa-sort-down"></i></a>
            <button type="button" class="myButton1" data-toggle="modal" data-target="#exampleModalCenter">
                Looking for <i id="iconaez" class="fas fa-sort-down"></i>
            </button>-->

        <form method="get" action="#">
            <div class="buttonat123">
                <select class="form-select myButton5" aria-label="Default select example">
                    <option disabled selected>Looking to</option>
                    <option value="Buy">Buy</option>
                    <option value="Rent">Rent</option>
                </select>

                <select class="form-select myButton5" name="location" id="location" aria-label="Default select example">
                    <option disabled selected>Location</option>
                    <option value="Prishtina">Prishtine</option>
                    <option value="Ferizaj">Ferizaj</option>
                </select>

                <select class="form-select myButton5" name="property_type" id="property_type" aria-label="Default select example">
                    <option disabled selected>Property type</option>
                    <option value="House">House</option>
                    <option value="Apartment">Apartment</option>
                </select>
            </div>
            <div class="price1">
                <button class="myButton5 form-select" data-toggle="modal" data-target="#exampleModalCenter3">
                    Price <i id="iconaez" class="fas fa-sort-down"></i>
                </button>
            </div>
            <button type="submit" name="filter" id="filter" class="btn btn-primary myButton1">Save changes</button>


        </form>
    </div>



    <div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Set price</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="form-wrapper">
                        <form action="/p/quote.php" method="GET">
                            <div id="debt-amount-slider">
                                <input type="radio" name="debt-amount" id="1" value="1" required>
                                <label for="1" data-debt-amount="< $10k"></label>
                                <input type="radio" name="debt-amount" id="2" value="2" required>
                                <label for="2" data-debt-amount="$10k-25k"></label>
                                <input type="radio" name="debt-amount" id="3" value="3" required>
                                <label for="3" data-debt-amount="$25k-50k"></label>
                                <input type="radio" name="debt-amount" id="4" value="4" required>
                                <label for="4" data-debt-amount="$50k-100k"></label>
                                <input type="radio" name="debt-amount" id="5" value="5" required>
                                <label for="5" data-debt-amount="$100k+"></label>
                                <div id="debt-amount-pos"></div>
                            </div> <br>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <br><br><br><br><br>
    <div>
        @foreach($posts as $post)
        <div class="container bcontent shadow-none pb-0 bg-light " data-aos="fade-up">
            <hr />

            <div class="card shadow-none p-3 mb-5 bg-light rounded " style="width: 730px; height:auto;">
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <img class="card-img" src="/storage/{{$post->image}}" alt="Suresh Dasari Card">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">Beds : {{$post->bed}}</p>
                            <p class="card-text">Showers : {{$post->showers}}</p>
                            <p class="card-text">Size : {{$post->size}}m2</p>
                            <p class="card-text qmimi">${{$post->price}}</p>

                            <a href="/propertypage/{{$post->id}}" class="btn btn-primary">View Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div id="map-container-google-3" class="z-depth-1-half map-container-3">
        <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>

    <img class="logoopen" src="https://i.ibb.co/55vQ0fL/logozi.png" alt="">

</body>

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

</html>


