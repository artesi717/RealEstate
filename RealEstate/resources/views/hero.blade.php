<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Real Estate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
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
                <a class="nav-link" href="/p/create">Nav link</a>
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
              <a href="/profile/{{ $post->user->id }}">
                {{auth()->user()->name}}</a>
            </div>
            @elseif(auth()->user()->hasRole('user'))
            <div class="user">
              <div class="container1">
                <div class="dropdown">
                  <button id="butoni11" class="btn btn-primary butoni1" type="button" data-toggle="dropdown"><i class="far fa-user"></i>{{auth()->user()->name}}
                    <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a class="a1" href="/profile/{{auth()->user()->id}}">Profile</a></li>
                    <li><a class="a1">
                        <form action="/logout" method="POST">
                          @csrf
                          <button class="a12" type="submit">Log Out</button>
                        </form>
                      </a></li>
                  </ul>
                </div>
              </div>
            </div>
            @endif



            @else
            <ul class="nav navbar-nav navbar-right" style="margin:-68px -59px 39px -3px; left: 74px;">
              <a href="/register" class="mybtn2">Work with us<img src="/images/Path.png" alt=""> </a>
            </ul>

            @endif

          </div>
        </div>
      </div>
    </nav>
  </div>
  <header>
    <div class="hero-text">
      <h1 class="head">Beautiful<br>homes made<br>for you</h1>
      <p>In oculis quidem se esse admonere interesse enim maxime placeat, facere possimus,
        omnis. Et quidem faciunt, ut labore et accurate disserendum et harum quidem exercitus.</p>
      <span class="hero-p">See all listings
        <img src="/images/arrow.png" style="padding-left:12px; cursor:pointer;" alt="">
      </span>
    </div>
    </div>
  </header>
</body>

</html>