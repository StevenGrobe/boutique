@extends("app")
@section("head")
    @parent
    <link rel="stylesheet" href="{{asset("/css/catalogue.css")}}">
@endsection
@section("page-title","Détail produit")
@section("content")

    <div class="list-product">
        <div class="item">
            <div class="item-container">

                @if (isset($products))  
                    <h2> {{ $products->name }} </h2>
                    <h2> {{ $products->price }} €</h2>
               @else 
                    <h2> le produit n'existe pas</h2>
               @endif
               
            </div>
        </div>   
    </div>    

    @endsection
@section("footer")
    @parent
@endsection
