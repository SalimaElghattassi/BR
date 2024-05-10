<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>
    

<nav>
        <div class="h">

        <ul id="ul">
          <li><a href="{{ url('home') }}">home</a></li>
          <li><a href="https://mjcc.gov.ma/ar/">News</a></li>
          <li><a href="{{ url('index') }}">liste des inventaires</a></li>
          <li><a href="{{ url('create') }}">Ajouter Article</a></li>
          <li class="nav-item">
          <li style="float:right"> <img src="{{ asset('images/logoo.jpeg') }}" alt="Description" class="logo"></li>
            
          </li>
        </ul>

      
        </div>
        </nav>
  <section>
    
<article></article>
    <div class="content-container">
        <div class="content">
            <div>@yield('content')</div>
        </div>
    </div>
  
    </section>
    

</body>
</html>
