@extends('layouts.app')
@section('content')
    <div class="container my-5 py-5">
        <div class="row h-100 mt-5">
            <div class="col-12 col-md-6">
                <h1 class="text-main text-uppercase">talleres de coches</h1>
                <p class="lead text-secondary mt-5">Haga clic aquí para insertar su próximo anuncio</p>
            <a href="{{route('sales')}}"><button class="btnvisita"><span>Insertar</span></button></a>
            </div>
            <div class="col-12 col-md-6">
                <img src="/img/home.svg" width="500" alt="">
            </div>
        </div>
    </div>
    
    <div class="container-fluid py-5 bg-light">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h3 class="font-weight-bold text-center">¿Por qué elegirnos?</h3>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-md-4">
                    <i class="fab fa-angellist fa-3x mb-4 text-third"></i>
                    <h5 class="mt-3">EFICIENCIA
                    </h5>
                    <p class="text-secondary">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-tachometer-alt fa-3x mb-4 text-third"></i>
                    <h5 class="mt-3">VELOCIDAD</h5>
                    <p class="text-secondary">Lorem ipsum dolor sit amet</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-hand-holding-usd fa-3x mb-4 text-third"></i>
                    <h5 class="mt-3">ECONOMIA</h5>
                    <p class="text-secondary">Lorem ipsum dolor sit amet</p>
                </div>
            </div>
        </div>
    
    </div>
    
    
    
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="font-weight-bold text-center">Nuestra Oferta de Coches</h3>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            @foreach ($coches as $coche)
            <div class="col-12 col-md-4 mt-3">
                <div class="card rounded-0 shadow" style="width: 20rem; height:25rem">
                    <img src="{{ $coche["img"]}}" class="img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-third">{{ $coche["name"] }}</h5>
                        <p class="card-text text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing<p>
                                <button class="btnBuy">{{ $coche["price"] }}</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection







