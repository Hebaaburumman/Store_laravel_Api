<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Corrected inclusion of Bootstrap JavaScript and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <style>
img{
  height:150px;
  width:100%;
}

div [class^="col-"]{
  padding:5px;
  padding:5px;
  
}
.card{
  transition:0.5s;
  cursor:pointer;
}
.card-title{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
}
.card-title i{  
  font-size:15px;
  transition:1s;
  cursor:pointer;
  color:#ffa710
}
.card-title i:hover{
  transform: scale(1.25) rotate(100deg); 
  color:#18d4ca;
  
}
.card:hover{
  transform: scale(1.05);
  box-shadow: 10px 10px 15px rgba(0,0,0,0.3);
}
.card-text{
  height:80px;  
}

.card::before, .card::after {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  transform: scale3d(0, 0, 1);
  transition: transform .3s ease-out 0s;
  background: rgba(255, 255, 255, 0.1);
  content: '';
  pointer-events: none;
}
.card::before {
  transform-origin: left top;
}
.card::after {
  transform-origin: right bottom;
}
.card:hover::before, .card:hover::after, .card:focus::before, .card:focus::after {
  transform: scale3d(1, 1, 1);
}

.product-details {
    padding: 7px;
}

.product-catagory {
    display: block;
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #928d8d;
    margin-bottom: 5px;
}

.product-details h4 a {
    font-weight: 300;
    display: block;
    margin-bottom: 5px;
    /* text-transform: uppercase; */
    color: #363636;
    text-decoration: none;
    transition: 0.3s;
}

.product-details h4 a:hover {
    color: #fbb72c;
}

.product-details p {
    font-size: 15px;
    line-height: 22px;
    margin-bottom: 7px;
    color: #999;
}

.product-bottom-details {
    overflow: hidden;
    border-top: 1px solid #eee;
    padding-top: 10px;
    display: flex;
    flex-direction: row;
}

.product-bottom-details div {
    float: left;
    width: 50%;
}

.product-price {
    font-size: 18px;
    color: #fbb72c;
    font-weight: 600;
}

.product-price small {
    font-size: 80%;
    font-weight: 400;
    text-decoration: line-through;
    display: inline-block;
    margin-right: 5px;
}

.product-links {
    text-align: right;
}

.product-links a {
    display: inline-block;
    margin-left: 5px;
    color: #e1e1e1;
    transition: 0.3s;
    font-size: 17px;
}

.product-links a:hover {
    color: #fbb72c;
}
   </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">StoreHouse</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo e(route('dashboard.list')); ?>">Admin<span class="sr-only"></span></a>
            </li>
        </ul>

        
        <form class="form-inline my-2 my-lg-0">
            <a href="<?php echo e(route('products.create')); ?>" class="btn btn-outline-primary my-2 my-sm-0">Add Product</a>
          </form>
    </nav>
        <div class="container mt-2">
           
              <div class="row">
                
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-sm-6">
        <div class="card card-block">
            
            <img src="<?php echo e(asset($product->image)); ?>" alt="Product Image">
            <div class="product-details">
                <span class="product-catagory">
                    <?php $__currentLoopData = $product->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($category->name); ?>

                        <?php if(!$loop->last): ?>
                            ,
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </span>
                <h4><a href=""><?php echo e($product->name); ?></a></h4>
                <p><?php echo e($product->description); ?></p>
                
                
                <div class="product-bottom-details">
                      <div class="form-group">
                        <label for="quantity<?php echo e($product->id); ?>">Quantity</label>
                        <input type="number" class="form-control quantity-input" id="quantity<?php echo e($product->id); ?>" name="quantity" value="1" min="1" data-price="<?php echo e($product->price); ?>">
                      </div>
                        <div class="form-group">
                          <label for="price<?php echo e($product->id); ?>">Total Price</label>
                          <input type="text" class="form-control total-price" id="price<?php echo e($product->id); ?>" value="<?php echo e($product->price); ?>">
                        </div>
                </div>
                <p>Created by: <?php echo e($product->user->name); ?></p>

            </div>
        </div>
    </div>
    <script>
      document.getElementById('quantity<?php echo e($product->id); ?>').addEventListener('input', function() {
          // Get the price and quantity values
          const price = parseFloat(this.getAttribute('data-price'));
          const quantity = parseInt(this.value);
  
          // Calculate the total price
          const totalPrice = price * quantity;
  
          // Update the corresponding total price input
          const totalInput = document.getElementById('price<?php echo e($product->id); ?>');
          if (totalInput) {
              totalInput.value = totalPrice.toFixed(2); // Format to two decimal places
          }
      });
  </script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="d-flex justify-content-center" style="padding: 10px 500px 10px 500px;">
  <?php echo $products->links(); ?>

</div>
<script>
// Add an event listener to the document for delegated event handling
document.addEventListener('input', function (event) {
    if (event.target.classList.contains('quantity-input')) {
        // Get the price and quantity values
        const price = parseFloat(event.target.getAttribute('data-price'));
        const quantity = parseInt(event.target.value);

        // Calculate the total price
        const totalPrice = price * quantity;

        // Update the corresponding total price input
        const totalInput = document.getElementById('price' + event.target.id.slice(-1));
        if (totalInput) {
            totalInput.value = totalPrice.toFixed(2); // Format to two decimal places
        }
    }
});

                
            </div>
              </div>
                </div>    
              </div>
              
            </div>
    </div>
</div>

<footer class="bg-body-tertiary text-center">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">StoreHouse.com</a>
  </div>
  <!-- Copyright -->
</footer><?php /**PATH /var/www/file/storehouse_Api_laravel/resources/views/index/viewproduct.blade.php ENDPATH**/ ?>