<?php

class Model
{
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }


    public function getAllproducts()
    {
        $sql = "SELECT id, name, manufacturer, price FROM products";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function addproduct($name, $manufacturer, $price)
    {
        $sql = "INSERT INTO products (name, manufacturer, price) VALUES (:name, :manufacturer, :price)";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':manufacturer' => $manufacturer, ':price' => $price);
        $query->execute($parameters);
    }

    
    public function deleteproduct($product_id)
    {
        $sql = "DELETE FROM products WHERE id = :product_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':product_id' => $product_id);
        $query->execute($parameters);
    }

   
    public function getproduct($product_id)
    {
        $sql = "SELECT id, name, manufacturer, price FROM products WHERE id = :product_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':product_id' => $product_id);
        $query->execute($parameters);
        return $query->fetch();
    }

    
    public function updateproduct($name, $manufacturer, $price, $product_id)
    {
        $sql = "UPDATE products SET name = :name, manufacturer = :manufacturer, price = :price WHERE id = :product_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':name' => $name, ':manufacturer' => $manufacturer, ':price' => $price, ':product_id' => $product_id);
        $query->execute($parameters);
    }


    public function getAllorders()
    {
        $sql = "SELECT orders.order_id, customer.customer_name, orders.time_ordered FROM orders INNER JOIN customer on orders.customer_id=customer.customer_id ORDER BY order_id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function getOrderItems($order_id)
    {
        $sql = "SELECT products.name, products.manufacturer, order_items.quantity FROM order_items INNER JOIN products on products.id = order_items.product_id WHERE order_id=$order_id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function getOrderInfo($order_id)
    {
        $sql = "SELECT orders.order_id, customer.customer_name, orders.time_ordered FROM orders INNER JOIN customer on orders.customer_id=customer.customer_id WHERE order_id=$order_id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    
}
