@extends('welcome')
@section('titulo', ' Tienda')
@section ('imagen' , ('storage/img/uploads/blog-tecnologia-informatica-redes.png'))
@section('url' , '')
@section('estracto' , 'Bienvenido a mi blog oficial, sitio dedicado a la tienda')
@section('contenido')
<div class="p-0 container-fluid">
    {{-- @include('Web.Home.portada') --}}
</div>

<div id="tienda" class="container">
    <div class="mt-5 row justify-content-center">
        <div class="text-center col-lg-12">
            <h4 class="">Productos</h4>
                <hr>
            <div class="row">
                @foreach($products as $pro)
                <div class="col-lg-3">
                    <div class="card" >
                        <img src="{{URL::asset('storage/img/carrito/'.$pro->image_path) }}"
                        class="mx-auto card-img-top"
                         alt="{{ $pro->image_path }}">
                        <div class="text-center card-body">
                            <a href="#">
                                <h6 class="card-title">{{ $pro->name }}</h6>
                            </a>
                            <p>${{ $pro->price }}</p>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                <input type="hidden" value="{{ $pro->description }}" id="description" name="description">
                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer" style="background-color: white;">
                                    <div class="row">
                                        <button class="btn btn-warning btn-sm" class="tooltip-test" title="add to cart">
                                            <i class="fa fa-star" aria-hidden="true"></i></i> agregar a favoritos
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
@push('estilos')
<link rel="stylesheet" href="{{URL::asset('FrontEnd/css/tienda.css')}}">

@endpush
