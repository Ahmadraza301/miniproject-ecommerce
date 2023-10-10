<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){
    $Product_title=$_POST['Product_title'];
    $Description=$_POST['Description'];
    $product_keywords=$_POST['product_keywords'];
    $product_category=$_POST['product_category'];
    $product_brand=$_POST['product_brand'];
    $product_price=$_POST['product_price'];
    $product_status='true';

    //accsessing Images
    $product_image1=$_FILES['product_image1']['name'];
    $product_image2=$_FILES['product_image2']['name'];
    $product_image3=$_FILES['product_image3']['name'];

    //accessing iamge temp name
    $temp_image1=$_FILES['product_image1']['tmp_name'];
    $temp_image2=$_FILES['product_image2']['tmp_name'];
    $temp_image3=$_FILES['product_image3']['tmp_name'];


    //checking empty conditons
    if($Product_title=='' or $Description=='' or $product_keywords=='' or $product_category=='' or $product_brand=='' or  $product_image1=='' or $product_image2=='' or $product_image3=='' or $product_price=='' ){
        echo "<script>alert('All fields are mandetory')</script>";
        exit();

    }else {
        move_uploaded_file($temp_image1, "./product_images/$product_image1");
        move_uploaded_file($temp_image2, "./product_images/$product_image2");
        move_uploaded_file($temp_image3, "./product_images/$product_image3");

        //insert Query
        $insert_products="insert into `products` (product_title, product_description, product_keywords, category_id, brand_id, product_image1, product_image2, product_image3, date, status)
        values('$Product_title', '$Description', '$product_keywords', '$product_category', '$product_brand', '$product_image1', '$product_image2', '$product_image3' '$product_price', NOW(), '$product_status') ";
        $result_query=mysqli_query($con, $insert_products);
        if($result_query) {
            echo "<script>alert('product Inserted successfully')</script>";


        }

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
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
</head>
<body class="bg-light">
    <div class="container mt-2 ">
        <h1 class="text-center">Insert Products</h1>
        <!-- form are here -->
        <form action="" method="post" enctype="multipart/form-data">
            <!-- Product title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Product_title" class="form-label">Product Title</label>
                <input type="text" name="Product_title" id="product_title" class="form-control" placeholder="Enter product Title" autocomplete="off" required="required">
            </div>

              <!-- Product Description -->
              <div class="form-outline mb-4 w-50 m-auto">
                <label for="Description" class="form-label">Product Description</label>
                <input type="text" name="Description" id="Description" class="form-control" placeholder="Enter product Description" autocomplete="off" required="required">
            </div>

            <!--  product_keywords -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter product Keywords" autocomplete="off" required="required">
            </div>


            <!-- categories -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="Select Catgory">Select category</option>
                    <!-- connection between database for the product -->
                    <?php
                            $select_query="select * from `categories`";
                            $result_query=mysqli_query($con, $select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $category_title=$row['category_title'];
                                $category_id=$row['category_id'];
                                echo "<option value='$category_id'>$category_title</option>";
                                
                            }

?>
               

                </select>
            </div>

            <!-- brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brand" id="" class="form-select">
                    <option value="Select Catgory">Select brands</option>
                    <!-- database connection -->
                    <?php
                            $select_query="select * from `brands`";
                            $result_query=mysqli_query($con, $select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $brand_title=$row['brand_title'];
                                $brand_id=$row['brand_id'];
                                echo "<option value='$$brand_id'>$brand_title</option>";
                                
                            }

                    ?>
                </select>
            </div>

             <!-- Image1 -->
             <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control"  required="required">
            </div>

            <!-- Image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
            </div>
            <!-- Image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control"  required="required">
            </div>

            <!--  price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter product price" autocomplete="off" required="required">
            </div>

            <!--  Insert Product -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info" mb-2 px-3- value="insert Products">
            </div>
        </form>
    </div>
    
</body>
</html>