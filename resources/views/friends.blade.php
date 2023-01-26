<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='{{ asset("css/mainpage.css") }}' >
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')

    <form class="users" method="GET" action="{{ route('user.friends.getUsers') }}" enctype="multipart/form-data">
    @php 
     foreach ($allusers as $user) {
             echo '<div class="usercard">
                    <img class="profilepic" src="avatars/'.$user->avatar.'">
                    <a href="../user/'.$user->id.'"><p class="username">'.$user->name.'</p></a> 
                </div>';
         }
        @endphp
    </form>    
</body>
</html>