<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('layout.master')
    @section('mainadmin')
    <h1>Dashboard</h1>
    <div class="nftmax-funfact mg-top-40">

        <div class="nftmax-funfact__single">
        <div class="nftmax-funfact__icon">
        <img class="nftmax-funfact__img" src="assets/img/funfact-icon.png" alt="#">
        </div>
        <div class="nftmax-funfact__content">
        <h3 class="nftmax-funfact__title"><b class="number">43</b><span>K</span></h3>
        <p class="nftmax-funfact__text">Artworks</p>
        </div>
        </div>
        
        
        <div class="nftmax-funfact__single">
        <div class="nftmax-funfact__icon">
        <img class="nftmax-funfact__img nftmax-funfact__img--v2" src="assets/img/funfact-icon-2.png" alt="#">
        </div>
        <div class="nftmax-funfact__content">
        <h3 class="nftmax-funfact__title"><b class="number">40</b><span>K</span></h3>
        <p class="nftmax-funfact__text">Artworks</p>
        </div>
        </div>
        
        
        <div class="nftmax-funfact__single">
        <div class="nftmax-funfact__icon">
        <img class="nftmax-funfact__img  nftmax-funfact__img--v3" src="assets/img/funfact-icon-3.png" alt="#">
        </div>
        <div class="nftmax-funfact__content">
        <h3 class="nftmax-funfact__title"><b class="number">30</b><span>K</span></h3>
        <p class="nftmax-funfact__text">Artworks</p>
        </div>
        </div>
        
        
        <div class="nftmax-funfact__single nftmax-funfact__single--v4">
        <div class="nftmax-funfact__icon">
        <img class="nftmax-funfact__img nftmax-funfact__img--v4" src="assets/img/funfact-icon-4.png" alt="#">
        </div>
        <div class="nftmax-funfact__content">
        <h3 class="nftmax-funfact__title"><b class="number">3</b><span>K</span></h3>
        <p class="nftmax-funfact__text">Artworks</p>
        </div>
        </div>
        
        </div>  
    @endsection
</body>
</html>