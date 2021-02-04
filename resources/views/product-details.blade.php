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
                
                <h2><img src={{ $products->picture }} width="400px" alt=""></h2>
               <h2> {{ $products->name }} </h2>
               <h2> {{ $products->price }} €</h2>

            </div>
        </div>   
    </div>    

    @endsection
@section("footer")
    @parent
@endsection
