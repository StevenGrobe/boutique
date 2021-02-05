{{-- Bootstrap --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

{{-- Navbar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="/backoffice">Backoffice</a>
          <a class="nav-link" href="/">Home page</a>
          <a class="nav-link" href="/product">Product</a>
          <a class="nav-link" href="/product/1">Product detail</a>
        </div>
    </div>
  </nav>

{{-- content --}}
<form class="" action="aaaa" method="get">
    <div class="mb-3">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Nom du produit">
    </div>
    <div class="mb-3">
        <label for="image">Image</label>
        <input type="text" class="form-control" name="image" placeholder="images/cat.svg">
    </div>
    <div class="mb-3">
        <label for="quantity">Quantity</label>
        <input  type="number" min="1" max="50" name="quantity" value="1">
        <label for="price">Price</label>
        <input  type="number" min="1" max="1500" name="price" value="0">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" class="form-control" id="description" rows="5" placeholder="Description du produit"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add product</button>
  </form>