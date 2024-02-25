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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
<link rel="stylesheet" href="./css/style.css">

<style>
    body {
	color: #566787;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #435d7d;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #F44336;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {        
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #03A9F4;
	background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	
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
.card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    height: 100px;
    border-radius: 5px;
    transition: .3s linear all;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  
  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 32px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 65px }


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
    
   
    // function openDeleteModal(productId) {
    //     // Set the value of the hidden input field in the modal
    //     document.getElementById('deleteProductModalProductId').value = productId;

    //     // Open the modal
    //     $('#deleteProductModal').modal('show');
    // }
</script>

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
            <a href="{{ route('products.list') }}" class="btn btn-outline-primary my-2 my-sm-0">Products</a>
          </form>
        
          
        </div>
      </nav>   


    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
-<div id="viewport">
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

   
  

    <!-- Content -->
    <div id="content">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav navbar-right">
                  <a href="#">Total Count :</a>

                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            {{-- <h1>Simple Sidebar</h1> --}}

            <!-- Your table and other content go here -->
           <form method="post" action="your_target_url_here">
    @csrf <!-- Add CSRF token for Laravel, remove this line if not using Laravel -->

    <table class="table table-striped table-hover">
        <thead>
            {{-- <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr> --}}
        </thead>
        <tbody>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card-counter primary">
                            <i class="fa fa-code-fork"></i>
                            <span class="count-numbers">{{ $categoryCount ?? '' }}</span>
                            <span class="count-name">Categories</span>

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="card-counter danger">
                            <i class="fa fa-ticket"></i>
                            <span class="count-numbers"><h1>{{ $productCount }}</h1></span>
                            <span class="count-name">Products</span>
                        </div>
                    </div>

                  

                    <div class="col-md-3">
                        <div class="card-counter info">
                            <i class="fa fa-users"></i>
                            <span class="count-numbers">{{ $userCount }}</span>
                            {{-- <a href="{{ route('users.list') }}" class="count-name">Users</a> --}}
                            <span class="count-name">Users</span>

                          </div>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
</form>
<!DOCTYPE html>
<html>
<!-- Include Chart.js library -->
<!-- resources/views/index/dashboard.blade.php -->

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <canvas id="categoryChart" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="countsChart" style="width:100%;max-width:600px"></canvas>
            </div>
        </div>
    </div>

    <!-- Include Chart.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Line Chart for Category Names and Product Counts
            var categoryData = @json($data);
            const categoryCtx = document.getElementById('categoryChart').getContext('2d');

            new Chart(categoryCtx, {
                type: 'line',
                data: {
                    labels: categoryData.map(category => category.name),
                    datasets: [{
                        label: 'Number of Products',
                        data: categoryData.map(category => category.products_count),
                        borderColor: 'rgba(0,123,255,1.0)',
                        backgroundColor: 'rgba(0,123,255,0.2)',
                        borderWidth: 1,
                        pointRadius: 5,
                        pointHoverRadius: 7,
                    }]
                },
                options: {
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Category'
                            }
                        }],
                        yAxes: [{
                            ticks: { beginAtZero: true },
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Number of Products'
                            }
                        }]
                    },
                    legend: { display: false }
                }
            });

            // Bar Chart for User, Category, and Product Counts
            const countsCtx = document.getElementById('countsChart').getContext('2d');

            new Chart(countsCtx, {
                type: 'bar',
                data: {
                    labels: ['Users', 'Categories', 'Products'],
                    datasets: [{
                        label: 'Count',
                        data: [@json($userCount), @json($categoryCount), @json($productCount)],
                        backgroundColor: 'rgba(0, 123, 255, 0.7)',
                        borderWidth: 1,
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: { beginAtZero: true },
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Count'
                            }
                        }]
                    },
                    legend: { display: false }
                }
            });
        });
    </script>
