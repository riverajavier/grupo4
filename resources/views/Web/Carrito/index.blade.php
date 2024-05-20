@extends('welcome')
@section('titulo', 'Tienda')
@section ('imagen' , ('storage/img/uploads/blog-tecnologia-informatica-redes.jpg'))
@section('url' , '')
@section('estracto' , 'Bienvenido a mi blog oficial, sitio dedicado a la tienda')
@section('contenido')
<div class="container py-3 my-5 rounded z-depth-1" >
    <div class="row" id="carrito">
        <div class="col-lg-12">
            <section class="dark-grey-text">
                <div class="table-responsive">
                    <table class="table mb-0 product-table">
                        <thead class="mdb-color lighten-5">
                            <tr>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Producto</strong>
                                </th>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Precio</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>Cantidad</strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(session()->has('success_msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session()->get('success_msg') }}
                            </div>
                            @endif
                            @if(session()->has('alert_msg'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                {{ session()->get('alert_msg') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endif
                            @if(count($errors) > 0)
                            @foreach($errors0>all() as $error)
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            @endforeach
                            @endif
                            @if(\Cart::getTotalQuantity()>0)
                            <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en la lista de favoritos</h4><br>
                            @else
                            <div class="text-center">
                                <h4>No hay productos por mostrar</h4><br>
                                <a href="/" class="btn btn-dark btn-rounded">ir a la tienda</a>
                            </div>
                            @endif
                            @foreach($cartCollection as $item)
                            <tr class="">
                                <th scope="row ">
                                    <img src="{{URL::asset('storage/img/carrito/'.$item->attributes->image)}}"
                                        alt="" class="rounded img-fluid">
                                        <p class="mt-3 text-dark"> {{ $item->description }}</p>

                                </th>
                                <td class="pb-4"><p class="mt-3"> {{ $item->name }}</p></td>
                                <td></td>
                                <td class="pb-4">${{ $item->price }}</td>
                                <td>
                                    <form action="{{ route('cart.update') }}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="mb-3 input-group">
                                            <input type="hidden" value="{{ $item->id}}" id="id" name="id">
                                            <input type="number" class="form-control form-control-sm "
                                                value="{{ $item->quantity }}" id="quantity" name="quantity"
                                                style="width: 70px; margin-right: 10px;">

                                            <button class="btn btn-sm btn-primary btn-rounded"><i
                                                    class="fa fa-edit"></i>
                                            </button>
                                    </form>
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                        <button class="btn btn-sm btn-danger btn-rounded"><i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                </div>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <div class="text-center form-group">
                    <h2 class="mt-5 text-cente text-dark">${{ \Cart::getTotal() }}</h2>
                    <a href="{{ route('index') }}" class="btn btn-primary btn-rounded">Proceder al CheckOut</a>
                    <a href="{{ route('index') }}" class="btn btn-success btn-rounded">Seguir comprando</a>
                </div>
        </div>
        </section>
    </div>
</div>
</div>
@endsection
@push('estilos')
<link rel="stylesheet" href="{{URL::asset('FrontEnd/css/tienda.css')}}">

@endpush
