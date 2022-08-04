

@extends('layouts.layout')

@section('title','index')
@section('content')
    <div class="leftarea">

    <div class="cont">
  <form action="{{ route('register-user')}}" class="signUp"  method='post'>
      
      @csrf
    <h3>Créer ton compte</h3>
    <p>Entre ton email</br>
et un mot de passe et le tour est jouer !</p>
<input class="w100" type="name" placeholder="Entre ton nom" name="name" value="" reqired autocomplete='off' />
<span class ="text-danger">@error('name') {{$message}} @enderror</span>
    <input class="w100" type="email" placeholder="Entre ton email" name="mail" value="" reqired autocomplete='off' />
    <span class ="text-danger">@error('mail') {{$message}} @enderror</span>
    <input type="password" class="w100" placeholder="Entre un mot de passe" name="password" value ="" reqired />
    <span class ="text-danger">@error('password') {{$message}} @enderror</span>

    <button class="form-btn sx log-in" type="button" >Connexion</button>
    <button class="form-btn dx" type="submit">Inscription</button>
  </form>
  <form action="{{ route('login-user')}}" method='post' class="signIn">

      @csrf
    <h3>Welcome</br>Back !</h3>
   
    <input type="email" placeholder="Entre ton email" name="email" value="" autocomplete='off' reqired />
    <span class ="text-danger">@error('mail') {{$message}} @enderror</span>
    <input type="password" placeholder="Entre ton mot de passe" name="passwords" value ="" reqired />
    <span class ="text-danger">@error('password') {{$message}} @enderror</span>
    <button class="form-btn sx back" type="button">Retour</button>
    <button class="form-btn dx" type="submit">Connexion</button>
  </form>
</div>

    
   

</div>
<script src="{{ asset('js/action.js') }}"></script>

@endsection 
