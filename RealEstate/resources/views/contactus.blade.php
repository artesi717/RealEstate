<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<nav class="navbar navbar-transparent navbar-expand-md px-2 bg-transparent">
  <a href="{{ url('/') }}"> <img style="width: 40%; opacity:5;" class="foto37" src="https://i.ibb.co/QHzJFmg/logobardh.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
    <div class="navbar-nav navbar-center justify-content-between ">
      <a style="background-color:transparent; opacity:1;" target="_blank" class="nav-link uuUu" href="search">FIND A HOME</a>
      <a style="background-color:transparent; opacity:1;" target="_blank" class="nav-link uuUu" href="/p/create">SELL A HOME</a>
      <a style="background-color:transparent; opacity:1;" target="_blank" class="nav-link uuUu" href="#">POST GALLERY</a>
      <a style="background-color:transparent; opacity:1; padding-right:70px;" target="_blank" class="nav-link uuUu" href="/contactus">CONTACT US</a>

      <div class="dropdown">

        @if(auth()->check())
        @if(auth()->user()->hasRole('admin'))

        <button class="btn btn-secondary dropdown-toggle butoni11" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i style="color:orange" class="far fa-user-shield"></i> {{ Auth::user()->name }}
        </button>

        @elseif(auth()->user()->hasRole('user'))

        <button class="btn btn-secondary dropdown-toggle butoni11" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="far fa-user"></i> {{ Auth::user()->name }}
        </button>

        @endif @endif
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>

    </div>
  </div>
</nav>

<h1 class="contactus">Contact us</h1>
<h2 class="conversationstart">We'd love to hear from you</h2>

