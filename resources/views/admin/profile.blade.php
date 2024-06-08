@extends('layout.master')
@section('mainadmin')
<div class="nftmax-userprofile__header">
    <img src="assets/img/cover1.jpg" alt="#">
    </div>
<div class="nftmax-userprofile__user p-5">
    <div class="nftmax-userprofile__content">
    <div class="nftmax-userprofile__thumb">
        <img src="{{ asset('storage/images/'.auth()->User()->photo) }}" alt="#">
    </div>
    <div class="nftmax-userprofile__info">
    <h4 class="nftmax-userprofile__info-title">{{auth()->User()->name}}</h4>
    <ul class="nftmax-userprofile__meta">
    
    <div class="nftmax-preview__modal modal fade" id="followers_modal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
    <div class="modal-dialog  nftmax-followers__modal">
    <div class="modal-content nftmax-preview__modal-content">
    <div class="modal-header nftmax__modal__header">
    </div>
    <div class="modal-body nftmax-modal__body">
    
    <ul class="followers-list">
    
    
    
    
    
    
    
        
    
    </ul>
    </div>
    </div>
    </div>
    </div>
    
    </ul>
    </div>
    </div>
    
    </div>
@endsection