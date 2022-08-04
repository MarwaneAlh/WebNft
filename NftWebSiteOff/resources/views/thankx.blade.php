

@extends('layouts.layout')

@section('title','about')
@section('content')


<div class ="containers">
  

<div class="card-body">
<form action="" method="post" enctype="multipart/form-data">
@csrf
    
<h1>Merci pour votre confiance</h1>
</br>
Vous trouverer ici en téléchargement le certificat de propriété du NFT
</br>
</br>
</br>
<div class ="form-groupe mb-3">
    <div class="button-85">
<a href="{{ url('download/'.$nft->id)}}"  class="download" >Télecharger</a>
</div>
</br>
<div class="button-85">
<a href="/MarketPlace"  class="quitter" >Quitter</a>
</div>
</div>

</form>



</div>

<script src="{{ asset('js/action.js') }}"></script>
<!---<script src="{{ asset('js/action.js') }}"></script><---->
@endsection 
