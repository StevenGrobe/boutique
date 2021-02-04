@extends("app")

@section("head")
    @parent
    <link rel="stylesheet" href="{{asset("/css/catalogue.css")}}">
@endsection

@section("page-title","Catalogue")

@section("content")


@foreach ($products as $product) 
    <div class="list-product">
        <div class="item">
            <div class="item-container">

                    <h2><img src={{ $product->picture }} width="400px" alt=""></h2>
                    <a href="/product/{{ $product->id }}"><button type="submit" class="btn btn-primary">Découvrir</button></a>
                    <h2> {{ $product->name }} </h2>

            </div>
        </div>   
    </div>    

@endforeach
@endsection
@section("footer")
    @parent
@endsection

