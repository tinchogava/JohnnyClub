@extends('templates.template')

@section('content')

@include('store.partials.slider')

<section id="services" class="service-item">
       <div class="container">
            <div class="center wow fadeInDown">
                <h2>Nuestros Productos</h2>
                <p class="lead">Estos son algunos de los productos mas destacados  <br> que se encuentran disponibles en Johnny Club</p>
            </div>
            <div class="row">
                <div id="products">
                    @foreach($products as $product)
                        <div class="product white-panel">
                            <h3>{{ $product->name }}</h3><hr>
                            <img src="{{ $product->image }}" width="200">
                            <div class="product-info panel">
                                <p>{{ $product->description }}</p>
                                <h3><span class="label-success input-lg">$ {{ number_format($product->price,2) }}</span></h3>
                                <p>
                                    <a class="btn btn-warning" href="{{ route('cart-add', $product->id) }}">
                                        <i class="fa fa-cart-plus"></i> Agregar
                                    </a>
                                    <a class="btn btn-primary" href="{{ route('product-detail', $product->id) }}"><i class="fa fa-chevron-circle-right"></i> Leer mas</a>
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>                                               
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

@include('store.partials.content')

@include('store.partials.contact-info')

@include('store.partials.bottom')

@stop

  
  