@extends('layouts.app')
<link rel="stylesheet" href="{{ URL::asset('css/card.css') }}">

<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h1">{{ $user->name ?? 'Nuk ka te dhena' }}</div>

                </div>

                <a href="/p/create">Add New Post</a>
            </div>
            <a href="/profile/{{$user->id}}/edit">Edit Profile</a>


            <div class="d-flex">
                <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
            </div>
            <div>{{$user->profile->description ?? 'Nuk ka te dhena'}}</div>
        </div>
    </div>



    <div class="row pt-4 ">
        @foreach($user->posts as $post)
        <div class="row pl-5 pt-4">
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
                        <span class="v0_245">{{$post->size}}</span>
                    </div>
                </div>
            </div>

            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection