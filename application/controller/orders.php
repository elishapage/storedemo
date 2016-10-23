<?php

class orders extends Controller
{
   
    public function index()
    {
        // getting all products
        $orders = $this->model->getAllorders();


        
       // load views. within the views we can echo out $products and $amount_of_products easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/orders/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function ordersbyproduct($product_id)
    {
        // getting all products by
        $orders = $this->model->getAllOrdersByProduct($product_id);
        $productname = $this->model->getProductName($product_id);
       // load views. within the views we can echo out $products and $amount_of_products easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/orders/index.php';
        require APP . 'view/_templates/footer.php';

    }
    




}