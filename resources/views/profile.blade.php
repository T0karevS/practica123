<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/mainpage.css")}}">
    <link rel="stylesheet" href="{{ asset ("css/profile.css")}}">
    <title>profile</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="userinfo">
                     <img class="pfp" src="/avatars/{{ $user->first()->avatar; }}" alt="">
                     <div class="punkt">
                         <p>Имя:</p>
                         <P>{{  $user->first()->name; }}</P>
                     </div>
                     <DIV class="punkt">
                         <p>email:</p>
                         <p>{{$user->first()->email;}}</p>
                     </DIV>    
                     <!-- <DIV class="punkt">
                         <p>email:</p>
                         <p>{{$user->first()->avatar;}}</p>
                     </DIV>       -->

                  @if(Auth::id()==$user->first()->id)
                  <button id="btn" class="showupdate" onclick="showupdate">Изменить профиль</button>
                   <form method="POST" class="Updform" id="Upd" style="display: none;" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3 align-items-center">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      <div class="row mb-3 align-items-center">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      <div class="row mb-3" >
                          <label for="avatar" class="col-md-4 col-form-label text-md-end">{{ __('Avatar') }}</label>
                  <div class="col-md-6">
                      <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}" required autocomplete="avatar">
                      @error('avatar')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              
              <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Upload Profile') }}
                      </button>
                  </div>
              </div>
              </form>
              @endif
              <script>
                var btn = document.getElementById('btn');
                    btn.onclick = function() {
                        if(form = document.querySelector("#Upd").style.display == "none"){
                            
                            form = document.querySelector("#Upd").style.display = "block"
                        }
                     else{
                    form = document.querySelector("#Upd").style.display = "none"
                    }
                }
                  
              </script> 
              
      </div>
       @php 
                foreach ($allposts->reverse() as $post) {
                    echo '<div class="postcard">
                     <p class="posttext">'.$post->category.'</p>
                     <p class="posttext">'.$post->content.'</p>
                    <img class="postpic" src="	http://127.0.0.1:8000/posts/'.$post->img.'">
                </div>';
                }
            @endphp
</body>
</html>