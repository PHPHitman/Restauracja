@extends('layouts.app')

@section('content')
    <div class="container">


        @section('content')


            <div class="container justify-content-center">
                @if (session('added'))
                    <div class="alert alert-success" role="alert">
                        {{ session('added') }}
                    </div>
                @elseif(session('deleted'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('deleted') }}
                    </div>
                @elseif(session('recommend'))
                    <div class="alert alert-success" role="alert">
                        {{ session('recommend') }}
                    </div>
                @elseif(session('deleteRecommended'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('deleteRecommended') }}
                    </div>
                @endif

                <div class="row justify-content-center"><h2>Edytuj produkty</h2></div>
                    <div class="row justify-content-center">
                    <a class="btn btn-success addNew" href="{{route('menu.create')}}" role="button">Dodaj nowy produkt</a>
                    </div>

                @if( !$recommended->isEmpty() )
                    <div class="row justify-content-center pt-4">
                        <h4>Polecane</h4>
                    </div>
                    <div class="row justify-content-center">

                        @foreach($recommended as $product)
                            <div class="col-md-3 col-card">
                                <div class="card">
                                    <div>
                                        <img src="/storage/{{$product->image}}">
                                    </div>
                                    <div class="text-center">
                                        <h4>{{$product->name}}</h4>
                                        <span class="price">{{$product->price}} zł</span>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-danger" role="button" href="/delete/{{$product->id}}">Usuń</a>
                                        <a class="btn btn-info" role="button" href="/edit/{{$product->id}}">Edytuj</a>
                                        <a class="btn btn-warning" role="button" href="recommended/delete/{{$product->id}}">Usuń z polecanych</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                @endif

                @if( !$food->isEmpty() )
                    <div class="row justify-content-center pt-4">
                        <h4>Dania</h4>
                    </div>
                    <div class="row justify-content-center">

                        @foreach($food as $product)
                            <div class="col-md-3 col-card">
                                <div class="card">
                                    <div>
                                        <img src="/storage/{{$product->image}}">
                                    </div>
                                    <div class="text-center">
                                        <h4>{{$product->name}}</h4>
                                        <span class="price">{{$product->price}} zł</span>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-danger" role="button" href="/delete/{{$product->id}}">Usuń</a>
                                        <a class="btn btn-info" role="button" href="/edit/{{$product->id}}">Edytuj</a>
                                        <a class="btn btn-success" role="button" href="/recommended/add/{{$product->id}}">Dodaj do polecanych</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if( !$drinks->isEmpty() )
                    <div class="row justify-content-center pt-4">
                        <h4>Napoje</h4>
                    </div>
                    <div class="row justify-content-center">

                        @foreach($drinks as $product)
                            <div class="col-md-3 col-card">
                                <div class="card">
                                    <div>
                                        <img src="/storage/{{$product->image}}">
                                    </div>
                                    <div class="text-center">
                                        <h4>{{$product->name}}</h4>
                                        <span class="price">{{$product->price}} zł</span>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-danger" role="button" href="/delete/{{$product->id}}">Usuń</a>
                                        <a class="btn btn-info" role="button" href="/edit/{{$product->id}}">Edytuj</a>
                                        <a class="btn btn-success" role="button" href="/recommended/add/{{$product->id}}">Dodaj do polecanych</a>
                                    </div>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-danger">Usuń</button>
                                    <button type="button" class="btn btn-info">Edytuj</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if( !$desserts->isEmpty() )
                    <div class="row justify-content-center pt-4">
                        <h4>Desery</h4>
                    </div>
                    <div class="row justify-content-center">

                        @foreach($desserts as $product)
                            <div class="col-md-3 col-card">
                                <div class="card">
                                    <div>
                                        <img src="/storage/{{$product->image}}">
                                    </div>
                                    <div class="text-center">
                                        <h4>{{$product->name}}</h4>
                                        <span class="price">{{$product->price}} zł</span>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-danger" role="button" href="/delete/{{$product->id}}">Usuń</a>
                                        <a class="btn btn-info" role="button" href="/edit/{{$product->id}}">Edytuj</a>
                                        <a class="btn btn-success" role="button" href="/recommended/add/{{$product->id}}">Dodaj do polecanych</a>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                @endif
                @if( !$alcohols->isEmpty())
                    <div class="row justify-content-center pt-4">
                        <h4>Alkohole</h4>
                    </div>
                    <div class="row justify-content-center">
                        @foreach($alcohols as $product)
                            <div class="col-md-3 col-card">
                                <div class="card ">
                                    <div>
                                        <img src="/storage/{{$product->image}}" class="img-fluid" >
                                    </div>
                                    <div class="text-center mb-auto">
                                        <h4>{{$product->name}}</h4>
                                        <span class="price">{{$product->price}} zł</span>
                                    </div>
                                    <div class="text-center">
                                        <a class="btn btn-danger" role="button" href="/delete/{{$product->id}}">Usuń</a>
                                        <a class="btn btn-info" role="button" href="/edit/{{$product->id}}">Edytuj</a>
                                        <a class="btn btn-success" role="button" href="/recommended/add/{{$product->id}}">Dodaj do polecanych</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

       </div>
        @endsection
    </div>

