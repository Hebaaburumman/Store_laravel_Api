<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
          <form class="form-inline my-2 my-lg-0">
            <a href="{{ route('categories.list') }}" class="btn btn-outline-success my-2 my-sm-0">BACK</a>
          </form>
        </div>
      </nav>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Update User</h4>
                </div>
                <div class="card-body">
                    

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Update User Data</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT') {{-- Assuming you are using the PUT method for updates --}}
                        
                        <!-- Add your input fields for category data -->
                        <label for="name">Category Name:</label>
                        <input type="text" name="name" value="{{ $category->name }}" required>
                        <br>
                    
                        <!-- Add more input fields as needed -->
                    
                        <button name="submit" type="submit">Update Category</button>
                    </form>
                    
                </div>
                
        </div>
    </div>
</div>


</body>
</html>