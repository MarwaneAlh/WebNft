

@extends('layouts.layout')

@section('title','about')
@section('content')
<div class ="containers">
<div class ="containerss">
    <div class="row">
        <div class="col-md-12">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">
                    <h4>MarketPlace</h4>
                    <h5 class="userright">User : {{$user->name}}</h5>
                    <a href="/AddNft" class ="button-85 float-end">Add Nft</a>
                    

</div>

@foreach ($nft as $item)

<div class="card text-white bg-dark mb-3">

 
    <label> Titre : {{$item->title}} </label>
    <img src="{{ asset('uploads/nft/'.$item->nftcontent) }}" class="image"</img>
    <label> Auteur : {{$item->author}} </label>
    <label> Prix : {{$item->price}} </label>
    
   
    <a href="{{ url('buy-nft/'.$item->id)}}" class="button-85">Collect</a>
    <form action=""class="test">
     @csrf
    @if ($user->name==="admin"):
    <a href="{{ url('edit-nft/'.$item->id)}}" class="button-85">Edit</a>
    @endif
</br>
</form>
@endforeach
</div>

</div>
</div>
</div>
</div>
</div>


<!---<script src="{{ asset('js/action.js') }}"></script><---->
@endsection 
