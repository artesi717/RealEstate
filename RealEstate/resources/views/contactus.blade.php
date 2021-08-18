<!DOCTYPE html>
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
</html>