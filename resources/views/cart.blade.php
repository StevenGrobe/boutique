<!-- link wave design -->
@extends("app")
<!-- link for head -->
@section("head")
    @parent
    <link rel="stylesheet" href="{{asset("/css/cart.css")}}">
@endsection

<!-- page name -->
@section("page-title","Panier")

<!-- Content -->
@section("content")
    <div class="cart">

      <!-- recap -->
      <div class="recap">
        <div class="flex-zone">
            <div class="item-image">
              <img src={{asset("/images/cart.svg")}} width="48px" alt="">
            </div>
            <div class="item-text">
              <h2>Récapitulatif des produits</h2>
            </div>
        </div>
      </div>


      <!-- produit -->
      <div class="item">
        <div class="flex-zone">
            <div class="item-image">
                <img src={{asset("/images/bento-1.svg")}} alt="">
            </div>
            <div class="item-text">
              <div class="trash">
                <i class="fa fa-trash"></i>
              </div>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna.</p>
                <p>9.80 €</p>
                <div class="note">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <input class="quantity" id="id_form-0-quantity" min="1" max="10" name="form-0-quantity" value="1" type="number">
          </div>
        </div>      
      </div>

      <div class="item">
        <div class="flex-zone">
            <div class="item-image">
                <img src="{{asset("/images/bento-1.svg")}}" alt="">
            </div>
            <div class="item-text">
                <div class="trash">
                <i class="fa fa-trash"></i>
                </div>
                <h2>Lorem Ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore et dolore magna.</p>
                <p>19.60€</p>
                <div class="note">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <input class="quantity" id="id_form-0-quantity" min="1" max="10" name="form-0-quantity" value="2" type="number">
          </div>
        </div>      
      </div>      
    </div>


    <!-- total -->
    <div class="total">
      <div class="flex-zone">
          <div class="item-text">
            <h2>Total : 29.40 €</h2>
            <button class="btn-primary">Acheter</button>
          </div>
      </div>
    </div>
@endsection

<!-- link for footer -->
@section("footer")
    @parent
@endsection

