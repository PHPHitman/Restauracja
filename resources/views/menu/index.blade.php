@extends('layouts.app')

@section('content')
    <div class="container justify-content-center">


        @if( !$recommended->isEmpty() )
        <div class="row justify-content-center pt-4">
            <h2>Polecane</h2>
        </div>
        <div class="row justify-content-center ">

            @foreach($recommended as $product)
                <div class="col-md-3">
                    <div class="card">
                        <div>
                            <img src="/storage/{{$product->image}}">
                        </div>
                        <div class="text-center">
                            <h2>{{$product->name}}</h2>
                            <span class="price">{{$product->price}} zł</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @endif

            @if( !$food->isEmpty() )
            <div class="row justify-content-center pt-4">
                <h2>Dania</h2>
            </div>
            <div class="row justify-content-center">

                @foreach($food as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <div>
                                <img src="/storage/{{$product->image}}">
                            </div>
                            <div class="text-center">
                                <h2>{{$product->name}}</h2>
                                <span class="price">{{$product->price}} zł</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            @if( !$drinks->isEmpty() )
            <div class="row justify-content-center pt-4">
                <h2>Napoje</h2>
            </div>
            <div class="row justify-content-center">

                @foreach($drinks as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <div>
                                <img src="/storage/{{$product->image}}">
                            </div>
                            <div class="text-center">
                                <h2>{{$product->name}}</h2>
                                <span class="price">{{$product->price}} zł</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            @if( !$desserts->isEmpty() )
            <div class="row justify-content-center pt-4">
                <h2>Desery</h2>
            </div>
            <div class="row justify-content-center">

                @foreach($desserts as $product)
                    <div class="col-md-3">
                        <div class="card">
                            <div>
                                <img src="/storage/{{$product->image}}">
                            </div>
                            <div class="text-center">
                                <h2>{{$product->name}}</h2>
                                <span class="price">{{$product->price}} zł</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
            @if( !$alcohols->isEmpty())
            <div class="row justify-content-center p-4">
                <h2>Alkohole</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($alcohols as $product)
                    <div class="col-md-3">
                        <div class="card ">
                            <div>
                                <img src="/storage/{{$product->image}}" class="img-fluid" >
                            </div>
                            <div class="text-center mb-auto">
                                <h2>{{$product->name}}</h2>
                                <span class="price">{{$product->price}} zł</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
    </div>
@endsection
