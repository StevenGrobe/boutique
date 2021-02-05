@extends("app")
@section("head")
    @parent
    <link rel="stylesheet" href="{{asset("/css/catalogue.css")}}">
@endsection
@section("page-title","Catalogue")
@section("content")

    <div class="list-product">
        <div class="item">
            <div class="item-container">

                @foreach ($products as $product)
                    <h2> {{ $product->name }} </h2> 
                    <h2> {{ $product->price }} </h2> 
                    <br>
                @endforeach


            </div>
        </div>   
    </div>    

@endsection
@section("footer")
    @parent
@endsection

