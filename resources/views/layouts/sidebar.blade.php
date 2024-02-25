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

<link rel="stylesheet" href="./css/style.css">

<style>
    
@import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-family: 'Roboto', sans-serif;
  font-size: 16px;
}

/* Toggle Styles */

#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#sidebar header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;
}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
  display: flex;
    flex-direction: column;
}

#sidebar .nav a{
  background: none;
  border-bottom: 1px solid #455A64;
  color: #CFD8DC;
  font-size: 14px;
  padding: 16px 24px;
  display: flex;
    flex-direction: column;
}

#sidebar .nav a:hover{
  background: none;
  color: #ECEFF1;
}

#sidebar .nav a i{
  margin-right: 16px;
}
</style>
<script>
    
</script>

</head>

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a href="#">StoreHouse</a>
    </header>
    <ul class="nav">
      <li>
        <a href="{{ route('dashboard.list') }}">
          <i class="zmdi zmdi-view-dashboard"></i> Dashboard
        </a>
      </li>
      <li>
        <a href="{{ route('products.show') }}">
          <i class="zmdi zmdi-link"></i> Products
        </a>
      </li>
      <li>
        <a href="{{ route('users.list') }}">
          <i class="zmdi zmdi-widgets"></i> Users
        </a>
      </li>
      <li>
        <a href="{{ route('categories.list') }}">
          <i class="zmdi zmdi-calendar"></i> Categories
        </a>
      </li>
      
    </ul>
  </div> 
  @yield('section');
