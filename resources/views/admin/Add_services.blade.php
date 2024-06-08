<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .file-input-container {
  position: relative;
  display: inline-block;
}

.file-input {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.file-input-label {
  display: inline-block;
  padding: 10px 20px;
  background-color: #007bff;
  color: white;
  cursor: pointer;
  border-radius: 4px;
  font-size: 16px;
  text-align: center;
}

.file-input-label:hover {
  background-color: #0056b3;
}
    </style>
</head>
<body>
    @extends('layout.master')
    @section('mainadmin')
    <div class="nftmax-wc__form">
        <div class="nftmax-wc__form-inner nftmax-wc__form-new">
        <div class="nftmax-wc__heading">
        </div>
        <div class="nftmax-wc__form-main">

            <form  action="Add_agent" method="post" enctype="multipart/form-data">
                @csrf   
                @if(session('success'))
                        <div class="m-3  alert alert-success alert-dismissible fade show" id="alert-success" role="alert">
                            <span class="alert-text text-white">
                            {{ session('success') }}</span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                <i class="fa fa-close" aria-hidden="true"></i>
                            </button>
                        </div>
                    @endif
            <div class="col-12">
            <div class="form-group">
            <label class="nftmax-wc__form-label">Service</label>
            <div class="form-group__input">
            <span class="nftmax-wc__icon"><svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.8692 11.6667H4.13085C3.03569 11.668 1.98576 12.1036 1.21136 12.878C0.436961 13.6524 0.00132319 14.7023 0 15.7975V20H15.0001V15.7975C14.9987 14.7023 14.5631 13.6524 13.7887 12.878C13.0143 12.1036 11.9644 11.668 10.8692 11.6667Z" fill="#374557" fill-opacity="0.6"></path><path d="M7.49953 10C10.261 10 12.4995 7.76145 12.4995 5.00002C12.4995 2.23858 10.261 0 7.49953 0C4.7381 0 2.49951 2.23858 2.49951 5.00002C2.49951 7.76145 4.7381 10 7.49953 10Z" fill="#374557" fill-opacity="0.6"></path></svg></span>
            <input class="nftmax-wc__form-input @error('service') is-invalid @enderror" type="text" name="service"  required="required">
            @error('service')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            </div>
            </div>
            
            <div class="col-12">
            <div class="form-group">
            <label class="nftmax-wc__form-label">description</label>
            <div class="form-group__input">
            <span class="nftmax-wc__icon"></span>
            <textarea name="description" class="nftmax-wc__form-input @error('description') is-invalid @enderror" id="" cols="20" rows="5"></textarea>
            @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                <label class="nftmax-wc__form-label">Prix</label>
                <div class="form-group__input">
                <span class="nftmax-wc__icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                  </svg></span>
                <input class="nftmax-wc__form-input @error('prix') is-invalid @enderror" type="text" name="prix"  required="required">
                @error('prix')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                </div>
            
            <div class="col-12">
                <div class="file-input-container">
                    <label class="nftmax-wc__form-label">Image</label>
                    <br>
                    <input type="file" id="fileInput" class="file-input @error('photo') is-invalid @enderror" name="photo">
                    <label for="fileInput" class="file-input-label">Upload File</label>
                    @error('photo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                
            </div>
            <div class="col-12">
            <div class="form-group nftmax-wc__new-bottom">
            <div class="nftmax-wc__button">
            <button class="ntfmax-wc__btn" type="submit">Ajouter</button>
            </div>
            </div>
            </div>
    
            </form>
        </div>
        </div>
        
        </div>
        </div>
    @endsection
</body>
</html>