{{-- Bootstrap --}}
@section("head")
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
@endsection

{{-- Navbar --}}
@section("header")
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/backoffice">Backoffice</a>
          <a class="nav-link" href="/backoffice/product">Management Product</a>
          <a class="nav-link" href="/product">Product</a>
        </div>
    </div>
  </nav>
  @endsection