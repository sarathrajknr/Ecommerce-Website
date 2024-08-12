<?php 
include('../includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
    <!--bootstrap CSS link-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!--font awesome link-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--CSS File-->
<link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <!--form-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--Product title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" Placeholder="Enter Product Title" autocomplete="off" required="required">
            </div>
            <!--description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="description" class="form-label">Product description</label>
                <input type="text" name="description" id="product_title" class="form-control" Placeholder="Enter Product description" autocomplete="off" required="required">
            </div>
            <!--keywords-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" Placeholder="Enter Product keywords" autocomplete="off" required="required">
            </div>
            <!--categories-->
            <div class="form-outline mb-4 w-50 m-auto">
             <select name="product_categories" id="" class="form-select">
                <option value="">Select a Category</option>
                <?php 
                      $select_query="Select * from `categories`";
                      $result_query=mysqli_query($con,$select_query);
                
                




                
                ?>





                <option value="">Category1</option>
                <option value="">Category2</option>
                <option value="">Category3</option>
                <option value="">Category4</option>
             </select>                   
            </div>
            <!--Brands-->
            <div class="form-outline mb-4 w-50 m-auto">
             <select name="product_brands" id="" class="form-select">
                <option value="">Select a Brand</option>
                <option value="">Brand1</option>
                <option value="">Brand2</option>
                <option value="">Brand3</option>
                <option value="">Brand4</option>
             </select>                   
            </div>
            <!--Image 1-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required="required">
            </div>
            <!--Image 2-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-label">Product image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required="required">
            </div>
            <!--Image 3-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-label">Product image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required="required">
            </div>
            <!--Price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-label">Product price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" Placeholder="Enter Product price" autocomplete="off" required="required">
            </div>
            <!--Price-->
            <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="insert_product" value="Insert Products" class="btn btn-info mb-3 px-3">
            </div>
        </form>
    </div>
    
</body>
</html>