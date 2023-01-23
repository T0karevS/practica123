<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset("css/mainpage.css")}}">
    <link rel="stylesheet" href="{{ asset ("css/profile.css")}}">
    <title>Your profile</title>
</head>
<body>
@extends('layouts.app')

@section('content')
    <div class="userinfo">
       <img class="pfp" src="img/chicha.png" alt="">
       <div class="punkt">
            <p>Имя:</p>
            <P>{{ Auth::user()->name }}</P>
        </div>
        <DIV class="punkt">
            <p>email:</p>
            <p>{{Auth::user()->email}}</p>
        </DIV>    
        <DIV class="punkt">
            <p>email:</p>
            <p>{{Auth::user()->email}}</p>
        </DIV>       
        <button>Редактировать</button>
    </div>
</body>
</html>