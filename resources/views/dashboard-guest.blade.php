@extends('layouts.app')
@section('title', 'modaweb - Home')
@section('content')
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <img src="{{ asset('images/elements/dashboard.svg') }}" width="300px" class="my-2 img-top-card">
                <div class="card-header-modaweb text-center">
                    <h4>
                        <i class="fa fa-clipboard-list"></i>
                        Escritorio
                        | 
                        <small>
                            <i class="fas fa-user-ninja"></i> Invitado
                        </small>
                    </h4>
                </div>

                <div class="card-body row">
                        {{--  --}}
                        <div class="col-md-4 mt-5">
                            <div class="card text-center">
                                <img src="{{ asset('images/elements/products.svg') }}" width="240px" class="my-2 img-top-card" height="154px">
                                <div class="card-body">
                                    <a href="{{ route('products.index') }}" class="btn btn-primary btn-block ">
                                        <i class="fa fa-film"></i>
                                        Ropa
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
