<?php

class orders extends Controller
{
   
    public function index()
    {
        $orders = $this->model->getAllorders();

        require APP . 'view/_templates/header.php';
        require APP . 'view/orders/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function ordersbyproduct($product_id)
    {
        
        $orders = $this->model->getAllOrdersByProduct($product_id);
        $productname = $this->model->getProductName($product_id);
    
        require APP . 'view/_templates/header.php';
        require APP . 'view/orders/index.php';
        require APP . 'view/_templates/footer.php';

    }
    




}