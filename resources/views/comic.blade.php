@php $comics = config('comics');
@endphp
@extends('main')
@section('content')

<main id="card-container">
    <div class=" jumbo-section">
        <div class="banner-image">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
    <div class="container cards">
       
    </div>
</main>

@endsection