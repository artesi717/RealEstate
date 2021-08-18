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

<div class="container mt-5">

<h2>Laravel Google Autocomplete Address Example</h2>



<div class="form-group">

    <label>Location/City/Address</label>

    <input type="text" name="autocomplete" id="autocomplete" class="form-control" placeholder="Choose Location">

</div>



<div class="form-group" id="latitudeArea">

    <label>Latitude</label>

    <input type="text" id="latitude" name="latitude" class="form-control">

</div>



<div class="form-group" id="longtitudeArea">

    <label>Longitude</label>

    <input type="text" name="longitude" id="longitude" class="form-control">

</div>

<button type="submit" class="btn btn-primary">Submit</button>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<script type="text/javascript"

src="//maps.googleapis.com/maps/api/js?key=AIzaSyCiJSD863xwsB_tu5n4RwN5xwc7nfSZ2UM&libraries=places" ></script>

<script>

$(document).ready(function () {

    $("#latitudeArea").addClass("d-none");

    $("#longtitudeArea").addClass("d-none");

});

</script>

<script>

google.maps.event.addDomListener(window, 'load', initialize);



function initialize() {

    var input = document.getElementById('autocomplete');

    var autocomplete = new google.maps.places.Autocomplete(input);



    autocomplete.addListener('place_changed', function () {

        var place = autocomplete.getPlace();

        $('#latitude').val(place.geometry['location'].lat());

        $('#longitude').val(place.geometry['location'].lng());



        $("#latitudeArea").removeClass("d-none");

        $("#longtitudeArea").removeClass("d-none");

    });

}

</script>
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
        <iframe src="//maps.googleapis.com/maps/api/js?key=AIzaSyCiJSD863xwsB_tu5n4RwN5xwc7nfSZ2UM&libraries=places" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    

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


<!--
<!DOCTYPE html>
<html>

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwindcss.min.css" rel="stylesheet">

    <!-- Styles 
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

    <h1 class="headerquote">Whether youâ€™re buying, <br> selling or renting, <br> we can help you <br> move forward.</h1>

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

</html>-->