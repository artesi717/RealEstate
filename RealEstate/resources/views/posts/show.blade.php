@extends('layouts.app')

<meta name="viewport" content="width=device-width, initial-scale=1.0">



<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=DM+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/card.css') }}">

@section('content')
<div class="container">
    <div class="card">

        <img src="/storage/{{$post->image}}" class="v0_226" >
        <p class="v0_225">Malto House</p>
        <div class="v0_227">
            <div class="v0_246">
                <div class="v0_247">
                </div><span class="v0_250">4</span>
            </div>
        </div>
        <div class="v0_228">
            <div class="v0_251"><span class="v0_252">2</span>
                <div class="v0_253">
                </div>
            </div>
        </div>
        <div class="v0_229">
            <div class="v0_246">
                <div class="v0_247">
                </div><span class="v0_250">4</span>
            </div>
        </div>

    </div>
</div>
@endsection