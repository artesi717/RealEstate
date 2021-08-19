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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
  <div class="navbar123">
    <div class="navtext">
      <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent absolute-top">
        <div class="container">
          <a class="navbar-brand" href="http://127.0.0.1:8000">
            <img class="logo1" src="https://i.ibb.co/nfWM2ML/output-onlinepngtools-9.png" alt="" style="width:100%;">
          </a>
          <div>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto" style="margin: 31px; margin-left: 23px;">

                <li class="nav-item">
                  <a target="_blank" class="nav-link" href="/p/create">Sell</a>
                </li>

                <li class="nav-item">
                  <a target="_blank" class="nav-link" href="search">Buy</a>
                </li>

                <li class="nav-item">
                  <a target="_blank" class="nav-link" href="#">Post Gallery</a>
                </li>

                <li class="nav-item">
                  <a target="_blank" class="nav-link" href="/contactus">Contact Us</a>
                </li>

              </ul>

              @if(auth()->check())
              @if(auth()->user()->hasRole('admin'))

              <div class="user">
                <div class="container1">
                  <div class="dropdown">
                    <button id="butoni11" class="btn btn-primary butoni1" type="button" data-toggle="dropdown"><i style="color:orange;" class="fas fa-user-shield"></i>{{auth()->user()->name}}
                      <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                      <li><a class="a1" href="/profile/{{auth()->user()->id}}">Profile</a></li>
                      <li><a class="a1" href="/admindashboard">Dashboard</a></li>

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

              <video loop autoplay muted id="myVideo">
                <source src="../images/videoback2.mp4" type="video/mp4">
              </video>

              @else
              <ul class="nav navbar-nav navbar-right" style="margin:-68px -59px 39px -3px; left: 74px;">
                <a href="/register" class="mybtn2">Work with us<img class="shigjeta1" src="/images/Path.png" alt=""> </a>
              </ul>

              <video autoplay muted loop id="myVideo">
                <source src="../images/videoback1.mp4" type="video/mp4">
              </video>

              @endif
            </div>
            <!-- <div class="margina121">
        <div class="container margina11">                                       
          <div class="dropdown">
            <button id="butoni1171" class="btn btn-primary dropdown-toggle butoni1" type="button" data-toggle="dropdown"><i  class="far fa-user icona121"></i>Artes Berisha                        <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Profile</a></li>
              <li><a href="#">Log out</a></li>
            </ul>
          </div>
        </div>-->
          </div>
        </div>
    </div>
  </div>


  </nav>
  </div>

  <header>
    <div class="hero-text">
      <h1 class="head">Beautiful<br>homes made<br>for you</h1>
      <p>In oculis quidem se esse admonere interesse enim maxime placeat, facere possimus,
        omnis. Et quidem faciunt, ut labore et accurate disserendum ete harum quidem exercitus.</p>
      <a href="/search" class="hero-p">See all listings
        <img src="/images/arrow.png" style="padding-left:12px; cursor:pointer;" alt="">
      </a>
    </div>
    </div>
  </header>
</body>


</html>

<script>
  var video = document.getElementById("myVideo");
  var btn = document.getElementById("myBtn");

  function myFunction() {
    if (video.paused) {
      video.play();
      btn.innerHTML = "Pause";
    } else {
      video.pause();
      btn.innerHTML = "Play";
    }
  }
</script>