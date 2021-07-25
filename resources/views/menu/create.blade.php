@extends('layouts.app')

@section('content')
    <div class="container">
        <form  action="/store" enctype="multipart/form-data" method="post">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nazwa</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', isset($product->id) ? $product->name : null)}}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="category" class="col-md-4 col-form-label text-md-right">Kategoria</label>
                <div class="col-md-6">
                    <select class="form-control" name="category_id" aria-label="Default select example" value="{{ old('category_id', isset($product->id) ? $product->category_id : null)}}">
                        @if(!isset($product->id))
                            <option selected disabled>Wybierz kategorię</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}" </option>
                            @endforeach
                            @else
                            <option disabled>Wybierz kategorię</option>
                                @foreach($categories as $category)
                                    @if($category->id == $product->id)
                                    <option selected value="{{$category->id}}">{{$category->name}} </option>
                                    @else
                                    <option value="{{$category->id}}">{{$category->name}} </option>
                                @endif
                                @endforeach
                        @endif
                    </select>
                </div>

                @error('county')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                @enderror

            </div>

                <div class="form-group row">
                    <label for="price" class="col-md-4 col-form-label text-md-right">Cena</label>

                    <div class="col-md-6">
                        <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price', isset($product->id) ? $product->price : null)}}" required autocomplete="price" autofocus>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                        @enderror
                    </div>
                </div>

            <div class="form-group row">
                <label for="image" class="col-md-4 col-form-label text-md-right">Zdjecie produktu</label>

                <div class="col-md-6">
                    <input type="file" class="form-control-file" id="image" name="image" value="{{ old('image', isset($product->id) ? $product->image : null)}}">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Dodaj
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
