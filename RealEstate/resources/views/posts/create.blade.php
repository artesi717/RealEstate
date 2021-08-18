<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>



<style>
  body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.527), rgba(0, 0, 0, 0.5)), url('https://static.dezeen.com/uploads/2020/02/house-in-the-landscape-niko-arcjitect-architecture-residential-russia-houses-khurtin_dezeen_2364_hero.jpg');
    background-repeat: no-repeat;
    color: white;
    font-family: 'DM Sans', sans-serif;
    background-attachment: fixed;

  }

  .input1 {
    width: 430px;
    height: 40px;
    border-radius: 10px;
    opacity: 0.8;
    border: 0px;
    margin-top: 30px;
    font-weight: bolder;
    text-indent: 10px;
    padding-top: 0;
    font-family: 'DM Sans'sans-serif;

  }

  .input1:hover {
    outline: 1px;
  }

  .input1:focus {
    border: 0;
    outline: none;
  }

  .inputat1 {
    padding-bottom: 20px;
  }

  .emri11 {
    color: white;
    font-weight: bolder;
  }

  .myButton1 {
    background-color: transparent;
    border-radius: 31px;
    margin-top: 10px;
    border: 2px solid white;
    display: inline-block;
    cursor: pointer;
    color: #ffffff;
    font-family: 'DM Sans', sans-serif;
    font-size: 17px;
    padding: 5px 33px;
    text-decoration: none;
    text-shadow: 0px 1px 0px #2f6627;
    float: left;
  }

  .myButton1:hover {
    background-color: transparent;
    text-decoration: none;
    color: #797D7F;
  }

  .myButton1:active {
    position: relative;
    top: 1px;
  }


  /* drag drop */

  .file-upload {
    background-color: #ffffff;
    width: 600px;
    margin: 0 auto;
    padding: 20px;
    margin-left: 1.5%;
    border-radius: 10px;
  }

  .file-upload-btn {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #ffac12;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #ffac12;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }

  .file-upload-btn:hover {
    background: #D68910;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }

  .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
  }

  .file-upload-content {
    display: none;
    text-align: center;
  }

  .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
  }

  .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed #ffac12;
    position: relative;
    color: black;
  }

  .image-dropping,
  .image-upload-wrap:hover {
    background-color: #ffac12;
    border: 4px dashed #ffffff;
  }

  .image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
  }

  .drag-text {
    text-align: center;
  }

  .drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: black;
    padding: 60px 0;
  }

  .file-upload-image {
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
  }

  .remove-image {
    width: 200px;
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }

  .remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }

  .remove-image:active {
    border: 0;
    transition: all .2s ease;
  }

  .dropdownat {
    margin-top: -10px;
  }
</style>


@extends('layouts.app')
@section('content')

<div class="container">
  <form action="/p" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="row">
      <div class="col-8 offset-2">
        <div class="row">
          <h1 class="emri11">Add New Post</h1>
        </div>
        <div class="inputat1">
          <label class="emri121" for="name">Name</label>
          <input id="name" type="text" class="input1 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">
          <label class="emri121" for="bed">Number of Rooms</label>
          <input id="bed" type="number" class="input1 form-control @error('bed') is-invalid @enderror" name="bed" value="{{ old('bed') }}" required autocomplete="bed" autofocus>
          @error('bed')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="inputat1">
          <label class="emri121 caramba" for="shower">Toilets</label>
          <input id="showers" type="number" class="input1 form-control @error('showers') is-invalid @enderror" name="showers" value="{{ old('showers') }}" required autocomplete="showers" autofocus>
          @error('showers')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">
          <select id="location" type="text" class="form-select input1 @error('name') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="name" autofocus style="width: 100%;" aria-label="Default select example">
            <option selected>Location</option>
            <option value="Prishtina">Prishtine</option>
            <option value="Ferizaj">Ferizaj</option>
            <option value="Vushtri">Vushtri</option>
          </select>
          @error('location')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">
          <select id="property_type" type="text" class="form-select input1 @error('name') is-invalid @enderror" name="property_type" value="{{ old('property_type') }}" required autocomplete="name" autofocus style="width: 100%;" aria-label="Default select example">
            <option selected>Property type</option>
            <option value="Apartment">Apartment</option>
            <option value="House">Home</option>
          </select>
          @error('property_type')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="inputat1">
          <label class="emri121" for="size">Size (sqm-size)</label>
          <input id="size" type="number" class="input1 form-control @error('size') is-invalid @enderror" name="size" value="{{ old('size') }}" required autocomplete="size" autofocus>
          @error('size')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="emri121" class="inputat1">
          <label for="price">Price</label>
          <input id="price" type="number" class="input1 form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
          @error('price')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">
          <br>
          <label class="emri121" for="address">Address</label>
          <input id="address" type="text" class="input1 form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>
          @error('address')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <div class="inputat1">

          <label class="emri121" for="year">
            Year
          </label>
          <input id="year" type="number" class="input1 form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
          @error('year')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
        <label class="emri121" for="year">
          Description
        </label>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <textarea id="description" class="input1 form-control  @error('description') is-invalid @enderror" style="height:150px" name="description" placeholder="Description" required autocomplete="description" autofocus></textarea>
            @error('description')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>


        <div class="row">
          <label class="emri121" for="image" class="col-md-4 col-form-label text-md-left">
            <h4>Post Image :</h4>
          </label>
          <!--   <input type="file" class="form-control-file" id="image" name="image" multiple>-->
          <div class="file-upload">
            <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>

            <div class="image-upload-wrap">
              <input id="image" name="image" class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
              <div class="drag-text">
                <h3>Drag and drop a file or select add Image</h3>
              </div>
            </div>
            <div class="file-upload-content">
              <img class="file-upload-image" src="#" alt="your image" />
              <div class="image-title-wrap">
                <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
              </div>
            </div>
          </div>
          @error('image')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="row pt-5">
          <button class="myButton1">Add New Post </button>
        </div>
      </div>
    </div>
</div>

</div>
</form>



<script>
  function readURL(input) {
    if (input.files && input.files[0]) {

      var reader = new FileReader();

      reader.onload = function(e) {
        $('.image-upload-wrap').hide();

        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();

        $('.image-title').html(input.files[0].name);
      };

      reader.readAsDataURL(input.files[0]);

    } else {
      removeUpload();
    }
  }

  function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
  }
  $('.image-upload-wrap').bind('dragover', function() {
    $('.image-upload-wrap').addClass('image-dropping');
  });
</script>
@endsection

<style>
  .emri121 {
    color: white;
    font-size: 17px;
  }

  input {
    margin-top: -13%;
  }

  .form-control {
    transition: none;
    margin-top: -10px;
  }
</style>