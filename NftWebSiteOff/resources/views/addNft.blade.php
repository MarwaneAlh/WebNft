

@extends('layouts.layout')

@section('title','about')
@section('content')


<div class ="containers">
  

<div class="card-body">
<form action="/AddNft-save" method="post" enctype="multipart/form-data">
@csrf
    
<div class ="form-groupe mb-3">
    <label for="">Nft Name</label>
    <input type="text" name="user_title" class="form-control">
</div>

<div class ="form-groupe mb-3">
    <label for="">Autheur</label>
    <input type="text" name="user_name" class="form-control">
</div>

<div class ="form-groupe mb-3">
    <label for="">Prix</label>
    <input type="text" name="user_price" class="form-control">
</div>

<div class ="form-groupe mb-3">
    <label for="">Nft picture</label>
    <input type="file" name="user_image" class="form-control">
</div>

<div class ="form-groupe mb-3">
<button type="submit" class="button-85" >Save Nft</button>
<a href="/MarketPlace" class="button-85" >Quitter</a>
</div>

</form>



</div>


<!---<script src="{{ asset('js/action.js') }}"></script><---->
@endsection 
