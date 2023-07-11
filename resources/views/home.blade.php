@extends('layout.main-layout')

@section('pageName')

    home

@endsection

@section('content')

    <div id="home">
       

        

        <div >
            
            @foreach ($fumetti as $fumetto)
                <div >
                    <h1>{{ $fumetto['title'] }}</h1>
                    <div class="flex">
                        <img src="{{ $fumetto['thumb'] }}" alt="main pasta img" width="300px">
                        <p>
                            {!! $fumetto['description'] !!}
                        </p>
                    </div>
                    <div>
                        <span >Prezzo: {{ $fumetto['price'] }}</span>
                        <span >Serie: {{ $fumetto['series'] }}</span>
                        <span>Data di vendita: {{ $fumetto['sale_date'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endsection

    <style>
        .flex {
            display: flex;
            justify-content: space-between;
            
        }

        p {
            display: inline-block;
            width: 1000px
        }
    </style>