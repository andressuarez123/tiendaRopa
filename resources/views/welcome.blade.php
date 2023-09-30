@extends('layouts.app') 
@section('title', 'modaweb - Página de Bienvenida')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3> <i class="fas fa-tag"></i> Ropa</h3>
            <hr>
            <div class="owl-carousel owl-theme">
                @foreach ($products as $product)
                    <div class="slider" style="background-image: url({{ asset($product->image) }})">
                        <p>
                            {{ $product->description }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--  --}}

    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="form-group">
                <select name="filter" id="filter" class="form-select">
                    <option value="-2">Seleccione...</option>
                    <option value="-1">Todos</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <br>
    <div class="loader d-none text-center mt-5">
        <img src="{{ asset('images/elements/loader.gif')}}" width="100px">
    </div>
    <br><br>
    {{--  --}}
    <div class="row justify-content-center" id="list-filter">
        <div class="col-md-12">
            @foreach ($categories as $category)
                <h3 class="mt-5"> {{$category->name}}</h3>
                <hr>
                <div class="row" id="list-products">
                @foreach ($products as $product)
                    @if ($product->category_id == $category->id)
                    <div class="col-md-4 mb-4">
                        <div class="card mb-3" style="max-width: 540px; min-height: 194px;">
                          <div class="row no-gutters">
                            <div class="col-md-4">
                              {{-- <img src="{{ asset($product->image) }}" class="card-img"> --}}
                              <figure class="img-fcard" style="background-image: url({{ asset($product->image)  }});"></figure>
                            </div>
                            <div class="col-md-8">
                              <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">
                                    {{-- {{ $product->description }} --}}
                                </p>
                                <p class="card-text">
                                    @php
                                        $td = \Carbon\Carbon::now();
                                        $dt = \Carbon\Carbon::parse($product->created_at);
                                    @endphp
                                    <small class="text-muted">
                                        <strong>Creado hace:</strong> {{ $td->diffForHumans($dt, 1) }}
                                    </small>
                                </p>
                                <a href="{{route('products.show',$product->id)}}" class="btn btn-outline-primary btn-block">
                                    <i class="fas fa-search-plus"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection

