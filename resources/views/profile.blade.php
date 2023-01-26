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
    <div>

    </div>
    <form method="POST" class="userinfo" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                        @csrf

                                        <img class="pfp" src="/avatars/{{ $user->first()->avatar; }}" alt="">
                                        <div class="punkt">
                                            <p>Имя:</p>
                                            <P>{{  $user->first()->name; }}</P>
                                        </div>
                                        <DIV class="punkt">
                                            <p>email:</p>
                                            <p>{{$user->first()->email;}}</p>
                                        </DIV>    
                                        <DIV class="punkt">
                                            <p>email:</p>
                                            <p>{{$user->first()->avatar;}}</p>
                                        </DIV>      
                                    </div>
                            @if(Auth::id()==$user->first()->id)
                            <div class="row mb-3">
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
                        
                        @endif
                    </form>
</body>
</html>