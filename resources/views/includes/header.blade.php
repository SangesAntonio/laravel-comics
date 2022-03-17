@php  $navbar = config('navbar');
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="bg-blue">
        <div class="container little-banner">

            <p>DC POWER VISA</p>
            <p>ADDIOTIONALS DC SITES</p>
        </div>
    </div>
    <header class="">
        <nav class="navbar container">
          <div class="left-nav">
            <a href="{{route('/')}}">
              <img src="{{asset('img/dc-logo.png')}}" alt="">
            </a>
          </div>
          <div class="right-nav">
            <ul>
                @foreach($navbar as $n)
                <li><a href="{{$n['url']}}">{{$n['text']}}</a></li>
                @endforeach
            </ul>
          </div>
        </nav>
    </header>
</body>
</html>