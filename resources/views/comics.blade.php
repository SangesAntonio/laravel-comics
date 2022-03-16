
@php $comics = config('comics');
@endphp
@extends('main')
@section('title', 'comic')

@section('content')
<main id="cards-container">
    <div class=" cartoon-section">
        <div class="banner-small">
            <h3>CURRENT SERIES</h3>
        </div>
    </div>
    <div class="container cards">
       
        @foreach($comics as $index => $comic)
            <div class="card">
                <a href="{{route('comic', ['id'=> $index])}}">
                    <figure>
                        <img src="{{$comic['thumb']}}" alt="" />
                    </figure>
                    <p>{{$comic['title']}}</p>
                </a>
            </div>
        @endforeach
    </div>
    <div class="container button-blue">
        <p>LOAD MORE</p>
    </div>

</main>
@endsection

