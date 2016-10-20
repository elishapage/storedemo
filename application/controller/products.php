<?php

class products extends Controller
{
   
    public function index()
    {
        // getting all products
        $products = $this->model->getAllproducts();
        
       // load views. within the views we can echo out $products and $amount_of_products easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/products/index.php';
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
    public function addproduct()
    {
        // if we have POST data to create a new product entry
        if (isset($_POST["submit_add_product"])) {
            // do addproduct() in model/model.php
            $this->model->addproduct($_POST["name"], $_POST["manufacturer"],  $_POST["price"]);
        }

        // where to go after product has been added
        header('location: ' . URL . 'products/index');
    }

    /**
     * ACTION: deleteproduct
     * This method handles what happens when you move to http://yourproject/products/deleteproduct
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a product" button on products/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to products/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $product_id Id of the to-delete product
     */
    public function deleteproduct($product_id)
    {
        // if we have an id of a product that should be deleted
        if (isset($product_id)) {
            // do deleteproduct() in model/model.php
            $this->model->deleteproduct($product_id);
        }

        // where to go after product has been deleted
        header('location: ' . URL . 'products/index');
    }

     /**
     * ACTION: editproduct
     * This method handles what happens when you move to http://yourproject/products/editproduct
     * @param int $product_id Id of the to-edit product
     */
    public function editproduct($product_id)
    {
        // if we have an id of a product that should be edited
        if (isset($product_id)) {
            // do getproduct() in model/model.php
            $product = $this->model->getproduct($product_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $product easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/products/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to products index page (as we don't have a product_id)
            header('location: ' . URL . 'products/index');
        }
    }
    
    /**
     * ACTION: updateproduct
     * This method handles what happens when you move to http://yourproject/products/updateproduct
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a product" form on products/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to products/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateproduct()
    {
        // if we have POST data to create a new product entry
        if (isset($_POST["submit_update_product"])) {
            // do updateproduct() from model/model.php
            $this->model->updateproduct($_POST["name"], $_POST["manufacturer"],  $_POST["price"], $_POST['product_id']);
        }

        // where to go after product has been added
        header('location: ' . URL . 'products/index');
    }

   

}
