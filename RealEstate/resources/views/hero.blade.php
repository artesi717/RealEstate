html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@800&display=swap" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="{{ URL::asset('css/hero.css') }}">
</head>
<body>
  <div class="navtext">
    <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent static-top">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logo1" src="https://www.hommeet.com/wp-content/uploads/2020/06/logo-05.png" alt="" style="width:35%;">
        </a>
        <div>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto" style="margin: 31px; margin-left: 23px;">
              <li class="nav-item">
                <a class="nav-link" href="#">Nav link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nav link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nav link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nav link</a>
              </li>
            </ul>
            @if(auth()->check())
            @if(auth()->user()->hasRole('admin'))
            <img class="admin" src="https://img.icons8.com/ios-glyphs/30/000000/admin-settings-male.png" alt=""> 
            <div class="user">

              Admin: {{auth()->user()->name}}
            {{auth()->user()->name}}
            </div>
            @elseif(auth()->user()->hasRole('user'))
            <img class="admin" src="https://img.icons8.com/ios/50/000000/user--v2.png"/>
            <div class="user">

              User : {{auth()->user()->name}}
               {{auth()->user()->name}}
            </div>
            @endif

            <ul class="nav navbar-nav navbar-right" style="margin:-68px -80px 39px -3px; left: 74px;">
              <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="mybtn">Log Out</button>
              </form>
            </ul>
            @else
            <ul class="nav navbar-nav navbar-right" style="margin:-68px -59px 39px -3px; left: 74px;">
              <a href="/register" class="mybtn">Work with us<img src="/images/Path.png" alt=""> </a>
            </ul>
            @endif
          </div>
        </div>
      </div>
    </nav>
  </div>
  <header>