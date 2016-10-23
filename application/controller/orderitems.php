<?php

class orderitems extends Controller
{
   
    public function index($order_id)
    {

        $orderitems = $this->model->getOrderItems($order_id);
        $orderinfo = $this->model->getOrderInfo($order_id);

        
       
        require APP . 'view/_templates/header.php';
        require APP . 'view/orderitems/index.php';
        require APP . 'view/_templates/footer.php';
    }

    

}