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
            <label class="nftmax-wc__form-label">Name</label>
            <div class="form-group__input">
            <span class="nftmax-wc__icon"><svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.8692 11.6667H4.13085C3.03569 11.668 1.98576 12.1036 1.21136 12.878C0.436961 13.6524 0.00132319 14.7023 0 15.7975V20H15.0001V15.7975C14.9987 14.7023 14.5631 13.6524 13.7887 12.878C13.0143 12.1036 11.9644 11.668 10.8692 11.6667Z" fill="#374557" fill-opacity="0.6"></path><path d="M7.49953 10C10.261 10 12.4995 7.76145 12.4995 5.00002C12.4995 2.23858 10.261 0 7.49953 0C4.7381 0 2.49951 2.23858 2.49951 5.00002C2.49951 7.76145 4.7381 10 7.49953 10Z" fill="#374557" fill-opacity="0.6"></path></svg></span>
            <input class="nftmax-wc__form-input @error('Name') is-invalid @enderror" type="text" name="Name" placeholder="Adomx" required="required">
            @error('Name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            </div>
            </div>
            
            <div class="col-12">
            <div class="form-group">
            <label class="nftmax-wc__form-label">Email Address</label>
            <div class="form-group__input">
            <span class="nftmax-wc__icon"><svg class="inline" xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none"><path d="M21.7764 4.12903L14.1237 11.7818C13.2704 12.6329 12.1143 13.1109 10.9091 13.1109C9.7039 13.1109 8.54787 12.6329 7.69457 11.7818L0.0418183 4.12903C0.029091 4.27267 0 4.40267 0 4.54539V15.4545C0.00144351 16.6596 0.480803 17.8149 1.33293 18.6671C2.18506 19.5192 3.34038 19.9985 4.54547 20H17.2728C18.4779 19.9985 19.6332 19.5192 20.4853 18.6671C21.3374 17.8149 21.8168 16.6596 21.8182 15.4545V4.54539C21.8182 4.40267 21.7892 4.27267 21.7764 4.12903Z" fill="#374557" fill-opacity="0.6"></path><path d="M12.8389 10.4964L21.1425 2.19182C20.7403 1.52484 20.1729 0.972764 19.4952 0.588847C18.8175 0.204931 18.0523 0.00212789 17.2734 0H4.5461C3.76721 0.00212789 3.00201 0.204931 2.3243 0.588847C1.6466 0.972764 1.07926 1.52484 0.677002 2.19182L8.98066 10.4964C9.493 11.0067 10.1867 11.2932 10.9098 11.2932C11.6329 11.2932 12.3265 11.0067 12.8389 10.4964Z" fill="#374557" fill-opacity="0.6"></path></svg></span>
            <input class="nftmax-wc__form-input @error('Email') is-invalid @enderror" type="Email" name="Email" placeholder="demo232@gmail.com" required="required">
            @error('Email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                <label class="nftmax-wc__form-label">Telephone</label>
                <div class="form-group__input">
                <span class="nftmax-wc__icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                  </svg></span>
                <input class="nftmax-wc__form-input @error('Telephone') is-invalid @enderror" type="text" name="Telephone" placeholder="0678126374" required="required">
                @error('Telephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                </div>
            <div class="col-12">
                <div class="form-group">
                <label class="nftmax-wc__form-label">Role</label>
                <div class="form-group__input">
                    <select class="form-select @error('Role') is-invalid @enderror" name="Role" aria-label="Default select example">
                        <option selected>Role</option>
                        <option value="admin">Admin</option>
                        <option value="agent">Agent</option>
                    </select>
                    @error('Role')
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
            <button class="ntfmax-wc__btn" type="submit">Sign in</button>
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