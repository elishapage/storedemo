<?php

class products extends Controller
{
   
    public function index()
    {
        
        $products = $this->model->getAllproducts();
        
       
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
        require APP . 'view/_templates/footer.php';
    }

    
    public function addproduct()
    {
       
        if (isset($_POST["submit_add_product"])) {   
            $this->model->addproduct($_POST["name"], $_POST["manufacturer"],  $_POST["price"]);
        }
        header('location: ' . URL . 'products/index');
    }

    
    public function deleteproduct($product_id)
    {
        if (isset($product_id)) {
            $this->model->deleteproduct($product_id);
        }
        header('location: ' . URL . 'products/index');
    }

     
    public function editproduct($product_id)
    {
        if (isset($product_id)) {
            $product = $this->model->getproduct($product_id);

            require APP . 'view/_templates/header.php';
            require APP . 'view/products/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            header('location: ' . URL . 'products/index');
        }
    }
    
    public function updateproduct()
    {
        if (isset($_POST["submit_update_product"])) {
            $this->model->updateproduct($_POST["name"], $_POST["manufacturer"],  $_POST["price"], $_POST['product_id']);
        }
        header('location: ' . URL . 'products/index');
    }

}
