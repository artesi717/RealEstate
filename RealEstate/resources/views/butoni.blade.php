<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
</head>
<body>

<div class="container1">                                       
  <div class="dropdown">
    <button id="butoni11" class="btn btn-primary butoni1" type="button" data-toggle="dropdown"><i class="far fa-user"></i>  Artes Berisha
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Profile</a></li>
      <li><a href="#">Log out</a></li>
    </ul>
  </div>
</div>

<style>
  body {
    margin-top: 10%;
    font-family: 'DM Sans', sans-serif;

  }
  #butoni11 {
    color:white ;
    font-weight: 800;
    background-color: rgba(0,0,0,.7);
    border-radius: 23px;
    padding:2px;
    margin-inline-start: 16px;
    height: 32px;
    width:210px;
    border:0;
    white-space: nowrap;
    font-size:17px;

  }


  .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}


  #butoni11:hover{
    background-color: #282828;
  }
  #butoni11:focus {
    text-decoration: none;
    background-color: #282828;
    border:0;
  }

  #butoni11:active {
    background-color: #282828;
  }

  #butoni11:visited {

        background-color: #282828;

  }

  .btn-primary.active, .btn-primary:active, .open>.dropdown-toggle.btn-primary {
    color: #fff;
    background-color: #282828;
    background-image: none;
    border-color: #282828;
}


 
  .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover, .btn-primary:active.focus, .btn-primary:active:focus, .btn-primary:active:hover, .open>.dropdown-toggle.btn-primary.focus, .open>.dropdown-toggle.btn-primary:focus, .open>.dropdown-toggle.btn-primary:hover {
      color: #fff;
      background-color: #282828;
      border-color: #282828;
  }


    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 500px;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 160px;
        padding: 8px 0;
        margin: 2px 0 0;
        font-size: 16px;
        font-weight: 600;
        text-align: left;
        list-style: none;
        color:white;
        background-color: #282828 ;
        background-clip: padding-box;
        border: 1px solid #ccc;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 4px;
        -webkit-box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
        box-shadow: 0 6px 12px rgb(0 0 0 / 18%);
    }


      .dropdown-menu>li>a {
          display: block;
          padding: 3px 20px;
          font-weight: 600;
          color: white ;
      }

      .dropdown-menu>li>a:hover {

          background-color:#797D7F ; 
      }

        i {
          padding-right: 5px;
        }
</style>


</body>
</html>