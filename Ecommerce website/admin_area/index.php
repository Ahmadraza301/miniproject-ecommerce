<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrape css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file link -->
    <link rel="stylesheet" href="../style.css">
    <style>
.admin_image{
    width: 100px;
    object-fit: contain;
}

.footer{
    position:absolute;
    bottom:0;
}
    </style>

</head>
<body>
    <!-- Navbar -->
    <div class="container-fluid p-0 nn">
        <!-- First child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../images/logo.png" alt="logo" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link">welcome Guest</a>
                        </li>

                    </ul>
               
                </nav>
            </div>
        </nav>
        
        <!-- second child -->
        <div class="bg-light">
            <h3 class="text-center p-2"> Manage Details</h3>
        </div>

        <!-- Third child -->
        <div class="row">
            <div class="col-md-12 bg-secondry p-1 d-flex align-items-center">
                <div class="mx-3">
                    <a href="#"><img src="../images/pineapple.jpeg" alt="" class="admin_image"></a>
                    <p class="text-ligh text-center">Admin Name</p>
                </div>
                <div class="button text-center">
                    <button class="mx-2"><a href="insert_product.php" class="nav-link bg-info text-light my-1"> Insert Products </a></button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> View products</a> </button>
                    <button class="mx-2"><a href="index.php?insert_category" class="nav-link bg-info text-light my-1"> Insert categories </a></button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> view category</a> </button>
                    <button class="mx-2"><a href="index.php?insert_brands" class="nav-link bg-info text-light my-1"> insert Brands</a> </button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> view brands</a> </button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> All orders</a></button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> All payments</a></button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> List Users</a> </button>
                    <button class="mx-2"><a href="" class="nav-link bg-info text-light my-1"> Logout</a></button>
                </div>

            </div>
        </div>

        <!-- fourth Child -->
        <div class="container ">
            <?php 
            if(isset($_GET['insert_category'])) {
                include('insert_categories.php');
            }

            if(isset($_GET['insert_brands'])) {
                include('insert_brands.php');
            }


            ?>


        </div>

        <!-- last Child -->
<div class="bg-info p-3 text-center footer">
    <p>All rights reserved ©- desined by Raza 2023</p>
</div>
    </div>






<!-- bootstrape js link -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
 crossorigin="anonymous"></script>
    
</body>
</html>