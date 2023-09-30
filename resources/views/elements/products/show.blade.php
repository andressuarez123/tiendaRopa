@extends('layouts.app')
@section('title', 'modaweb - Ver Pelicula')

@section('content')
<div class="row">
    <div class="col-md-10 offset-md-1">
        @auth
            <h1> <i class="fa fa-search"></i> Ver Ropa</h1>
        @else
            <h1> <i class="fa fa-film"></i> {{$product->name}}</h1>
        @endauth
        
        <hr>
        @auth
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ url('home') }}">
                            <i class="fa fa-clipboard-list"></i>  
                            Escritorio
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('products.index') }}">
                            <i class="fas fa-list-alt"></i> 
                            Módulo de Ropa
                        </a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <i class="fa fa-search"></i> 
                        Ver Ropa
                    </li>
                </ol>
            </nav>
        @endauth
        
        <form>
            <div class="form-group mb-3">
                <div class="text-center my-3">
                    <img src="{{ asset($product->image) }}" class="img-thumbnail" id="preview" width="400px">
                </div>
                   
            </div>
            <div class="mb-3">
                <label for="name" class=""><b> Nombre </b></label>

                <div class="">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" disabled>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"><b> Descripción </b></label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="4" disabled>{{ $product->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="quality" class=""><b> Calidad </b></label>
                <input id="quality" type="text" class="form-control @error('quality') is-invalid @enderror" name="quality" value="{{ $product->quality }}" disabled>
            </div>
            <div class="mb-3">
                <label for="release_year" class=""><b> Fecha de lanzamiento </b></label>

                <div class="">
                    <input id="release_year" type="text" class="form-control @error('release_year') is-invalid @enderror" name="release_year" value="{{ $product->release_year }}" disabled>
                </div>
            </div>
            <div class="mb-3">
                <label for="language" class=""><b> Idioma </b></label>

                <div class="">
                    <input id="language" type="text" class="form-control @error('language') is-invalid @enderror" name="language" value="{{ $product->language }}" disabled>
                </div>
            </div>

            
            <div class="mb-3">
                <label for="video_link" class=""><b> Link del video </b></label>

                <div class="">
                    <a href="{{$product->video_link}}" target="_blank" rel="noopener noreferrer">Ver Pelicula</a>
                </div>
            </div>

            <div class="mb-3">
                <label for="download_link" class=""><b> Link de descarga </b></label>

                <div class="">
                    <a href="{{$product->download_link}}" target="_blank" rel="noopener noreferrer">Descargar Pelicula</a>
                </div>
            </div>
            @auth
                <div class="mb-3">
                    <label for="user_id" class=""><b> Usuario</b></label>
                    <div class="">
                        <input id="user_id" type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ $product->user->fullname }}" disabled>
                    </div>
                </div>
            @endauth
            
            <div class="mb-3">
                <label for="category_id" class=""><b> Categoría</b></label>
                <div class="">
                    <input id="category_id" type="text" class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $product->category->name }}" disabled>
                </div>
            </div>

            <div class="mb-3">
                <label for="reproduction_number" class=""><b> Número de Reproducciones </b></label>
                <div class="">
                    <input id="reproduction_number" type="text" class="form-control @error('reproduction_number') is-invalid @enderror" name="reproduction_number" value="{{ $product->reproduction_number }}" disabled>
                </div>
            </div>

            <div class="mb-4">
                <label for="created_at" class=""> <b> Fecha de creación</b></label>
                <div class="">
                    <input id="created_at" type="text" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ $product->created_at }}" disabled>
                </div>
            </div>
            @auth
                <div class="d-grid gap-2 mb-3">
                
                    <a href="{{route('products.index')}}" class="btn btn-primary btn-block text-uppercase">Volver <i class="fa fa-left"></i></a>
                
                </div> 
            @endauth
            
            
        </form>
    </div>
</div> 
@endsection
