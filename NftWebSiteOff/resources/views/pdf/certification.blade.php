<!DOCTYPE html>
<html lang="en">
<head>
<link href="{{ public_path("css/ticket.css") }}"rel="stylesheet" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificat d'authenticité </title>
</head>
<body>
    
    <div class="titlenft">Titre : {{$nft->title}}</div>
</br>
    <img src=
    "{{ public_path("uploads/nft/".$nft->nftcontent) }}" class="imgnft">
</br>
    <div class="nftautor"> Auteur : {{$nft->author}} </div>
    <div class="tokens"> Token : {{$nft->token}} </div>
    <div class="logos">NFTHOUSE .</div>

</div>
    
</body>
</html>