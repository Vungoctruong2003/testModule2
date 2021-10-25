<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
<?php
include_once "Views/navbar.php";
include_once "Controller/productController.php";
include_once "Models/DBConnect.php";
include_once "Models/ProductModel.php";

$productController = new productController();

?>
<div class="container">
    <?php
    $id = $_GET['id'] ?? null;
    $action = $_GET['action'] ?? null;
    $method = $_SERVER['REQUEST_METHOD'];
    switch ($action) {
        case "add":
            if ($method == "POST") {
                $product = [];
                $product['name'] = $_REQUEST['name'];
                $product['category'] = $_REQUEST['category'];
                $product['price'] = $_REQUEST['price'];
                $product['quantity'] = $_REQUEST['quantity'];
                $product['description'] = $_REQUEST['description'];
                $product['dateGenerate'] = $_REQUEST['dateGenerate'];

                $productController->insertProduct($product);
            }
            include_once "Views/add_product.php";
            break;
        case "delete":
            $productController->removeProduct($id);
            break;
        case "update":
            $productController->showEditProductById($id);
            include_once "Views/edit_product.php";
            if ($method == "POST") {
                $product = [];
                $product['id'] = $_REQUEST['id'];
                $product['name'] = $_REQUEST['name'];
                $product['category'] = $_REQUEST['category'];
                $product['price'] = $_REQUEST['price'];
                $product['quantity'] = $_REQUEST['quantity'];
                $product['description'] = $_REQUEST['description'];
                $product['dateGenerate'] = $_REQUEST['dateGenerate'];
                $productController->updateProduct($product);
            }
            break;
        case "show-list":
            $productController->showList();
            break;
        case "search":
            $key = $_REQUEST['key'];
            $productController->searchByName($key);
            break;
    }
    ?>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>
