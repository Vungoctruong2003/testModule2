<?php

class productController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    function showList()
    {
        $products = $this->productModel->getAllProduct();
        include_once "Views/list_product.php";
    }
    function insertProduct($product)
    {
        $this->productModel->addProduct($product);
        header("location:index.php?action=show-list");
    }
    function removeProduct($id)
    {
        $this->productModel->deleteProduct($id);
        header("location:index.php?action=show-list");
    }
    function searchByName($key){
        $products = $this->productModel->search($key);
        include_once "Views/search_product.php";
    }

    function showEditProductById($id)
    {
        $product = $this->productModel->getProductById($id);
        include_once "Views/edit_product.php";
    }

    function updateProduct($product)
    {
        $this->productModel->edit($product);
        header("location:index.php?action=show-list");
    }

}