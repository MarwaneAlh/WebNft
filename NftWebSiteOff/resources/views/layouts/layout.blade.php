<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ asset('css/homestyle.css') }}"rel="stylesheet" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTHOUSE.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>    </head>
<body>
<header> 
<div class="backgroundfont">
<nav class="my-navbar navbar navbar-expand-lg ">
  <div class="container">
    <a class="navbar-brand" href="Home">NFTHOUSE.</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home">HOME</a>
        </li>
      
        
        <li class="nav-item">
          <a class="nav-link active"  href="Sign">CONNEXION/INSCRIPTION</a>
        </li>
        
        

        <li class="nav-item">
          <a class="nav-link" href="MarketPlace">MARKETPLACE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="About">ABOUT</a>
        </li>

        
       <li class="nav-item">
          <a class="nav-link active"  href="logout">DECONNEXION</a>
        </button>
        
       
       

      </ul>
    
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    @if(Session::has('success'))
      <div class="alert-success">{{Session::get('success')}}</div>
      @endif
      @if(Session::has('fail'))
      <div class="alert-danger">{{Session::get('fail')}}</div>
      @endif
      @csrf
@yield('content')

</body>
</div>
</html>