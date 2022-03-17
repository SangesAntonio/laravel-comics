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
    <div class="container-single-card bg-white">
        <div class="title">
            <h1>{{$comic['title']}}</h1>
            <div class="price-info">
                <p>U.S. Price: <span> {{$comic['price']}}</span> </p>
                <div class="availability">
                    <p class='border-rigth'>AVAILABLE</p>
                    <p>Check availibility</p>
                </div>
            </div>
            <p class="description-card">{{$comic['description']}}</p>
        </div>
        <div class="adv">
            <p>ADVERTISEMENT</p>
            <img src="{{asset('img/adv.jpg')}}" alt="">
        </div>
    </div>
    <hr>
    <div class="container-info-card">
        <div class="talent-info">
            <h3>Talent</h3>
            
            <hr>
            <div class="table">
                <div class="table-left">
                    <h5>Art by:</h5>

                </div>
                <div class="table-rigth">
                        @foreach($comic['artists'] as $artist)
                        <span>{{$artist}} <span class=''>{{!$loop->last ? ',':''}}</span></span>
                        @endforeach 
                </div>
            </div>
            <hr>
            <div class="table">
                <div class="table-left">
                    <h5>Written by:</h5>
                </div>
                <div class="table-rigth">
                    @foreach($comic['writers'] as $writer)
                    <span>{{$writer}} <span>{{!$loop->last ? ',':''}}</span></span>
                    @endforeach 
                    
                </div>
            </div>
            <hr>

        </div>
        <div class="specs-info">
            <h3>Specs</h3>
            <hr>
            <div class="table">
                <div class="table-left">
                    <h5>Series:</h5>

                </div>
                <div class="table-rigth">
                    <h5>{{$comic['series']}}</h5>
                </div>
            </div>
            <hr>
            <div class="table">
                <div class="table-left">
                    <h5>U:S: Price:</h5>
                    
                </div>
                <div class="table-rigth text-black">
                    <h5>{{$comic['price']}}</h5>
                </div>
            </div>
            <hr>
            <div class="table">
                <div class="table-left">
                    <h5>On sale date:</h5>
                    
                </div>
                <div class="table-rigth text-black ">
                    <h5>{{$comic['sale_date']}}</h5>
                </div>
            </div>
            <hr>
        </div>
    </div>
    
</main>

@endsection