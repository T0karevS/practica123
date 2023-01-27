@extends('layouts.app')

@section('content')
<link rel="stylesheet" href='{{ asset("css/mainpage.css") }}' >
    <title>Document</title>
</head>
<body>
    
   <form class="posts" method="POST" action="{{route('user.home.post')}}" enctype="multipart/form-data">
               @CSRF
               <div class="aboba1">
                    <input class="textpost" id="content" name="content" type="text" >
                    <button class="btnpost" type="submit">
               </div> 
               <div class="aboba2">
                <label for="img">выберите файл</label>
                <input id="img" name="img" type="file" class="imginput">
                <p class="selector"><select size="1" id="category" name="category">
                   <option disabled>Выберите категорию</option>
                   <option value="Спорт">Спорт</option>
                   <option value="Путешествия">Путешествия</option>
                   <option value="Музыка">Музыка</option>
                   <option value="Кино">Кино</option>
                   <option value="IT">IT</option>
                   <option value="Политика">Политика</option>
                   <option value="Киберспорт">Киберспорт</option>
                   <option value="Искусство">Искусство</option>
                  </select></p>
               </div>
                 
   </form>
   @php 
    foreach ($allposts->reverse() as $post) {
             echo '<div class="postcard">
                     <p class="posttext">'.$post->category.'</p>
                     <p class="posttext">'.$post->content.'</p>
                    <img class="postpic" src="	http://127.0.0.1:8000/posts/'.$post->img.'">
                </div>';
         }
        @endphp
    <div class="categories">
        <H2>Категории</H2>
        <div class="list">
            <div>
                <a href="../home/Спорт"><p>Спорт</p></a>
                <a href="../home/Кино"><p>Кино</p></a>
                <a href="../home/Музыка"><p>Музыка</p></a>
                <a href="../home/IT"><p>IT</p></a>
            </div>
            <div>
                <a href="../home/Путешествия"><p>Путешествия</p></a>
                <a href="../home/Политика"><p>Политика</p></a>
                <a href="../home/Киберспорт"><p>Киберспорт</p></a>
                <a href="../home/Искусство"><p>Искусство</p></a>
            </div>    
        </div>
    </div>
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
