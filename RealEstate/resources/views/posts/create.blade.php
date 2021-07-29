@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h1>Add New Post</h1>
                </div>
                
                <label for="name">House Name</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="bed">Number of House Beds</label>
                <input id="bed" type="text" class="form-control @error('bed') is-invalid @enderror" name="bed" value="{{ old('bed') }}" required autocomplete="bed" autofocus>
                @error('bed')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="shower">House Showers</label>
                <input id="showers" type="text" class="form-control @error('showers') is-invalid @enderror" name="showers" value="{{ old('showers') }}" required autocomplete="showers" autofocus>
                @error('showers')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="size">House Size (sqm-size)</label>
                <input id="size" type="text" class="form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" required autocomplete="size" autofocus>
                @error('size')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="price">House Price</label>
                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="address">House Address</label>
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
                @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <label for="year">
                   House Year
                </label>
                <input id="year" type="text" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                @error('year')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror


                <div class="row">
                    <label for="image" class="col-md-4 col-form-label text-md-left">
                        <h4>Post Image :</h4>
                    </label>
                    <input type="file" class="form-control-file" id="image" name="image" multiple>
                    @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    <div class="row pt-5">
                        <button class="btn btn-primary">Add New Post </button>
                    </div>
                </div>
            </div>
        </div>

</div>
</form>
@endsection