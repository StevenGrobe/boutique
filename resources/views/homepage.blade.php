@extends("app")
@section("head")
<link rel="stylesheet" href="{{asset("/css/catalogue.css")}}">

@section("page-title","Home page")
@section("content")
    <div class="list-product">
        <div class="item">
            <div class="item-container">
                <div class="flex-zone">
                    <h2> <a href="http://127.0.0.1:8000/product">Product </a></h2>
                </div>
                <div class="flex-zone">
                    <h2> <a href="http://127.0.0.1:8000/cart">Panier </a></h2>
                </div>
            </div>
        </div>   
    </div>    

@endsection
