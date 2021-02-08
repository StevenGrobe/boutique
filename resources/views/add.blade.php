{{-- Bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/backoffice">Backoffice</a>
          <a class="nav-link" href="/backoffice/product">Management Product</a>
          <a class="nav-link" href="/product">Product</a>
        </div>
    </div>
  </nav>

{{-- content --}}

<h2>Add Product</h2>

<form action="/backoffice/product/add/result" method="post">
    @csrf
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Nom du produit">
    </div>
    <div class="mb-3">
        <label for="picture">Image</label>
        <input type="text" class="form-control" name="picture" placeholder="images/cat.svg">
    </div>
    <div class="mb-3">
        <label for="quantity">Quantity</label>
        <input  type="number" min="0" max="50" name="quantity" value="1">
        <label for="price">Price</label>
        <input  type="number" min="0" max="1500" name="price" value="0">
    </div>
    <div class="mb-3">
        <label for="weight">Weight</label>
        <input  type="number" min="0" max="5000" name="weight" value="0">
        <label for="taille">Taille</label>
        <input  type="number" min="0" max="200" name="taille" value="0">
    </div>
    <div class="mb-3">
        <label for="category_id">Category</label>
        <input  type="number" min="1" max="3" name="category_id" value="1">
    </div>
    <button type="submit" class="btn btn-primary">Add product</button>
  </form>