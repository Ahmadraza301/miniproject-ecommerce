<!-- connect file -->
<?php
include('includes/connect.php');

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECommerce website using PHP and MySql</title>
    <!-- Bootstrape Css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file Link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0">
        <!-- first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo.png" alt="logo" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price 100/-</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- Second child -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondry">
    <ul class="navbar-nav me auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>

    </ul>
</nav>

<!-- Third child -->
<div class="bg-light">
    <h3 class="text-center">Hidden Store</h3>
    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati, asperiores.</p>
</div>




<!-- Fourth Child -->
<div class="row">
    <div class="col-md-10">
        <!-- products -->
        <div class="row">
            <div class="col-md-4 mb-2">
              <div class="card">
  <img src="./images/dairymilk.jpg" class="card-img-top" alt="dairy milk">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondry">View More</a>

  </div>
</div>
</div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/apple.webp" class="card-img-top" alt="apple" height="332">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondry">View More</a>
  </div>
</div>

            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/capsicum.webp" class="card-img-top" alt="capsicum">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondry">View More</a>
  </div>
            </div>

            </div>

            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/capsicum.webp" class="card-img-top" alt="capsicum">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondry">View More</a>
  </div>
            </div>

            </div>

            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/capsicum.webp" class="card-img-top" alt="capsicum">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondry">View More</a>
  </div>
            </div>

            </div>


            <div class="col-md-4 mb-2">
            <div class="card">
  <img src="./images/capsicum.webp" class="card-img-top" alt="capsicum">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-info">Add to cart</a>
    <a href="#" class="btn btn-secondry">View More</a>
  </div>
            </div>

            </div>

        
        
        
        
        <!-- row end  end -->
        
          </div>
          <!-- col end here  -->


    </div>
    <div class="col-md-2 bg-secondry p-0">
        <!-- Brands to be displayed -->
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light "><h4>Delivary brands</h4></a>
          </li>
          <?php
$select_brands="select * from `brands`";
$result_brands=mysqli_query($con, $select_brands);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];

while($row_data=mysqli_fetch_assoc($result_brands)) {
  $brand_title=$row_data['brand_title'];
  $brand_id=$row_data['brand_id'];
  echo "<li class='nav-item '>
  <a href='index.php?brand=$brand_id' class='nav-link  '> $brand_title</a>
</li>";

}

?>

        </ul>
<!-- category to be displayed -->

<ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-info">
            <a href="#" class="nav-link text-light "><h4>category</h4></a>
          </li>
          <?php
$select_categories="select * from `categories`";
$result_categories=mysqli_query($con, $select_categories);
//$row_data=mysqli_fetch_assoc($result_brands);
//echo $row_data['brand_title'];

while($row_data=mysqli_fetch_assoc($result_categories)) {
  $category_title=$row_data['category_title'];
  $category_id=$row_data['category_id'];
  echo "<li class='nav-item '>
  <a href='index.php?category=$category_id' class='nav-link  '> $category_title</a>
</li>";

}

?>
          

        </ul>

    </div>

    
</div>








<!-- last Child -->
<div class="bg-info p-3 text-center">
    <p>All rights reserved ©- desined by Raza 2023</p>
</div>
    </div>







<!-- Bootstrape js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
 crossorigin="anonymous"></script>
</body>
</html>