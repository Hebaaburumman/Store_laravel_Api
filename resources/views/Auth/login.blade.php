<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<style>
    .card {
    border: 0;
    border-radius: 0px;
    margin-bottom: 30px;
    -webkit-box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    box-shadow: 0 2px 3px rgba(0,0,0,0.03);
    -webkit-transition: .5s;
    transition: .5s;
}

.padding {
    padding: 3rem !important
}

body {
    background-color: #f9f9fa
}

h5.card-title {
    font-size: 15px;
}

.fw-400 {
    font-weight: 400 !important;
}

.card-title {
    font-family: Roboto,sans-serif;
    font-weight: 300;
    line-height: 1.5;
    margin-bottom: 0;
    padding: 15px 20px;
    border-bottom: 1px solid rgba(77,82,89,0.07);
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}

.form-group {
    margin-bottom: 1rem;
}

.form-control {
    border-color: #ebebeb;
    border-radius: 2px;
    color: #8b95a5;
    padding: 5px 12px;
    font-size: 14px;
    line-height: inherit;
    -webkit-transition: 0.2s linear;
    transition: 0.2s linear;
}

.card-body>*:last-child {
    margin-bottom: 0;
}

.btn-primary {
    background-color: #0080ff;
    border-color: #33cabb;
    color: #fff;
}
.btn-bold {
    font-family: Roboto,sans-serif;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 12px;
}

.btn-primary:hover {
    background-color: #52d3c7;
    border-color: #52d3c7;
    color: #fff;
}

.btn:hover {
    cursor: pointer;
}

.form-control:focus {
    border-color: #83e0d7;
    color: #4d5259;
    -webkit-box-shadow: 0 0 0 0.1rem rgba(51,202,187,0.15);
    box-shadow: 0 0 0 0.1rem rgba(51,202,187,0.15);
}

.custom-radio {
    cursor: pointer;
}

.custom-control {
    display: -webkit-box;
    display: flex;
    min-width: 18px;
}

<style>
      
 .link-muted { color: #aaa; } .link-muted:hover { color: #1266f1; }
            </style>
            
<section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
    background-color: hsl(210, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(210, 41%, 35%) 15%,
        hsl(210, 41%, 30%) 35%,
        hsl(210, 41%, 20%) 75%,
        hsl(210, 41%, 19%) 80%,
        transparent 100%),
      radial-gradient(1250px circle at 100% 100%,
        hsl(210, 41%, 45%) 15%,
        hsl(210, 41%, 30%) 35%,
        hsl(210, 41%, 20%) 75%,
        hsl(210, 41%, 19%) 80%,
        transparent 100%);
    background-size: cover;
}

#radius-shape-1 {
    height: 220px;
    width: 220px;
    top: -60px;
    left: -130px;
    background: radial-gradient(#7dc1ff, #0080ff);
    overflow: hidden;
}

#radius-shape-2 {
    border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
    bottom: -60px;
    right: -110px;
    width: 300px;
    height: 300px;
    background: radial-gradient(#7dc1ff, #0080ff);
    overflow: hidden;
}

  
      .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
      }
    </style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="#"> StoreHouse </a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        
      </ul>
        <a href="{{ route('signup.show') }}" class="btn btn-outline-primary my-2 my-sm-0">Signup</a>
    
      {{-- <form class="form-inline my-2 my-lg-0">
        <a href="{{ route('posts.show') }}" class="btn btn-outline-success my-2 my-sm-0">BACK</a>
      </form>   --}}
      
    </div>
  </nav>       
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-3 mb-3 mb-lg-0" style="z-index: 10">
          <h1 class="my-3 display-3 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
             <br />
            <span style="color: hsl(218, 81%, 75%)"></span>
          </h1>
          <p class="mb-4 opacity-50" style="color: hsl(218, 81%, 85%)">
            
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
  
          <div class="card bg-glass">
            
            <div class="card-body px-4 py-5 px-md-5">
              <form class="card" method="POST" action="{{ route('login.check') }}">
                @csrf
                <h5 class="card-title fw-400">Login</h5>
            
                <div class="card-body">
            
                    <div class="form-group">
                        <input name="email" class="form-control" type="text" placeholder="Email">
                    </div>
            
                    <div class="form-group">
                        <input name="password" class="form-control" type="password" placeholder="Password">
                    </div>
            
                    <button type="submit" class="btn btn-block btn-bold btn-primary">Login</button>
            
                    <div style="margin-top: 20px;">
                        <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    {{-- @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif  --}}
                     {{-- <a href="{{ route('register') }}" class="btn btn-block btn-bold btn-primary">Or Sign up Now</a> --}}
                    @if($errors->has('email'))
                    <div class="alert alert-danger mt-2">
                        {{ $errors->first('email') }}
                    </div>
                    @endif 
                </div>
            </form>
            
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
