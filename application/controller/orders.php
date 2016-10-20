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

    /**
     * ACTION: addproduct
     * This method handles what happens when you move to http://yourproject/products/addproduct
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a product" form on products/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to products/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
  

}