
<style>
    body    {
        background-image:url('https://a.mktgcdn.com/p/xf9-qq33xMLZI_AlpPSacIxKsZBI8NAui7L9p745Zq8/1950x950.jpg');
        background-repeat:no-repeat; 
        background-size: 1950px 590px;
    }

    .quotepeek {
        font-family: 'Poiret One', cursive;
        font-weight:800;
        font-size:70px;
        flex-wrap: nowrap;
        padding-bottom:320px;
        color: rgb(255,255,255);
        text-shadow: 1px 3px 5px rgba(169,173,147,0.93);


    }
    b {
        font-weight:bolder;
    }

    .addpost {
    width: 169px;
    height: 40px;
    justify-content: center;
    background: linear-gradient(90deg, rgba(180,127,63,1) 0%, rgba(196,114,29,1) 35%, rgba(255,128,0,1) 100%);
    display: inline-block;
    cursor: pointer;
    color: black;
    font-family: 'DM Sans', sans-serif;
    font-size: 16px;
    padding: 9px 31px;
    border-radius: 0px 16px 0px 0px;
    font-weight:800;
    }

    .addpost:hover {
        text-decoration:none;
        color:white;
    }

    .h1 {
        font-weight:bolder;

    }

    .editprofil {
        font-size:16px;
        color: #D68910;
        font-weight:600;
    }


    strong {
        color:gray;
        font-size:17px;
    }
</style>


@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('css/card.css') }}">

<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">


@section('content')


<div class="container">
 <br><br><br><br><br>
<h5 class="quotepeek">“Home is where our story begins…”</h5>

    <div class="row">
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                 <h3 style="color:black;font-size: 2.25rem;" class="welcome11">Welcome&nbsp;</h3> <b> <div class="h1">{{ $user->name ?? 'Nuk ka te dhena' }}</div></b>

                </div>

                @can('update',$user->profile)
    
                <a class="addpost" href="/p/create">Add New Post</a>
                @endcan

            </div>
            

            @can('update',$user->profile)
            <a class="editprofil" href="/profile/{{$user->id}}/edit">Edit Profile</a>

            @endcan



            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
            </div>
            <div>{{$user->profile->description}}</div>
        </div>
    </div>



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

            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection