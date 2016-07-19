@extends('templates.template')

@section('content')

<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Nuestros Productos</h2>
            <p class="lead">En esta sección encontrarás todos los productos disponibles en Johnny Club. Contamos con <br> una amplia variedad de bebidas de la mas alta calidad en el mercado.</p>
        </div>
        <div class="row">
           
            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="recent-work-wrap">
                    <img class="img-responsive" src="{{ asset($product->image) }}" alt=""  width="200">
                    <div class="overlay">
                        <div class="recent-work-inner">
                            <h3><a href="#">{{ $product->name}}</a> </h3>
                            <p>{{ $product->winery->name }}</p>
                            <a class="preview" href="images/portfolio/full/item{{$product->id}}.png" rel="prettyPhoto"><i class="fa fa-eye"></i> Vista Previa </a>
                        </div>
                    </div>
                </div>
            </div>
           
        </div> 
    </div> 
</section> 

@stop