<style>
    body {
        background-repeat: no-repeat;
        background-image: url('http://eastafricahotelsonline.com/c/15-category_default/office.jpg');
        background-size: 1920px 400px;
    }

    .quotepeek {
        font-family: 'Poiret One', cursive;
        font-weight: 800;
        font-size: 70px;
        flex-wrap: nowrap;
        padding-bottom: 320px;
        color: rgb(255, 255, 255);
        text-shadow: 1px 3px 5px rgba(169, 173, 147, 0.93);
    }

    b {
        font-weight: bolder;
    }

    .addpost {
        width: 169px;
        height: 40px;
        justify-content: center;
        background: linear-gradient(90deg, rgba(125, 66, 3, 1) 0%, rgba(180, 102, 0, 1) 61%, rgba(228, 132, 21, 1) 100%);

        display: inline-block;
        cursor: pointer;
        color: black;
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        padding: 9px 31px;
        border-radius: 0px 16px 0px 0px;
        font-weight: 800;
        display: inline;
        margin: auto;
    }

    .addpost:hover {
        text-decoration: none;
        color: white;
    }

    .h1 {
        font-weight: bolder;

    }

    .editprofil {
        width: 169px;
        height: 40px;
        justify-content: center;
        background: linear-gradient(90deg, rgba(228, 132, 21, 1) 0%, rgba(180, 102, 0, 1) 61%, rgba(125, 66, 3, 1) 100%);
        display: inline-block;
        cursor: pointer;
        color: black;
        font-family: 'DM Sans', sans-serif;
        font-size: 16px;
        padding: 9px 45.5px;
        border-radius: 16px 0px 0px 0px;
        font-weight: 800;
        display: inline;
        margin-left: auto;
        margin-right: auto;
    }

    .editprofil:hover {
        text-decoration: none;
        color: white;
    }

    strong {
        color: gray;
        font-size: 17px;
    }

    .profilepic {
        width: 12%;
        display: block;
        border-radius: 50%;
        margin-left: 17%;

    }

    .emriwelcome {
        text-align: left;
        color: black;
        margin-left: 32%;
        margin-top: -5%;

    }

    .butonat {
        margin-left: 32%;

    }

    .profileinfo {
        margin-top: 10%;
    }

    .postimet {
        margin-left: 5%;
        margin-top: -10%;
    }

    .pagination {
        display: inline-block;
        text-align: center;
        font-weight: 800;
        font-family: 'DM Sans'sans-serif;
    }

    .pagination a {
        color: black;
        float: left;
        padding: 8px 16px;
        text-decoration: none;
    }

    .descriptioni {
        margin-left: 32%;
    }

    footer {
        width: 175.7%;
        margin-left: -40%;
        margin-top: 10%;
        bottom: 0;
        padding-bottom: 0;
    }

    

</style>


@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('css/card.css') }}">

<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

<body>
    @section('content')
    <div class="profileinfo">

        @if(auth()->check())
        @if(auth()->user()->hasRole('admin'))
        <img class="profilepic" src="https://cdn.pixabay.com/photo/2020/07/01/12/58/icon-5359553_1280.png" alt=""> <br>
        @elseif(auth()->user()->hasRole('user'))
        <img class="profilepic" src="https://www.kindpng.com/picc/m/78-786207_user-avatar-png-user-avatar-icon-png-transparent.png" alt=""> <br>
        @endif @endif

        <div class="emriwelcome">
            <div style="color:black;" class="h1">{{ $user->name ?? 'Nuk ka te dhena' }}</div>
        </div>
        <div style="color:black;text-align:left; margin-left:32%;" class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div> <br>
        <div class="descriptioni">Description: {{$user->profile->description}}</div> <br>

        <div class="butonat">
            @can('update',$user->profile)
            <a class="editprofil" href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan

            @can('update',$user->profile)
            <a class="addpost" href="/p/create">Add New Post</a>
            @endcan
        </div>
    </div>
    <div class="container">
        <br><br><br><br><br>



        <div class="row">
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">

                    </div>

                </div>


            </div>


            <div class="postimet">
                <div class="row pt-4 ">
                    @foreach($user->posts as $post)
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
                            @if ($post->ownedBy(auth()->user()))
                                <div>
                                    <form action="{{  route('profile.destroy', $post)  }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="text-blue-500">Delete</button>
                                     </form>
                                </div>
                            @endif

                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="pagination">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a class="active" href="#">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>


</body>
@include('footer')
@endsection