<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap CRUD Data Table for Database with Modal Form</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"> StoreHouse </a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            
          </ul>
            <a href="{{ route('products.show') }}" class="btn btn-outline-primary my-2 my-sm-0">Back</a>
        
          {{-- <form class="form-inline my-2 my-lg-0">
            <a href="{{ route('posts.show') }}" class="btn btn-outline-success my-2 my-sm-0">BACK</a>
          </form>   --}}
          
        </div>
      </nav>       






      <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                       
                        <form action="{{ route('products.update', $product->id) }}" method="post" enctype="multipart/form-data">
                            @csrf <!-- Add CSRF token -->
                            @method('PUT') <!-- Use the PUT method for updates -->
    
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                                <small class="form-text text-muted">Leave empty to keep the existing image.</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="quantity">Quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}" min="0" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" id="price" name="price"  value="{{ $product->price }}" min="0.00" required>
                            </div>
                            <label for="category">Categories</label>
    <div class="form-group" style="max-height: 150px; overflow-y: scroll;">
        @foreach($categories as $category)
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    name="categories[]"
                    value="{{ $category->id }}"
                    id="category{{ $category->id }}"
                    {{ in_array($category->id, old('categories', $product->categories->pluck('id')->toArray())) ? 'checked' : '' }}
                >
                <label class="form-check-label" for="category{{ $category->id }}">
                    {{ $category->name }}
                </label>
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-primary">Update Product</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    