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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!------ Include the above in your HEAD tag ---------->




    <title>Admin</title>
</head>

<style>
    .butonisave {
        background-color: transparent;
        border-radius: 31px;
        border: 2px solid black;
        display: inline-block;
        cursor: pointer;
        color: black;
        font-family: 'DM Sans', sans-serif;
        font-size: 17px;
        padding: 5px 33px;
        text-decoration: none;
        float: left;
    }

    .butonisave:hover {
        background-color: transparent;
        text-decoration: none;
        color: #797D7F;
    }

    .butonisave:active {
        position: relative;
        top: 1px;
    }
    }
</style>

<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://i.ibb.co/QHzJFmg/logobardh.png" style="width:30%;margin-left:-190%;" alt="LOGO">
            </a>
        </div>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">

                <li>
                    <a href="/admindashboard"><i class="fas fa-chart-line"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/admindashboard/approved"><i class="fas fa-check-circle"></i> Approved Posts</a>
                </li>
                <li>
                    <a href="/admindashboard/pending"><i class="fas fa-eye-slash"></i> Pending Posts</a>
                </li>  
                <li>
                    <a href="{{ url('/') }}"><i class="fas fa-backspace"></i> Homepage</a>
                </li>
                <li>
                    <a href="/p/create"><i class="fas fa-plus-circle"></i> Create post</a>
                </li>
                <li>
                    <a href="search"><i class="fas fa-users"></i> All posts</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main">
                <div class="col-sm-4 col-md-12 well" id="content">
                    <div class="row pl-5 pt-10"> <strong>
                            <h1>Welcome Admin</h1>
                        </strong> </div>




                    <!-- /.row -->

                    <!-- /.container-fluid -->

                    <!-- /#page-wrapper -->
                </div><!-- /#wrapper -->


                <div class="postimet">
                    <div class="row pl-5 pt-4">
                        @foreach($posts as $post)
                        @if($post->status==0)
                        <div class="row px-4 pt-4">
                            <a disabled href="/propertypage/{{$post->id}}">
                                <div style="opacity:0.4;" disabled class="card">
                                    <div> <img class="v0_226" src="/storage/{{$post->image}}" alt=""></div>
                            </a>

                            <p class="v0_225"> Pending {{$post->name}}</p>
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
                            <form class="forma1" action="/propertypage/ {{ $post->id }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="col-4 offset-2">
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4  col-form-laber"></label>
                                        <select name="status" id="status" class="custom-select butoniactive" aria-label=".form-select-sm example">
                                            <option disabled selected>Status <i class="fas fa-chevron-down"></i></option>
                                            <option value="1">Approve</option>
                                            <option value="0">Disapprove</option>
                                        </select>

                                        @if ($errors->has('status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- </form> -->


                        </div>

                        @else
                        <div class="row px-4 pt-4">

                            <a href="/propertypage/{{$post->id}}">
                                <div class="card carddisable" style="opacity: 1">
                                    <div> <img class="v0_226" src="/storage/{{$post->image}}" alt=""></div>
                            </a>
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
                            <form class="forma1" action="/propertypage/ {{ $post->id }}" enctype="multipart/form-data" method="post">
                                @csrf
                                @method('PATCH')
                                <div class="col-4 offset-2">
                                    <div class="form-group row">
                                        <label for="status" class="col-md-4  col-form-laber"></label>
                                        <select name="status" id="status" class="custom-select butoniactive" aria-label=".form-select-sm example">
                                            <option disabled selected>Status <i class="fas fa-chevron-down"></i></option>
                                            <option value="1">Approve</option>
                                            <option value="0">Disapprove</option>
                                        </select>

                                        @if ($errors->has('status'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('status') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <!-- </form> -->

                        </div>

                        @endif

                        <div class="col-4 offset-2">
                            <!--    <div class="form-group row">
                            <label for="status" class="col-md-4  col-form-laber"></label>
                            <select name="status" id="status" class="custom-select" aria-label=".form-select-sm example">
                                <option disabled selected>Status <i class="fas fa-chevron-down"></i></option>
                                <option value="1">Approve</option>
                                <option value="0">Disapprove</option>
                            </select>

                            @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif
                        </div> -->





                            <div class="row pt-4">
                                <button class="butonisave"> Save Changes </button>
                            </div>

                        </div>

                    </div>

                    </form>

                    @endforeach
                </div>

            </div>
        </div>




</html>

<style>
    .carddisable {}

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

    @media(min-width:768px) {
        body {
            margin-top: 50px;
        }

        /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
    }


    #butoni11 {
        color: white;
        font-weight: 800;
        background-color: rgba(0, 0, 0, .7);
        border-radius: 23px;
        padding: 2px;
        margin-top: 27px;
        margin-inline-start: 0px;
        height: 32px;
        padding-right: 15px;
        width: auto;
        border: 0;
        white-space: nowrap;
        font-size: 17px;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    #butoni11:hover {
        background-color: #282828;
    }

    #butoni11:focus {
        text-decoration: none;
        background-color: #282828;
        border: 0;
    }

    #butoni11:active {
        background-color: #282828;
    }

    #butoni11:visited {
        background-color: #282828;
    }

    .btn-primary.active,
    .btn-primary:active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #282828;
        background-image: none;
        border-color: #282828;
    }

    .btn-primary.active.focus,
    .btn-primary.active:focus,
    .btn-primary.active:hover,
    .btn-primary:active.focus,
    .btn-primary:active:focus,
    .btn-primary:active:hover,
    .open>.dropdown-toggle.btn-primary.focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .open>.dropdown-toggle.btn-primary:hover {
        color: #fff;
        background-color: #282828;
        border-color: #282828;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        right: 800px;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 8px 0;
        margin: 2px 0 0;
        font-size: 16px;
        font-weight: 600;
        text-align: left;
        list-style: none;
        color: rgb(83, 77, 77);
        background-color: #806e6e;
        background-clip: padding-box;
        /* border: 1px solid #ccc; */
        border: 1px solid rgba(0, 0, 0, .15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    }

    .dropdown-menu>li>a.a1 {
        display: block;
        /* padding: px; */
        width: 200px;
        background-color: black;
        font-size: 15px;
        font-weight: 600;
        border-radius: 25px;
        color: white;
    }

    .dropdown-menu>li>a.a1:hover {
        background-color: #282828;
        color: white;
    }

    .dropdown-menu>li>a.a12 {
        background: none !important;
        background-color: black;
        font-size: 25px;
        font-weight: 600;
        color: white;
    }

    .a12 {
        display: block;
        /* padding: px; */
        width: 200px;
        background-color: transparent;
        font-size: 15px;
        font-weight: 600;
        border: 0;
        text-align: left;
        border-radius: 25px;
        padding-left: 0;
        color: white;
    }

    .a12:hover {
        color: white;
    }

    .dropdown-menu>li>a:hover {
        background-color: rgb(78, 75, 75);
    }


    #wrapper {
        padding-left: 0;
    }

    #page-wrapper {
        width: 100%;
        padding: 0;
        background-color: #fff;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-left: 225px;
        }

        #page-wrapper {
            padding: 22px 10px;
        }
    }

    /* Top Navigation */

    .top-nav {
        padding: 0 15px;
    }

    .top-nav>li {
        display: inline-block;
        float: left;
    }

    .top-nav>li>a {
        padding-top: 20px;
        padding-bottom: 20px;
        line-height: 20px;
        color: #fff;
    }

    .top-nav>li>a:hover,
    .top-nav>li>a:focus,
    .top-nav>.open>a,
    .top-nav>.open>a:hover,
    .top-nav>.open>a:focus {
        color: #fff;
        background-color: #1a242f;
    }

    .top-nav>.open>.dropdown-menu {
        float: left;
        position: absolute;
        margin-top: 0;
        /*border: 1px solid rgba(0,0,0,.15);*/
        border-top-left-radius: 0;
        border-top-right-radius: 0;
        background-color: #fff;
        -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
        box-shadow: 0 6px 12px rgba(0, 0, 0, .175);
    }

    .top-nav>.open>.dropdown-menu>li>a {
        white-space: normal;
    }


    .butoniactive {
        margin-left: 150% !important;
        margin-top: 13%;
        border-radius: 10px;
    }

    .forma1 {}






    .flip-card {
        background-color: transparent;
        width: 300px;
        height: 300px;
        perspective: 1000px;
        float: center;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.6s;
        transform-style: preserve-3d;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .flip-card-front,
    .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-card-front {
        background-color: #bbb;
        color: black;
    }

    .flip-card-back {
        background-color: #2980b9;
        color: white;
        transform: rotateY(180deg);
    }

    /* Side Navigation */

    @media(min-width:768px) {
        .side-nav {
            position: fixed;
            top: 60px;
            left: 225px;
            width: 225px;
            margin-left: -225px;
            border: none;
            border-radius: 0;
            border-top: 1px rgba(0, 0, 0, .5) solid;
            overflow-y: auto;
            background-color: #222;
            /*background-color: #5A6B7D;*/
            bottom: 0;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        .side-nav>li>a {
            width: 225px;
            border-bottom: 1px rgba(0, 0, 0, .3) solid;
        }

        .side-nav li a:hover,
        .side-nav li a:focus {
            outline: none;
            background-color: #1a242f !important;
        }
    }

    .side-nav>li>ul {
        padding: 0;
        border-bottom: 1px rgba(0, 0, 0, .3) solid;
    }

    .side-nav>li>ul>li>a {
        display: block;
        padding: 10px 15px 10px 38px;
        text-decoration: none;
        /*color: #999;*/
        color: #fff;
    }

    .side-nav>li>ul>li>a:hover {
        color: #fff;
    }

    .well {
        border: 0;
        background-color: white;
        text-align: center;
    }

    .navbar .nav>li>a>.label {
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        border-radius: 50%;
        position: absolute;
        top: 14px;
        right: 6px;
        font-size: 10px;
        font-weight: normal;
        min-width: 15px;
        min-height: 15px;
        line-height: 1.0em;
        text-align: center;
        padding: 2px;
    }

    .navbar .nav>li>a:hover>.label {
        top: 10px;
    }

    .navbar-brand {
        padding: 5px 15px;
    }







    .custom-select {
        position: relative;
        font-family: 'DM Sans'sans-serif;
        width: 120px;
        font-size: 15px;
        background: linear-gradient(90deg, rgba(180, 127, 63, 1) 0%, rgba(196, 114, 29, 1) 35%, rgba(255, 128, 0, 1) 100%);
        color: black;
        font-weight: 800;
    }

    .custom-select:focus {
        border: 1px white;
    }

    .custom-select select {
        display: none;
        /*hide original SELECT element:*/
    }

    .select-selected {
        background-color: DodgerBlue;
    }

    /*style the arrow inside the select element:*/
    .select-selected:after {
        position: absolute;
        content: "";
        top: 14px;
        right: 10px;
        width: 0;
        height: 0;
        border: 6px solid transparent;
        border-color: #fff transparent transparent transparent;
    }

    /*point the arrow upwards when the select box is open (active):*/
    .select-selected.select-arrow-active:after {
        border-color: transparent transparent #fff transparent;
        top: 7px;
    }

    /*style the items (options), including the selected item:*/
    .select-items div,
    .select-selected {
        color: #ffffff;
        padding: 8px 16px;
        border: 1px solid transparent;
        border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
        cursor: pointer;
        user-select: none;
    }

    /*style items (options):*/
    .select-items {
        position: absolute;
        background-color: DodgerBlue;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 99;
    }



    /*hide the items when the select box is closed:*/
    .select-hide {
        display: none;
    }

    .select-items div:hover,
    .same-as-selected {
        background-color: rgba(0, 0, 0, 0.1);
    }
</style>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $(".side-nav .collapse").on("hide.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
        });
        $('.side-nav .collapse').on("show.bs.collapse", function() {
            $(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");
        });
    })
</script>