<div class="contenti11">
  <div class="row1111">

    <div class="pjesaime1">

      <h2 class="emri1">Ask how we can help you:</h2> <br>

      <p class="texti1">Have questions about our products, features, trials, or pricing? <br> Need a demo? Our teams will help you.</p> <br><br>

      <h2 class="emri1">About us</h2> <br>
      <p style="width:80%;" class="texti1">Our studio’s mission is to create exceptional designs and work with clients to create a custom design that works best for their business. Our goal is to work with you to get the best design for your budget and time. We love to make something unique and we’ll take the time to understand your needs. We’ll provide you with a beautiful space that looks like your dream and will make your life easier. Our team consists of highly experienced designers who have been in the business for over 20 years.</p> <br><br>

    </div>

    
          <form action="{{route('contact.send')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="field"> <br>
              <div class="control">
                <input class="inputi1{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" placeholder="Enter your name">
                @if ($errors->has('name'))
                <span class="invalid-feedback " role="alert">
                  <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="field"> <br>
              <div class="control">
                <input class="inputi1{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" placeholder="Enter your email">
                @if ($errors->has('email'))
                <span class="" role="alert">
                  <strong class="has-text-danger">{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="field"> <br>
              <div class="control">
                <input class="inputi1{{ $errors->has('phonenumber') ? ' is-danger' : '' }}" type="phonenumber" name="phonenumber" placeholder="Enter your phone number">
                @if ($errors->has('phonenumber'))
                <span class="" role="alert">
                  <strong class="has-text-danger">{{ $errors->first('phonenumber') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="field">
              <br>
              <div class="control">
                <textarea class="inputi1{{ $errors->has('message') ? ' is-danger' : '' }}" rows="12" name="message" placeholder="Enter your message"></textarea>
                @if ($errors->has('message'))
                <span class="" role="alert">
                  <strong class="has-text-danger">{{ $errors->first('message') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="pjesaime2">
              <h3 class="emri2">Please note: all fields are required</h3> <br>
              <!-- <button type="submit" class="myButton1"> Submit</button> -->
              <button type="submit" class="myButton1" data-toggle="modal" data-target="#exampleModal">
                Submit
              </button>
          </form>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Your message has been sent successfully</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            We have received your request and will be in touch shortly. <br>
            <b>Thank you!</b>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <style>
      .uuUu {
        color: white;
        font-weight: 800;
      }

      .butoni11 {
        color: black;
        opacity: 1;
        width: auto;
        padding: 2px 10px;
        border-radius: 10px;
        font-weight: 800;
        font-size: 17px;
      }

      .btn-secondary {
        background-color: black;
        opacity: 0.8;
        border: 0;
        color: WHITE;
      }

      body {
        background: rgb(4, 2, 2);
        background: linear-gradient(90deg, rgba(4, 2, 2, 1) 0%, rgba(108, 59, 25, 1) 58%, rgba(166, 98, 19, 1) 100%);
        font-family: 'DM Sans', sans-serif;
        background-repeat: no-repeat;
        background-size: 1920px 500px;
      }

      img {
        filter: brightness(52%);

      }

      .navbar-center {
        left: 50%;
        position: absolute;
        top: 60%;
        padding-left: 30px;
        padding-right: 30px;
        transform: translatex(-20%);
        white-space: nowrap;
      }

      .navbar-expand-md .navbar-nav .nav-link {
        padding-left: 70;
      }

      * {
        box-sizing: border-box;
      }

      .texti1 {
        padding-left: 80px
      }

      textarea {
        height: auto;
      }

      .myButton1 {
        background-color: transparent;
        border-radius: 31px;
        margin-top: 40px;
        border: 2px solid #ffac12;
        display: inline-block;
        cursor: pointer;
        color: #ffac12;
        font-family: 'DM Sans', sans-serif;
        font-size: 17px;
        padding: 5px 33px;
        text-decoration: none;
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


      .inputi1 {
        height: 3.5em;
        width: 500px;
        text-indent: 10px;
        border-radius: 3px;
        margin-bottom: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid #ddd;
        vertical-align: middle;
      }

      .conversationstart {
        font-weight: 800;
        color: black;
        text-align: center;
        margin-top: 15%;
      }

      .contactus {
        font-weight: 800;
        color: white;
        text-align: center;
        margin-top: 8%
      }

      .pjesaime1 {
        float: left;
        width: 50%;
        padding: 10px;
        height: 800px;
        background-color: white;
      }


      .pjesaime2 {
        float: left;
        width: 50%;
        padding: 10px;
        height: 800px;
        background-color: white;
      }

      .emri1 {
        font-weight: 600;
        font-family: 'DM Sans', sans-serif;
        color: black;
        padding-left: 80px;
      }

      .emri2 {
        font-weight: 800;
        font-family: 'DM Sans', sans-serif;
        color: gray;
        font-size: 14px;

      }


      .row1111:after {
        content: "";
        display: table;
        clear: both;
      }

      .contenti11 {
        margin-top: 5%;
        margin-left: 7%
      }
    </style>


    <script>
      document.addEventListener('DOMContentLoaded', () => {
        (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
          $notification = $delete.parentNode;
          $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
          });
        });
      });
    </script>


    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RealProperty</title>

    {{-- CSS Files --}}
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300i,400,400i,500,500i,600|Kanit:300,300i,400,400i,500,500i,600" rel="stylesheet">
</head>
<body>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <div class="column is-full is-mobile backgroundimg">
        <div class="container">
            <div class="column is-mobile is-centered">
            </div>
        </div>
        <div class="container">
            <div class="has-text-centered centertext">
                <span class="icon has-text-white is-large">
                    <i class="far fa-comments fa-5x"></i>
                </span>
                <h1 class="has-text-white centertextword">Contact Us</h1>
            </div>
        </div>
    </div>
    

    {{-- Photo Frame Section --}}
    <div class="columns">
        <div class="column coloredback">
                <br>
                <br>
                  <div class="title has-text-white has-text-centered">
                    Drop Us A Message!
                  </div>
            <div class="insidemoved">
              @if(Session::has('message_sent'))
                  <div class="alert alert-success" role="alert">
                     {{Session::get('message_sent')}}
                  </div>
              @endif
                <form  action="{{route('contact.send')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="field">
                      <label class="label has-text-white">Name</label>
                      <div class="control">
                        <input class="input is-info{{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" placeholder="Enter your name">
                        @if ($errors->has('name'))
                          <span class="invalid-feedback " role="alert">
                            <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    <div class="field">
                      <label class="label has-text-white">Email Address</label>
                      <div class="control">
                        <input class="input is-info{{ $errors->has('email') ? ' is-danger' : '' }}" type="email" name="email" placeholder="Enter your email">
                        @if ($errors->has('email'))
                        <span class="" role="alert">
                            <strong class="has-text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                      </div>
                    </div>
                    <div class="field">
                      <label for="phonenumber" class="label has-text-white">Phone Number</label>
                      <div class="control">
                      <input class="input is-info{{ $errors->has('phonenumber') ? ' is-danger' : '' }}" type="phonenumber" name="phonenumber" placeholder="Enter your phone number">
                      @if ($errors->has('phonenumber')) 
                      <span class="" role="alert">
                            <strong class="has-text-danger">{{ $errors->first('phonenumber') }}</strong>
                        </span>
                        @endif
                    </div>
                    </div>
                   
                    <div class="field">
                      <label class="label has-text-white">Message</label>
                      <div class="control">
                        <textarea class="textarea is-info{{ $errors->has('message') ? ' is-danger' : '' }}" rows="12" name="message" placeholder="Enter your message"></textarea>
                        @if ($errors->has('message'))
                          <span class="" role="alert">
                            <strong class="has-text-danger">{{ $errors->first('message') }}</strong>
                          </span>
                        @endif
                      </div>
                    </div>
                    
                      <button type="submit" class="btn btn-primary float-right"> Submit
                         
                      </button>
                    
                </form>
            </div>
          </div>
        <div class="column image is-2by1 contactusimg">
          
        </div>
      </div>

 


      {{-- JavaScript Files --}}
      <script src="/js/jquery-3.3.1.min.js"></script>
      <script src="/js/fontawesome.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', () => {
          (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
            $notification = $delete.parentNode;
            $delete.addEventListener('click', () => {
            $notification.parentNode.removeChild($notification);
            });
          });
        });
      </script>
</body>