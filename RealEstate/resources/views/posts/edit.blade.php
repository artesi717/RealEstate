<style>
    body {
        background-image: url('https://wallup.net/wp-content/uploads/2015/12/70610-cabin-modern-house-mountain-landscape-simple.jpg');
    }
</style>


@extends('layouts.app')

@section('content')

<div class="container">
    <form action="/propertypage/ {{ $post->id }}" enctype="multipart/form-data" method="post">
        @csrf

        @method('PATCH')

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Posts Status</h1>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-md-4  col-form-laber"></label>



                    
                    <select name="status" id="status" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option selected>Approve or Disapprove</option>
                        <option value="1">Approve</option>
                        <option value="0">Disapprove</option>
                    </select>

                    @if ($errors->has('status'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('status') }}</strong>
                    </span>
                    @endif
                </div>




                <div class="row pt-4">
                    <button class="btn btn-primary"> Save Post Status </button>
                </div>


            </div>

        </div>
    </form>
</div>
@endsection